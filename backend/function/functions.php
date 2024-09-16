<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';

require '../vendor/autoload.php';

require '../config/dbc.php';

function sideForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");

            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO Bonicholsform(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>name : ' . $name . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


// --------------------------------------HELPERS------------------------------------------

function sendEmail($message, $subject = 'Lead from contact@bonicholslaw.com', $to = 'info@bonicholslaw.com', $fromName = 'Publish-book'): void
{
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'bonicholslaw.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@bonicholslaw.com';
        $mail->Password = 'Bookpublishing@2023';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('contact@bonicholslaw.com');
        $mail->addAddress($to);
        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// GET CURRENT REQUEST
function current_url()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}

function clean($string)
{
    $string = str_replace(' ', '-', $string);
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}