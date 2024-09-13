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
<title>MAJOR NEW CHILD CUSTODY LAWS ADDRESS PARENTING TIME EFFECTIVE SEPTEMBER 1ST | Bo Nichols Law</title>

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
<style>
    .news-block-three .inner-box .lower-content h3 {
    position: relative;
    line-height: 1.4em;
    font-weight: 700;
    margin-top: 15px;
    margin-bottom: 12px;
    color: black;
}

</style>

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
					<div class="text"><?php echo $name ?></div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="../">home</a></li>
						<li><a href="./">blogs</a></li>
						<li><?php echo $name; ?></li>
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
                                 <div class="news-block-three">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href=""><img src="../assets/images/blogs/cc1.jpg" alt=""></a>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-meta">
                                                <li><span class="icon flaticon-user-1"></span> By <span class="theme-color">Bo Nichols</span></li>
                                                <li><span class="icon flaticon-calendar-1"></span> January 26, 2022</li>
                                            </ul>
                                            <h3>  
                                            
                                            Child Custody And Parenting Rights</h3>
                                            
                                            
                                            <div class="my-texttt">
                                                <div class="text">Apart from divorce decisions, deciding child's custoy dand child support is a major decision for divorcing couples. It affects the future life of 
                                                the child; therefore, you have to decide what's in the best interest of your child. Houston law advises keeping the child's priority ahead of all other matters typically involved in marriage termination. 
                                                
                                                <!--<a class="read-more" href="childcustody.php">Read More</a>-->
                                                
                                                <br>
                                                For deciding the custody and parenting rights, a legal attorney can help you. He can keep you focused on the things that matter
                                                and allow you to protect your rights as well as emphasize what's beneficial for your child. Some important considerations while planning child custody include:
                                                
                                                <br><br>
                                                
                                                <ul>
                                          
                                            <li style="list-style: disc !important;">Involve your child – if your child is mature enough to understand post-divorce circumstances, it is better to discuss your thoughts with him.</li>
                                                       
                                                <li style="list-style: disc !important;">A logical approach - think about how your work schedules and daily routine will affect your kids’ lives.</li>
                                                  <li style="list-style: disc !important;">How your kids will feel – put yourself in your kids' shoes and decide what they want or how they will react to your decisions.</li>
                                                    <li style="list-style: disc !important;">Continue Focus on your goals: don't try to get revenge from your spouse; focus on your child's future.</li>
                                                      <!--<li style="list-style: disc !important;">Allow courts to continue to use reasonable efforts to hold proceedings remotely with certain exceptions or actions required.</li>-->
                                            </ul>
                                          

</div>
                                            <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                        </div>
                                        <div class="my-texttt">
                                                <div class="text">With few exceptions, the partners usually, with the help of a divorce attorney, come to a single agreement regarding child custody and visitation rights. They must ensure that the decision is in the child's best interest and both parents'. Texas law support that the child or children maintain a close relationship with both parents and be spared from an unnecessary fight between the parents. 
With said that, if the custody and visitation issues are not solved with mutual agreement, the judge will make a decision for these issues in a divorce proceeding. But what factors take part in deciding a child's custody? 
                                             

</div>
                                            <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                        </div>
                        <h3>Factors That Family Court Considers Before Deciding Child Custody</h3>
                                              <div class="my-texttt">
                                                <div class="text">The main factors which the judge consider before making custody decisions include:
                                                      <br><br>
                                                
                                                <ul>
                                          
                                            <li style="list-style: disc !important;">The ability of each parent to fulfill the child's physical needs, medical care, and emotional support. Some courts also require character witnesses for each parent.</li>
                                                       
                                                <li style="list-style: disc !important;">The children's desire, especially if the child is 12 years or above. </li>
                                                  <li style="list-style: disc !important;">The level of attachment between the child and the parent.</li>
                                                    <li style="list-style: disc !important;">The financial condition of each parent and the ability to secure the child's future.</li>
                                                      <li style="list-style: disc !important;">The physical and mental health of the parent. </li>
                                                       <li style="list-style: disc !important;">The ability of the parent to spend time with the children. </li>
                                                  <li style="list-style: disc !important;">The accommodation of each parent and the level of attachment between the child with school, neighborhood, and home.</li>
                                                    <li style="list-style: disc !important;">Any evidence of domestic abuse, violence, or criminal activity by either parent. </li>
                                                      <li style="list-style: disc !important;">The willingness of the parent to support the child and wish of attaining child’s custody.</li>
                                            </ul>
