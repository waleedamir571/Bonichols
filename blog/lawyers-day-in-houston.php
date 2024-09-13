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

    /*ul, li {*/
    /*    list-style: disc;*/
    /*    padding: 0px;*/
    /*    margin: 0px;*/
    /*}*/
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
                        <div class="text"> International Be Kind to Lawyers Day – 11 April 2023</div>
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
                                    <a href="#"><img src="../assets/images/blogs/be-kind-to-lawyers-day-fun.jpg"
                                            alt=""></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-user-1"></span> By <span class="theme-color">Bo
                                                Nichols</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span> June 07, 2022</li>
                                    </ul>
                                    <h3>

                                        International Be Kind to Lawyers Day – 11 April 2023</h3>
                                    <h3>

                                        Overview</h3>



                                    <div class="my-texttt">
                                        <div class="text">International Be Kind to Lawyers Day takes place on the 2nd
                                            Tuesday of April. Although
                                            lawyers have a bad reputation among the general public, it is an important
                                            profession for society as well as the justice system.
                                            The general public has mocked and seen it as an evil occupation. This
                                            profession is based on the idea that the public is being exploited by
                                            lawyers who charge huge fees and have the goal of winning the case. However,
                                            this day is about spreading the awareness that many of these myths exist and
                                            that not all lawyers practice law with ethics.




                                        </div>
                                        <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                    </div>


                                    <h3>History For International Be Kind To Lawyers Day</h3>
                                    <div class="my-texttt">
                                        <div class="text">Steve Hughes, a public-speaking coach, established
                                            International Be Kind to Lawyers Day (28 September 2008). Hughes
                                            collaborated with many lawyers in order to improve their public speaking
                                            skills. He discovered that people often have negative views of the legal
                                            profession after Hughes explained how he had worked with so many.
                                            Hughes believed lawyers should be treated with respect, admiration, and love
                                            at least once a day. The second Tuesday in April was chosen by Hughes
                                            because it fell between two other holidays that had negative connotations:
                                            April Fool's Day, 1 April, and U.S. Tax Day, 15 April. He may have been
                                            trying to make lawyers look more attractive.
                                            This holiday is international, so everyone has agreed to set aside one day
                                            each year where we will not make lawyer jokes or attempt any other niceties.
                                            Many of us have family members or friends who are lawyers. If you don't have
                                            a lawyer, you may be among the people who have been represented. They have
                                            certainly represented you well, we are certain. Lawyers have always stood by
                                            us and tried to help us get out of trouble. So it's not difficult to support
                                            the idea of them being celebrated today.
                                        </div>
                                    </div>
                                    <br>

                                    <h3>How To Celebrate The Day</h3>
                                    <div class="my-texttt">
                                        <div class="text">International Be Kind To Lawyers Day aims to show gratitude
                                            for our lawyers. Send flowers and cards to any lawyer who has helped you in
                                            difficult times. Please spend some time with them to learn about their
                                            struggles and stress. You can raise awareness about their important role in
                                            maintaining society's smooth functioning. You can share your thoughts and
                                            photos on social media using the hashtag #BeKindToLawyersDay
                                        </div>
                                    </div>
                                    <h3> Watch A Movie About Lawyers</h3>
                                    <div class="my-texttt">
                                        <div class="text">Check out your favorite film featuring a lawyer in the lead
                                            role. There are plenty of options! The most popular lawyer movie is "To Kill
                                            a Mockingbird." But there are many other options, including "The Firm," "A
                                            Few Good Men," or "Legally Blonde."
                                        </div>
                                    </div>
                                    <h3>Show the Love.</h3>
                                    <div class="my-texttt">
                                        <div class="text">
                                            Don't forget "Thank you" for any past assistance from lawyers. You can show
                                            your appreciation to them today, regardless of whether they represented or
                                            assisted you in a legal matter
                                        </div>
                                    </div>

                                    <h3>Get in touch</h3>
                                    <div class="my-texttt">
                                        <div class="text">You can still get the contact information of an attorney who
                                            has assisted you in the future by giving them a call. Show your
                                            appreciation. It's a great way to show your gratitude for your help from a
                                            lawyer. You may make someone's day just by being kind to them, and lawyers
                                            don't often get much appreciation.
                                        </div>

                                    </div>
                                    <br>
                                    <h3>Referrals to</h3>
                                    <div class="my-texttt">
                                        <div class="text">
                                            Depending on which type of law they practice, you can refer your friends to
                                            lawyers. You can also help their business by writing a glowing reviews via
                                            their social networks.

                                        </div>
                                    </div>
                                    <br>
                                    <h3>Why We Love Being Kind to Lawyers Day</h3>
                                    <ul> <li><h3>They Do a Pro Bono Job</h3></li>  </ul>
                                 
                                    <div class="my-texttt">
                                        <div class="text">Lawyers spend thousands of hours every year on pro bono work.
                                            Pro bono can be defined as work done without payment -- it's free!
                                        </div>
                                    </div>
                                    <br>
                                    <h3>It is a good idea for a friend to have a lawyer</h3>
                                    <div class="my-texttt">
                                        <div class="text">The good thing is to have a lawyer at your side before going
                                            to court. Knowing and trusting a lawyer can make legal situations less
                                            stressful. Show your appreciation to your friend today and continue building
                                            that relationship.
                                        </div>
                                    </div>
                                    <BR>
                                    <h3>They Help Society</h3>
                                    <div class="my-texttt">
                                        <div class="text">Most people want to practice law to help others. They are
                                            motivated by justice and are able to solve complex problems and communicate
                                            effectively to get it done.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>How Difficult Is A Job As A Lawyer?</h3>
                                    <div class="my-texttt">
                                        <div class="text">Lawyering is a highly sought-after career, and you can reap
                                            many benefits if your goal is to become one. However, there are some
                                            disadvantages to working as an attorney. You don't have to be a courtroom
                                            drama queen or a news conference host, but you can still make a difference
                                            and help clients.
                                            Before you begin the long journey toward becoming a lawyer, you should ask
                                            yourself whether you can tolerate these limitations and how well your
                                            ability to deal with them.
                                            While there are many advantages to practicing law, you will also find more
                                            satisfaction than you did a decade ago. You should take the time to evaluate
                                            all aspects of law school so that you can decide if you are right for the
                                            job.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>All Your Clients</h3>
                                    <div class="my-texttt">
                                        <div class="text">It won't be possible to choose the clients you work with, at
                                            least not if that is how you earn your living. The people who require
                                            lawyers aren't limited to one demographic. They may be wealthy,
                                            sophisticated, and demanding, and they might be homeless or accused of a
                                            criminal offense they did not commit.
                                            Although you might not like all of them, you must give your best to each
                                            one. What tolerance do you have for people you don't agree with? Do you have
                                            the ability to let go of your personal feelings to accomplish the task?
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Legal Process Outsourcing</h3>
                                    <div class="my-texttt">

                                        <div class="text">It isn't a trend, but the outsourcing law work to foreign
                                            countries has become an economic reality. Many traditional lawyer jobs are
                                            being eliminated or replaced by those who outsource legal work to low-wage
                                            offshore workers or regional delivery centers.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>The Stress</h3>
                                    <div class="my-texttt">

                                        <div class="text">Law practice is one of the most stressful jobs. It has its
                                            pressures: deadlines, billing pressures, client demands, and long hours. Add
                                            to that rising business pressures, evolving legal technologies, and a
                                            growing law school debt, and it's easy for lawyers to feel stressed.
                                            <br>
                                            Members of the bar are often unhappy with their careers due to the demands
                                            and stress of practicing law. Counselors often experience depression and
                                            suicide, and 44% of those surveyed by the American Bar Association recently
                                            said they wouldn't recommend this profession to teenagers.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Long Hours</h3>
                                    <div class="my-texttt">
                                        <div class="text">Law firms are working longer hours due to shrinking staff and
                                            increasing workloads. Due to the demands of global law practice, some
                                            lawyers need to be available for clients 24 hours a day.
                                            Lawyers work longer hours and are often required to work for 50+ hours a
                                            week. Due to competition, lawyers have to spend more time with clients and
                                            business management activities than they do billing. Many lawyers feel that
                                            they don't have enough time for their families.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Debt at Soaring Law School</h3>
                                    <div class="my-texttt">
                                        <div class="text">Recent years have seen inflation outpace the cost of law
                                            education. Even the best law schools can charge well over $40,000 annually
                                            for tuition, and a six-figure law school debt can make it difficult to get
                                            into practice.
                                            In today's tough job market, many new grads can't afford to repay their law
                                            school debt. A law degree does not guarantee financial security.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Technology</h3>
                                    <div class="my-texttt">
                                        <div class="text">Technology has revolutionized the law practice, and lawyers
                                            must be proficient in various technology platforms. These include document
                                            review and management tools, spreadsheets, presentations, and billing
                                            software.
                                            Even as lawyers become more tech-savvy, the market trend toward
                                            commoditization threatens jobs, as technology replaces lawyers to deliver
                                            legal services more cheaply.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Changing the Legal Paradigms</h3>
                                    <div class="my-texttt">
                                        <div class="text">Law is changing rapidly, and lawyers don't have a monopoly.
                                            Lawyers today face competition from many non-lawyer sources.
                                            However, this doesn't mean that these sources are reliable or can provide
                                            the same results as an attorney. These sources are available and may divert
                                            clients from "real" attorneys.
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Conclusion</h3>
                                    <div class="my-texttt">
                                        <div class="text">Lawyers are often given a bad reputation, but they are crucial
                                            to the functioning of society and the justice systems.
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