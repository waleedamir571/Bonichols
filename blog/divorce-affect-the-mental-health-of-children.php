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

       

        <!-- Main Header-->
        <?php include('nav.php'); ?>
        <!-- End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(../assets/images/blogs/blog-single.jpg)">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="text">
                            How Much Does Divorce Affect the Mental Health of Children?
                        </div>
                    </div>
                    <div class="pull-right">
                        <ul class="page-breadcrumb">
                            <li><a href="../">home</a></li>
                            <li><a href="./">blogs</a></li>
                            <li>
                               
                            </li>
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
                                    <a href=""><img src="../assets/images/blogs/effectsofdivorce.png" alt=""></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-user-1"></span> By <span class="theme-color">Bo
                                                Nichols</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span> April 15, 2022</li>
                                    </ul>
                                    <h3>

                                        How Much Does Divorce Affect the Mental Health of Children?</h3>

                                    <h3>

                                        Overview</h3>



                                    <div class="my-texttt">
                                        <div class="text">Custody battles can be a very stressful time for both parents
                                            and children. Some wonder if
                                            they should stay together, while others know that the only way out is
                                            through divorce proceedings- though this doesn't mean it will always bring
                                            them relief or happiness!

                                            <br><br>
                                            Explain the psychological effects of divorce on children. Well, it depends.
                                            While most kids experience
                                            some level of stress after their parents' separation or dissolution, there's
                                            a whole
                                            range in how quickly they bounce back -- with some being able to pick
                                            themselves up quicker than others.
                                            <br><br>
                                            What can you do if your child seems more prone to feeling sad/depressed over
                                            time following an event such as parental breakup?




                                        </div>
                                        <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                    </div>

                                    <br>

                                    <h3>Why the First Year Is the Toughest</h3>
                                    <div class="my-texttt">
                                        <div class="text">What comes to mind when you think of the most difficult year
                                            or two in your life? For some people, it might be when they were going
                                            through a divorce and couldn't see how their
                                            family could survive. It's no wonder that kids experience distress;
                                            after all these major changes have taken place with one parent going ﻿to an
                                            apartment somewhere distant while another person watches over them at home
                                            by themselves - who would've thought?!
                                            <br><br>
                                            This is a difficult topic for any child, but it can be especially so in the
                                            case of divorce. Some kids seem to bounce back and grow used their new
                                            living arrangements
                                            while others never really go "back" normal after their parents' separation
                                            or dissolution; this
                                            small percentage may experience ongoing problems like depression due to
                                            being uprooted from one home environment into another without ever feeling
                                            settled down enough before moving again.


                                        </div>
                                    </div>
                                    <h3>Divorce-Related Stress</h3>
                                    <div class="my-texttt">
                                        <div class="text">When a marriage ends in divorce, it's not always the case that
                                            contact with one parent immediately reduces or ceases in many cases where
                                            there has been decreased communication between parents and children
                                            post-divorce period, which can lead to feelings of distance from them
                                            because they no longer have daily interaction, researchers who experimented
                                            on families following parental separation.
                                            <br><br>
                                            The remaining stressors of parental separation make divorce more difficult
                                            for children. These include changing schools, moving into a new home, and
                                            living with a single parent who feels concerned!




                                        </div>
                                    </div>
                                    <h3>Risks Families Face</h3>
                                    <div class="my-texttt">
                                        <div class="text">Almost half of all new marriages in America were between
                                            couples who had been married before! This is not
                                            surprising considering how common it has become for people to get hitched
                                            again after washing out their old spouses (or getting them out) with divorce
                                            proceedings.
                                            <br>
                                            The addition of a step-parent and possibly several siblings can be another
                                            big adjustment for children. And often both parents remarry,
                                            which means more changes to their lives--and this all happens before they
                                            even get into school!<br>






                                        </div>
                                    </div>
                                    <h3>Mental Health Problems</h3>
                                    <div class="my-texttt">
                                        <div class="text">Children of divorced parents face an increased risk for
                                            psychological problems, regardless of their age or culture. This can be due
                                            to the trauma associated with
                                            parental separation, which takes place at such a tender time in one's life -
                                            before they become
                                            responsible individuals who must make decisions about how much involvement
                                            is enough concern for themselves rather than relying on others all day long
                                            like a parent(s) would do best.



                                        </div>
                                    </div>

                                    <h3>Behavior Problems </h3>
                                    <div class="my-texttt">
                                        <div class="text">There is a higher risk of externalizing problems, such as to
                                            conduct disorders and delinquency in children from divorced families.
                                            Additionally,
                                            they may experience more conflict with peers after a divorce due to feeling
                                            rejected by those around them who refuse or are unable/unwilling to
                                            participate in family life anymore.
                                            <br><br>


                                        </div>



                                    </div>

                                    <h3>Poor Academic Performance </h3>
                                    <div class="my-texttt">
                                        <div class="text">When children from divorce tend not to do as well in school,
                                            it can be because their situation is unexpected. However, suppose the split
                                            happens on an ongoing basis or was foreseeable by either parent. There may
                                            not be any adverse effect on kids' grades since they already know what life
                                            will look like after divorce!
                                            <br><br>

                                        </div>



                                    </div>
                                    <h3>Risk-Taking Behaviors</h3>
                                    <div class="my-texttt">
                                        <div class="text">It is not uncommon for parents to separate or divorce when
                                            their child is just 5 years old in our society. This study shows
                                            that these youngsters were at higher risk of becoming sexually active before
                                            reaching 16 years old 9﻿ The consequences can be devastating;
                                            there has also been an association between separation from dad and having
                                            more partners during adolescence.

                                            <br><br>
                                            There's no secret recipe for steering clear from complicated relationships
                                            or handling everything perfectly; however,
                                            there are some simple steps you can take now before things get too
                                            difficult, which will help reduce any emotional damage done by recent
                                            events.



                                        </div>



                                    </div>
                                    <h3>Co-Parent Peacefully </h3>
                                    <div class="my-texttt">
                                        <div class="text">When parents are constantly fighting, it can affect their
                                            children. When the couple has an intense conflict where they scream and
                                            threaten one another,
                                            this will most likely lead to behavior problems for kids later on down the
                                            road because these types of hostility aren't healthy or safe in any
                                            situation where people should be working together respectfully.



                                        </div>



                                    </div>
                                    <h3>Avoid Putting Kids in the Middle</h3>
                                    <div class="my-texttt">
                                        <div class="text">When kids find themselves caught in the middle, they are more
                                            likely to experience depression and anxiety.
                                            Asking a child which parent they like best or giving them messages for other
                                            parents isn't appropriate because it can confuse what is going on with their
                                            own life!



                                        </div>



                                    </div>
                                    <h3>Maintain Healthy Relationships</h3>
                                    <div class="my-texttt">
                                        <div class="text">The ability of children to adjust post-divorce is often a
                                            result of how they were raised during the time that their parents had
                                            together. This starts with strong communication
                                            and love from both parties. There be no negative impact on kids' emotional
                                            health or educational performance following an ugly break-up situation like
                                            divorce can sometimes bring about!



                                        </div>



                                    </div>
                                    <h3>Use Consistent Discipline</h3>
                                    <div class="my-texttt">
                                        <div class="text">When parents are no longer together, it can be hard for the
                                            children to know what rules apply. This is especially true if one parent had
                                            a strict nature and imposed their will
                                            on every aspect of life while maintaining discipline in an effortful manner
                                            that may have been opposed by other family members or friends who feel they
                                            should share some responsibility.



                                        </div>



                                    </div>
                                    <h3>Monitor Adolescents Closely</h3>
                                    <div class="my-texttt">
                                        <div class="text">There is much evidence that adolescents will be less likely to
                                            have behavior problems following a divorce when parents pay close attention
                                            to what teens
                                            are doing and who they spend their time with. This means there's also an
                                            increased chance of not using substances or having fewer academic
                                            difficulties post-divorce!



                                        </div>



                                    </div>
                                    <h3>Empower Your Children</h3>
                                    <div class="my-texttt">
                                        <div class="text">There is no shame in feeling like a victim when going through
                                            tough times. Your emotions can empower you, or they may hold onto them as
                                            well and make things worse for themselves down the road with increased risk
                                            of
                                            mental health problems such as anxiety disorder, etcetera., but don't let
                                            fear rule over what could potentially turn out beautifully if we work hard
                                            enough at understanding ourselves better along this journey.



                                        </div>



                                    </div>
                                    <h3>When to Seek Help for Your Child</h3>
                                    <div class="my-texttt">
                                        <div class="text">When children live in homes where there is a lot of fighting
                                            and negativity, they can be at risk for developing mental health issues even
                                            if both parents want to stay together just because the kids deserve it more
                                            than anyone else should consider alternative options like joint custody
                                            or an open relationship with no strings attached, so each parent has some
                                            space from one another while maintaining contact as much based on their
                                            preference rather than being forced into anything against your will.


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