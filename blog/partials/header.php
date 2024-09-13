
<?php include 'includes/functions.php' ?>

<!DOCTYPE html>
<html>
<?php
require("config.php");
$id = 11;
    $query = "SELECT * FROM blogs WHERE id = '$id'";
    $run = mysqli_query($con,$query);
    if(!$run){
        die("Query Failed " . mysqli_error($con));
    }else{
        while($row = mysqli_fetch_assoc($run)){
            $name = $row['name'];
            $author = $row['author'];
            $img = $row['img'];
            $content = $row['content'];
            $date = $row['date'];
        }
}
    ?>

<head>
    <meta charset="utf-8">
    <title>
		<?php echo $title_name; ?>
	</title>
	<meta name="description" content="<?php echo $description; ?>">
    <!-- Stylesheets -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <link href="../assets/css/style-2.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">

    <link id="theme-color-file" href="../assets/css/color-themes/blue-theme.css" rel="stylesheet">

    <link href="../assets/falt/font/flaticon.css" rel="stylesheet">
    <link href="../assets/fancybox-master/dist/jquery.fancybox.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../assets/images/fav.png">

   	<link rel="canonical" href="<?php echo $url; ?>" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="../assets/js/respond.js"></script><![endif]-->
</head>



<div class="preloader"></div>