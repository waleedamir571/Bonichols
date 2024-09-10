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
    <title> What Are The Methods Family Lawyers Use To Settle Disputes?</title>

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

    /*ul, li {*/
    /*    list-style: disc;*/
    /*    padding: 0px;*/
    /*    margin: 0px;*/
    /*}*/
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
                        <div class="text"> What Are The Methods Family Lawyers Use To Settle Disputes?</div>
                    </div>
                    <div class="pull-right">
                        <ul class="page-breadcrumb">
                            <li><a href="../">home</a></li>
                            <li><a href="./">blogs</a></li>
                            <li></li>
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
                                        <input type="search" name="search-field" value="" placeholder="Entery Email"
                                            required>
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
                                            <figure class="post-thumb"><img
                                                    src="../assets/images/blogs/<?php echo $img2 ?>" alt=""><a
                                                    href="blog-single?id=<?php echo $id2; ?>" class="overlay-box"><span
                                                        class="icon fa fa-link"></span></a></figure>
                                            <div class="text-left theme-color"><a
                                                    href="blog-single?id=<?php echo $id2; ?>">
                                                    <?php echo $name2 ?>
                                                </a></div>
                                            <div class="post-info">
                                                <?php echo $date2 ?>
                                            </div>
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
                                    <a href="settledisputes.php"><img src="../assets/images/blogs/settledispute.jpg" alt=""></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-user-1"></span> By <span class="theme-color">Bo
                                                Nichols</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span> June 07, 2022</li>
                                    </ul>
                                    <h3>

                                        What Are The Methods Family Lawyers Use To Settle Disputes?</h3>
                                    <h3>

                                        Overview</h3>



                                    <div class="my-texttt">
                                        <div class="text">In a separation or divorce, ex-couples will often need to resolve custody, support, property division, and child support issues. However, not all divorcing and separating couples can
                                        independently agree to an amicable arrangement. The situation can often dissolve into enmity and disagreements when the arrangements for 
                                        life after marriage or cohabitation are made. Family lawyers can help in such cases by offering a range of dispute resolution options to assist ex-spouses in reaching a mutually beneficial agreement.

                            <br> <br>
                            There are many legal issues that you must deal with when you and your spouse separate. You will have to resolve any legal issues, including financial support, care for your children,
                            and the division of the family's property. These decisions can be made by going to court, and these can be done through informal arrangements or family conflict resolution (FDR).
                            <br>
                            FDR should not be used to resolve a dispute with someone violent or abusive. You should not use FDR with anyone who has bullied you or has more power.




                                        </div>
                                        <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                    </div>


                                    <h3>FDR - WHAT IS IT?</h3>
                                    <div class="my-texttt">
                                        <div class="text">The Divorce Act introduced the term family dispute resolution (FDR) on March 1, 2021. FDR can be used to resolve a family-related issue. You can either negotiate with someone or work
                                        with an arbitrator or mediator. Different types of FDR include negotiation, mediation, collaboration, and arbitration. There were many types of FDR before the Divorce Act. Before this, you could resolve any family law issues by
                                        using an alternative dispute resolution process like negotiation, mediation, or arbitration. However, the law now requires that you try to resolve any family law problems through a family dispute resolution process unless you are 
                                        unable to. A lawyer involved in a family case must also encourage you to seek a family conflict resolution process.
                                        A family conflict resolution process might not be appropriate in cases of violence within the family or power imbalances. Your lawyer should be notified if your child is abused or threatened by another parent.

                                        </div>
                                    </div>
                                    <br>
                                    <h3>What Are the Different Kinds of FDR?</h3>
                                    <h3>Alternative Dispute Resolution</h3>
                                    <div class="my-texttt">
                                        <div class="text">A range of dispute resolution options (ADR) can be used to solve family law disputes without the need for court. These methods are generally
                                        consensual and employ a more cooperative approach than an adversarial approach for dispute resolution.
                                            <br>
                                         Family courts require that parties try to resolve any disputes first using ADR methods unless the ex-spouses have a history of abuse. Family lawyers
                                         often use ADR methods to help ex-couples resolve their family law issues. These include mediation, arbitration, and negotiation.


                                        </div>
                                    </div>
                                    <h3>Mediation</h3>
                                    <div class="my-texttt">
                                        <div class="text">Mediation (also known as conciliation) is a process where disputing parties work out issues that require the assistance of a professional mediator.
                                        This allows spouses and lawyers to present their cases in a neutral and noncomplicated environment. As matters are being negotiated,
                                        mediators can meet with disputants either together or separately.
                                            <br>
                                          The mediator's role can only be described as facilitative. They cannot influence or make decisions, and they can only 
                                          guide and direct the disputants in reaching an agreement. Each party signs a legally binding document at the end of the process if they have settled.
                                            <br>
                                          

                                        </div>
                                    </div>
                                    <h3>Arbitration.</h3>
                                    <div class="my-texttt">
                                        <div class="text">
                                         An arbitrator is someone you and your ex-partner hire to resolve your disagreements. The arbitrator is a third party who helps 
                                         you resolve your dispute. The arbitrator can't grant a divorce or
                                         annulment. But, they can determine decision-making authority and parenting time (previously 
                                         known as custody and accessibility) and how to divide the property. Arbitrators will only be able to rule
                                         on the issues you request, and the arbitrator can only use Canadian and Ontario family law.
                                            <br>
                                          Talk to a lawyer about your rights under Canadian legislation if you don't know. You can't walk away after arbitration begins. Acceptance of the arbitrator's decision is required. Arbitration 
                                          is expensive, and a lawyer should be involved.
                                          You might have to pay the arbitrator. Even if you don't bring a lawyer to the hearing, you must prove that your attorney gave you legal advice before arbitrating.
                                          <br>
                                          Remember that arbitration is not the same thing as mediation. Mediation is a process that allows you to make your own decisions. You have the right to terminate the talks at any moment or reject the suggestions
                                          of the mediator or your former partner. Arbitration gives you no choice, and you have to accept the arbitrator's decision as long as it follows the law.
                                        </div>
                                    </div>

                                    <h3>Negotiation</h3>
                                    <div class="my-texttt">
                                        <div class="text">Negotiations involve ex-spouses and their respective attorneys working together to solve problems. Negotiation can take many forms, including telephone conversations,
                                        email, and face-to-face meetings. Family lawyers assist their clients in making decisions about divorce, and they then relay the
                                        client's wishes and feelings to the opposing parties. While it is unnecessary for disputants that lawyers be retained in this divorce process, it can be prudent to safeguard your interests.


                                        </div>

                                    </div>
                                    <br>
                                    <h3>Collaborative Family Laws</h3>
                                    <div class="my-texttt">
                                        <div class="text">
                                          Collaborative family legal is similar to negotiation when resolving conflicts. However, each party must have its lawyer to represent its interests.
                                          Conflicts can be settled by ex-spouses working together with their lawyers.
                                          
                                            
                                            <br>
                                            This process is open to all. For collaboration to work, however, both sides must commit to resolving differences and coming to an agreement.

                                        </div>
                                    </div>
                                    <br>
                                    <h3>Litigation</h3>
                                    <div class="my-texttt">
                                        <div class="text">The most common dispute resolution medium is probably litigation. Many people have either seen the cases in the media or had direct experience with them. 
                                        The process of suing someone for causing harm to their reputation is called litigation. Family lawyers represent their clients in court when they seek resolution to conflicts.
                                        <br>
                                        Arbitration and litigation have many similarities. A judge or jury listens to evidence from both sides and renders a ruling after the case.
                                        But, litigation is more adversarial, and it is subject to the strict laws and rules of the court. All parties must respect the court's decision.
                                        <br>
                                        Litigation is more expensive and time-consuming than other forms. It can also be emotionally difficult.
                                        </div>
                                        
                                    </div>
                                    <br>
                                 


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