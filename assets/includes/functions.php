<?php
$baseUrl = "https://bonicholslaw.com/";
$functions = basename($_SERVER['PHP_SELF']);
switch ($functions) {
    case "index.php";
        $title_name = "Bo Nichols: Experienced Family Lawyer and Board-Certified Specialist";
        $description = "Bo Nichols: Board Certified Family Law Specialist, recognized as one of America's Best Lawyers and a Texas Super Lawyer";
        $url = $baseUrl;
        break;
    case "about.php";
        $title_name = "Bo Nichols | Board Certified Family Law Attorney";
        $description = "Bo Nichols: Board Certified Family Law Attorney with 25+ years' experience in Texas courts.";
        $url = $baseUrl . "about";
        break;
    case "enforcement.php";
        $title_name = " Enforcement of Court Orders | Bo Nichols Law";
        $description = "Navigate enforcement of court orders with confidence. Bo Nichols Law specializes in family law enforcement matters across Texas. Contact us for expert legal guidance";
        $url = $baseUrl . "enforcement";

        break;
        case "child-support.php";
        $title_name = " Professional Child Support Attorney in Houston | Bo Nichols";
        $description = "Bo Nichols is an experienced Houston-based child support lawyer who helps parents deal with complicated child support matters.";
        $url = $baseUrl . "child-support";

        break;
        case "child-custody.php";
        $title_name = " Professional Child Support Attorney in Houston | Bo Nichols";
        $description = "Bo Nichols is an experienced Houston-based child support lawyer who helps parents deal with complicated child support matters.";
        $url = $baseUrl . "child-custody";

        break;
        case "divorce.php";
        $title_name = " Divorce Lawyers Houston Texas | Bo Nichols Family Law";
        $description = "Divorce and other family law matters can be tough. Contact experienced Houston divorce lawyers and the Attorney team at Bo Nichols Law Firm today for help.";
        $url = $baseUrl . "divorce";

        break;
        case "resources.php";
        $title_name = " Our Resources | Bo Nichols Law";
        $description = "At the Bo Nichols Law Firm, we believe in educating our clients so they are prepared and know exactly what to expect.";
        $url = $baseUrl . "resources";

        break;
        case "testimonials.php";
        $title_name = " Testimonials | Bo Nichols Law";
        $description = "";
        $url = $baseUrl . "testimonials";

        break;
        case "contact.php";
        $title_name = " Contact Bo Nichols Law Firm ";
        $description = "Bo Nichols Law Firm team can help you find the best path forward in your family law case. To learn more, contact our office!";
        $url = $baseUrl . "contact";

        break;

        case "blog.php";
        $title_name = " Houston Family Law Blog | Bo Nichols Law ";
        $description = "Welcome to Our Houston blog deals with Divorce and Family Law and related issues. Please share your comments with Bo Nichols Law.";
        $url = $baseUrl . "blog";

        break;

        case "thank-you.php";
        $title_name = " Thank You | Bo Nichols Law ";
        $description = "Thank You";
        $url = $baseUrl . "thank-you";

        break;
        case "services.php";
        $title_name = " Services | Bo Nichols Law ";
        $description = "Services";
        $url = $baseUrl . "services";

        break;
        
  

}
