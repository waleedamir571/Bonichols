<?php include 'partials/header.php'; ?>

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
                            <?php echo $name ?>
                        </div>
                    </div>
                    <div class="pull-right">
                        <ul class="page-breadcrumb">
                            <li><a href="../">home</a></li>
                            <li><a href="./">blogs</a></li>
                            <li>
                                <?php echo $name; ?>
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
                                    <a href=""><img src="../assets/images/blogs/cs.jpg" alt=""></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-user-1"></span> By <span class="theme-color">Bo
                                                Nichols</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span> January 26, 2022</li>
                                    </ul>
                                    <h3>

                                        Child Support Arrears – What If Non-Custodial Parents Do Not Pay Child Support?
                                    </h3>


                                    <div class="my-texttt">
                                        <div class="text">Child support intends to level the share of responsibilities
                                            between you and your co-parent so that each parent shares the financial
                                            burdens of the child’s upbringing.

                                            <br>
                                            An arrear is a legal or financial term that is used to describe the state of
                                            being late in the fulfillment of duty or debts; for instance, it is commonly
                                            used in the context of child support.
                                            <br><br>



                                        </div>
                                        <!--<a class="read-more" href="major-new-child.php">Read More</a>-->
                                    </div>

                                    <!--<a class="read-more" href="major-new-child.php">Read More</a>-->

                                    <h3>What Does Child Support Arrears Mean? </h3>
                                    <div class="my-texttt">
                                        <div class="text">Child support refers to the periodic payment that the
                                            co-parent has to pay after the termination of marriage or divorce.
                                            The court judge orders non-custodial parents to pay a certain amount in
                                            order to fulfill the child's needs, including food, clothing, education,
                                            shelter, health, and medical care.
                                            <br><br>
                                            When there is a joint custody case, the child has two custodial parents and
                                            no non-custodial parent. In this case, the custodial parent who earns higher
                                            income is obliged to pay the other custodial parent with less income.
                                            <br><br>
                                            The judge decides the child support amount by calculating a certain
                                            percentage of net income. It depends on the circumstances of the parent,
                                            number of children, joint custody, or split custody.

                                            <br><br>
                                            In some cases, child support is paid directly by the non-custodial parent to
                                            the custodial parent, while in other cases, the co-parent pays the amount to
                                            the state. Paying child maintenance
                                            or child support as per the order is the legal responsibility of the parent,
                                            and they may face the consequences if they do not pay the amount.
                                            <br><br>
                                            Child support arrears mean that the non-custodial parent lags in paying the
                                            full amount or does not
                                            pay for child support. There may be some valid reasons for not paying the
                                            amount, including lack of finances, job insecurity, or conflict with another
                                            parent.
                                            <br><br>
                                            There are 2 main types of child support arrears:


                                        </div>
                                    </div>
                                    <h3>Assigned Arrears</h3>
                                    <div class="my-texttt">
                                        <div class="text">In assigned arrears, the custodial parent is on government
                                            assistance, and the state will compensate for the unpaid payments. That
                                            means the custodial parent gets the financial aid from the state in the
                                            absence of child support
                                            and must pay back when debts are received from the non-custodial parent.
                                            Also, in this case, the non-custodial parent can pay child support to the
                                            state rather than to the co-parent.

                                        </div>
                                    </div>
                                    <h3>Unassigned Arrears</h3>
                                    <div class="my-texttt">
                                        <div class="text">If the custodial parent is not on government assistance, the
                                            non-custodial parent has to pay child support directly
                                            to the custodial parent. If the payment is missed, it will add on together –
                                            known as back child support until the non-custodial parent starts paying
                                            child support.
                                            <br><br>
                                            As per the Texas Family Code (157.261), the state allows interest to be
                                            charged at a rate of 6% per year from the date of a missed payment.
                                        </div>
                                    </div>
                                    <h3>What If The Non-Custodial Parent Is In Child Support Arrears?</h3>
                                    <div class="my-texttt">
                                        <div class="text">If your ex-spouse fails to pay child support, you are
                                            permitted to get back child support. If you both have good terms, the best
                                            advice is to discuss the matter and find out
                                            the reasons for not paying child support. No matter it is hard for you to
                                            speak with your co-parent, it is a good idea to communicate honestly about
                                            the problems you're facing.



                                            <br>
                                            If this is not the case, you can contact the Office of the Attorney General
                                            for enforcement.
                                            <br>

                                            If the non-custodial parent has good reasons for not paying the child
                                            support, they can speak to the custodial parent to work with them. Also, if
                                            the financial
                                            conditions are not good, they can petition the court to modify the court
                                            order, but this will only work if the non-custodial parent can prove that
                                            they cannot pay the amount.
                                            <br><br>
                                            Also, note that the misrepresentation of financial situation and not paying
                                            child support can have serious consequences, including:
                                            <br>
                                            <ul>
                                                <li style="list-style: disc !important;">The court may withhold your
                                                    wages.</li>
                                                <li style="list-style: disc !important;">Withhold or take a part of your
                                                    employment benefits.</li>
                                                <li style="list-style: disc !important;">Suspend your driving license.
                                                </li>
                                                <li style="list-style: disc !important;">May charge you with a violation
                                                    if you can pay but do not.</li>
                                                <li style="list-style: disc !important;">Take your refund on state
                                                    taxes.</li>
                                                <li style="list-style: disc !important;">Minimize the state benefits
                                                    that you are receiving. </li>
                                                <li style="list-style: disc !important;">The state can deny a new or
                                                    renewed passport. </li>
                                                <li style="list-style: disc !important;">They can file a lien on bank
                                                    accounts, properties, insurance, retirement plans, and awards if the
                                                    parent does not pay child support. </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <h3>Can Custodial Parent Forgive Child Support Arrears? </h3>
                                    <div class="my-texttt">
                                        <div class="text">The custodial parent can forgive child support payment and
                                            submit a waiver to the court that dismisses non-custodial parent back child
                                            support.
                                            However, it is uncommon and only happens if the parents reunite, or the
                                            custodial parent does not need money to support the child.



                                            <br>

                                            If the custodial parent does not forgive back child support, the debt
                                            remains, and the non-custodial parent has to pay back child support.
                                        </div>



                                    </div>

                                    <h3>Conclusion</h3>
                                    <div class="my-texttt">
                                        <div class="text">State law requires the non-custodial parent to pay child
                                            support even if they lives in another state. It is legally required to share
                                            a child's responsibilities between both parents
                                            and ensure that their needs are fulfilled. However, if the non-custodial
                                            parent does not finance child support, it is known as child support arrears.



                                            <br>

                                            If you're facing child support arrears, you are entitled to receive back
                                            child support. For this, you can contact the office of attorney general for
                                            enforcement or hire an attorney for legal advice. You may require a
                                            lawyer to help you file a petition related to child support. For more
                                            information regarding child support or legal advice from a lawyer, contact
                                            us, and we are here to help you!


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