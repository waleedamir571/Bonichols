<!DOCTYPE html>
<html>
<?php 
if(isset($_GET['id'])){
    require("config.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM blogs WHERE id = {$id}";
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
}else{
    header("Location:../blogs/");
}
    ?>
<head>
<meta charset="utf-8">
<title><?php echo $name; ?> | Blogs | Bo Nichols Law</title>
<!-- Stylesheets -->
<link href="../assets/css/bootstrap.css" rel="stylesheet">

<link href="../assets/css/style-2.css" rel="stylesheet">
<link href="../assets/css/responsive.css" rel="stylesheet">

<link id="theme-color-file" href="../assets/css/color-themes/blue-theme.css" rel="stylesheet">

<link href="../assets/falt/font/flaticon.css" rel="stylesheet">
<link href="../assets/fancybox-master/dist/jquery.fancybox.css" rel="stylesheet">
<link href="../assets/css/custom.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="../assets/images/fav.png">


 <link rel="canonical" href="https://bonicholslaw.com/" />
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="../assets/js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
   <?php include('nav.php'); ?>
    <!-- End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(../assets/images/blogs/blog-single.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<div class="text"><?php echo substr($name,0,20); ?></div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="../">home</a></li>
						<li><a href="./">blogs</a></li>
						<li><?php echo substr($name,0,20); ?></li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						
						<!-- Search -->
						<div class="sidebar-widget newsletter-box">
							<div class="sidebar-title">
								<h4>GET NEWSLETTER</h4>
							</div>
							<form method="post" action="">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Entery Email" required>
									<button type="submit"><span class="icon flaticon-paper-plane-1"></span></button>
								</div>
							</form>
						</div>
						<!-- Categories Widget -->
						<div class="sidebar-widget categories-widget">
							<div class="sidebar-title">
								<h4>Our Services</h4>
							</div>
							<div class="widget-content">
								<ul class="blog-cat">
									<li><a href="../child-support">CHILD SUPPORT</a></li>
									<li><a href="../child-custody">CHILD CUSTODY</a></li>
									<li><a href="../divorce">DIVORCE</a></li>
									<li><a href="../enforcement">ENFORCEMENT</a></li>
								</ul>
							</div>
						</div>
						
						<!-- Categories Widget -->
						<div class="sidebar-widget popular-posts">
							<div class="sidebar-title">
								<h4>Recent Post</h4>
							</div>
							<div class="widget-content">
							    <?php
                                $query2 = "SELECT * FROM blogs ORDER BY id DESC LIMIT 3";
                                $run2 =mysqli_query($con, $query2);
                                if(!$run2){
                                    die("Query Failed " . mysqli_error($con));
                                }else{
                                    while($row2 = mysqli_fetch_assoc($run2)){
                                        $id2 = $row2['id'];
                                        $name2 = $row2['name'];
                                        $img2= $row2['img'];
                                        $date2 = $row2['date'];
                                        ?>
                                        <article class="post">
                                            <div class="post-inner">
                                                <figure class="post-thumb"><img src="../assets/images/blogs/<?php echo $img2 ?>" alt=""><a href="blog-single?id=<?php echo $id2; ?>" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                                <div class="text-left theme-color"><a href="blog-single?id=<?php echo $id2; ?>"><?php echo $name2 ?></a></div>
                                                <div class="post-info"><?php echo $date2 ?></div>
                                            </div>
                                        </article>
                                        <?php
                                    }
                                }
                                ?>
							</div>
						</div>
					</aside>
				</div>
				
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<!-- Blog Single -->
                	<div class="blog-single">
						<div class="inner-box">
							<div class="image">
								<img src="../assets/images/blogs/<?php echo $img; ?>" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="icon flaticon-user-1"></span> By <span class="theme-color"><?php echo $author; ?></span></li>
<!--									<li><span class="icon flaticon-comment-1"></span> 00</li>-->
									<li><span class="icon flaticon-calendar-1"></span> <?php echo $date; ?></li>
								</ul>
								<h3><?php echo $name; ?></h3>
								<?php echo $content ?>
							</div>
						</div>
                    </div>
                </div>
                
			</div>
		</div>
	</div>
	<!-- End Subscribe Section -->
	
	<!-- Main Footer -->
    <?php include('footer.php') ?>
	
</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/js/jquery.fancybox.js"></script>
<script src="../assets/js/appear.js"></script>
<script src="../assets/js/parallax.min.js"></script>
<script src="../assets/js/tilt.jquery.min.js"></script>
<script src="../assets/js/jquery.paroller.min.js"></script>
<script src="../assets/js/owl.js"></script>
<script src="../assets/js/mixitup.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/nav-tool.js"></script>
<script src="../assets/js/jquery-ui.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/color-settings.js"></script>

</body>
</html>