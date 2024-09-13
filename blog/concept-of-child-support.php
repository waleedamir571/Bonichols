<?php include 'partials/header.php'; ?>
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
                                            <a href=""><img src="../assets/images/blogs/conceptofchild.jpg" alt=""></a>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-meta">
                                                <li><span class="icon flaticon-user-1"></span> By <span class="theme-color">Bo Nichols</span></li>
                                                <li><span class="icon flaticon-calendar-1"></span> February 22, 2022</li>
                                            </ul>
                                            <h3>  
                                            
                                           The Concept of Child Support and the Real Purpose Behind It</h3>
                                            
                                            <h3>
                                            
                                            Overview</h3>
                                            
                                            
                                            
                                            <div class="my-texttt">
                                                <div class="text">Child support is a vital need in most cases, where one parent pays the other financial assistance to provide for their child or children.
                                                Child-support payments can vary depending on where you live and what agreement has been reached between you!
                                                
                                                <br>
                                                
                                         
                                          

</div>
                                            <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                        </div>
                                        <div class="my-texttt">
                                                <div class="text">The court orders one parent to support their child financially. The amount of money depends on what both parties agreed upon. Still, 
                                                it's often about half-of-the annual income for the duration that either party has custody or rights overseeing them.

</div>
                                            <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                        </div>
                                        <br>
                                        
                        <!--<h3>Negotiate Your Divorce, Without an Attorney</h3>-->
                                              <div class="my-texttt">
                                                <div class="text">Consider the amount you need to support your children. The number is based on a formula that considers each parent's gross monthly income, cost of medical insurance and dental care, and childcare
                                                expenses for both parents' time divided between them (including overnight shifts if needed) plus
                                                percentage sharing responsibility for any non-related kids living at home too!
                                                      <br><br>
                                                
                                            
</div>
    </div>
                   <h3>The Basics of Child Support</h3>
                                              <div class="my-texttt">
                                                <div class="text">Child support can be a confusing and complicated process for all parties involved. The laws that apply in one state may not match up with the standards of another, so it's always best to consult an experienced family law attorney near you who will
                                                help explain how things work overall as well as a guide through any details specific about your situation or location where custody agreements must take place.
                                                      <br><br>
                                                    There are some basic things that parents should know. First, a custodial parent has primary custody most of the time and defines non-custodial or
                                                    "other" parent as someone with physical supervision limited only by the law in their country; however, they may also have legal authority over your child's welfare.
                                                    <br><br>
                                                    The goal of child support is that the parents split financial responsibility for raising their children. This typically means non-custodial makes 
                                                    regular payments to help cover basic needs like food and clothing while custody remains with mom or dad!
                                                
                                             
</div>
    </div>
        <h3>Uses for Child Supports</h3>
                                              <div class="my-texttt">
                                                <div class="text">Money paid as child support is supposed to be used to care for children involved. It's not up
                                                to a custodial parent; however, they may choose to use it themselves if need be - which can lead to conflicts and confusion
                                                about what exactly should happen with this payment.
                                                      <br>
                                                   Child support is designed to maintain the standard of living for children and ensure they have all their basic needs met. The money can be used in such things as:<br>
                                                      
                                                      
                                                      
                                                    <ul>
                                                        <li>When you're a parent, the most important thing is to ensure your child has everything they need for a healthy life.</li>
                                                        <li>Medical expenses are an important part of keeping your child healthy and happy. These include doctor's visits and medications who 
                                                        need it most but can't cover under parent plans because they're too expensive - that way, you don't have to worry about paying out-of-pocket costs if something happens!.</li>
                                                        <li>There are a few different ways to cover your child's healthcare needs. One option is for one parent or guardian to enroll them in their health insurance plan,
                                                        which will be effective until the age of 18 if they remain covered under this benefit.</li>
                                                        <li>The cost of extracurricular activities, including sports and summer camps, should be included in your child’s annual educator expenses.</li>
                                                    </ul>
                                                    <br><br>
                                                    When the custodial parent receives support, it should not be used for their expenses unrelated to children. Misuse of funds includes things like clothing or 
                                                      <br><br>
                                                      entertainment that do nothing about childrearing and vacations, which can potentially harm them if they are spending too much time enjoying themselves rather than taking care of what's important- the kids!
                                                      <br><br>
                                                      When a parent agrees to provide financial support for their child, they should agreement detail how this money will be spent. It may also have ways of dealing with unexpected expenses that
                                                      come up in the future and sharing those costs among both parties as needed or desired.
                                                    
    </div>
                                    </div>
                                         <h3>What Does Child Support Cover? </h3>
                                              <div class="my-texttt">
                                                <div class="text">Child support is intended for the care and well-being of your children. 
                                                You must understand this concept so we can work together as parents to provide a stable home life, ultimately leading our kids towards success in college or career!
                                                      <br><br>
                                                    The best way for parents to provide their children with the bare essentials is through basic needs. These include things like shelter and food,
                                                    but each state will have a different list, which makes it important that you check before providing anything else!
                                                      <br>
                                                   
    </div>
                                    </div>
                                    
                                                 <h3>Shelter </h3>
                                              <div class="my-texttt">
                                                <div class="text">the shelter is the child's primary home, and this may include mortgage, rent, and utilities to provide a safe 
                                                living environment. Shelter refers to an area where people live in relative comfort with peace of mind knowing they can always rely on their surroundings for safety.
                                                      <br><br>
                                                      
                                               
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                 <h3>Food </h3>
                                              <div class="my-texttt">
                                                <div class="text">Caring for your children is a basic necessity of all human life, yet many moms/dads continue to neglect
                                                this duty despite knowing it's important! Childcare expenses can refer not just from one parent but both, so why don't we see them as an opportunity instead?
                                                      <br><br>
                                         
                                    </div>
                                    
                                    
                                    
                                </div>
                                  <h3>Clothing</h3>
                                              <div class="my-texttt">
                                                <div class="text">The importance of clothes as a basic necessity and the obviousness that child support payments should cover it cannot go unnoted.
                                                     
                                                      
                                              
                                    </div>
                                    
                                    
                                    
                                </div>
                                    <h3>School </h3>
                                              <div class="my-texttt">
                                                <div class="text">When it comes to school, you need a lot for your child. You'll want supplies and books and clothing or other related costs like transportation- all of which can be expensive!
                                                     
                                                   <br><br>
                                                   When a parent pays child support, they are not providing enough money to cover the necessities of life like childcare and medical expenses. Accordingly, 
                                                   these additional costs must come from either person who owes spousal or partner's duties at home.
                                                    <br><br>
                                                    Extracurricular activities are often required to be covered by child support, and these may also come up in an agreement depending on existing after-school expenses. Still, misuse of funds essentially includes anything that doesn't 
                                                    contribute to the well-being and betterment of a child's future needs or costs- which should get saved up from monthly income leftover at the end month if possible before it's spent.
                                                    
                                                     <br><br>
                                                     The best way to avoid any misuse of funds is by having an agreement that defines how and when spending can occur. Both parents and they need to
                                                     be on board with their roles throughout the process- after all, it would be costly if one person felt shafted out because he didn't know what was going down!
                                              
                                    </div>
                                    
                                    
                                    
                                </div>
                                    <h3>Final Word</h3>
                                              <div class="my-texttt">
                                                <div class="text">It is important to remember that the money you pay or receive in child support should be used for your children's well-being. Though there may come challenges along the way, it can mean a lot if their 
                                                parents work together and ensure they get everything needed, so not only will happiness but also security exist within these young lives!
                                                     
                                                      
                                              
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