</div>
    </div>
                  <h3>Does Texas Child Custody Arrangement Consider The Desire Of The Child? </h3>
                                              <div class="my-texttt">
                                                <div class="text">Some children have strong opinions to live with either parent, especially if they are older to understand family matters. 
                                                However, the court usually does not prefer to indulge the kids in chiming in these matters. 
                                                      <br>
                                                      Nevertheless, if a child asks to live with one parent, it is essential to find the reason behind this desire. Also, the decision-making power of the child is assessed to ensure someone does not force that child. <br>
                                                      According to Texas law, the court may listen to the preferences of kids older than 12 years of age, but it is still the court's responsibility to make a decision that fulfills the child's best interest. 
                                                
                                             
</div>
    </div>
        <h3>Visitation Rights</h3>
                                              <div class="my-texttt">
                                                <div class="text">The parent or guardian who receives the primary custody of the child is called the managing conservator, while the co-parent with visitation rights is the possessory conservator. The schedule of the visit varies with each case and depends on the age of the child and the circumstances of the divorce case.
                                                The Texas court follows a standard custody order of the Texas Family Code, and the divorces in Houston follow the same visitation schedule.  
                                                      <br>
                                                      Usually, the visitation schedule includes two weekends per month, alternate holidays, and summer vacations for the children.<br>
                                                      
                                                      It is the responsibility of the managing conservator to make the child available to the possessory conservator on each visitation day. 
                                                      Weekend plans for the child cannot cancel the visit to the possessory conservator as the co-parent can use this evidence in the court to ask for custody modification.
                                                      Both parents should help their kids maintain a positive relationship with another parent. 
    </div>
                                    </div>
                                         <h3>What If Your Child Don’t Want To Meet Co-Parent?</h3>
                                              <div class="my-texttt">
                                                <div class="text">Divorce not only separates the couples, but it also damages the entire family. As you and your partner are willing to end the marriage, your kids may be upset with one
                                                or both parents. This may result in your kid not being willing to meet the other parent; however, you must convince your child to spend time with your spouse.   
                                                      <br>
                                                      Parents should try to keep their child apart from fights and damaging relationships, but if your child is older enough to understand these matters, eventually, you cannot do so. 
                                                      <br>
                                                      
                                                    Well, if your kids don't want to spend time with your ex, try to convince them. Otherwise, your co-parent can ask the court for custody enforcement. Your ex might present this matter against you and claim that you are engaged in turning the child against them. In addition, speak to your child about the issue or the reason for refusal to meet the other parent; in this way, 
                                                    you may find your way to convince the child or file a request to modify the custody order. You can get help from a professional child custody attorney to file a petition for modification of custody orders. 
    </div>
                                    </div>
                                    
                                                 <h3>Conclusion</h3>
                                              <div class="my-texttt">
                                                <div class="text">All in all, similar to divorce, deciding a child's custody and parenting rights is challenging; however, you must remember that it will 
                                                affect your child's entire life. Needless to say, you must make decisions that are in your child's best interest.  
                                                      <br>
                                                      
                                                   Like all other states law, the Texas court also emphasizes building a positive relationship of the child with both parents and granting the child's custody to the parent who is more capable of taking care of the kid.
                                                   If you need any help regarding child custody and parenting rights, or you need to file a petition for child custody, contact us, and we are here to help you! 
                                    </div>
                                    
                                    
                                    
                                </div>
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