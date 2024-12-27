<?php include 'partials/header.php'; ?>

<style>
    .sidebar-page-container {
        position: relative;
        padding: 10px 0px 10px !important;
    }

    ul,
    li {
        /*list-style: disc !important;*/
        padding: 0px;
        margin: 0px;
    }

    .news-block-three .inner-box .lower-content h3 {
        position: relative;
        line-height: 1.4em;
        font-weight: 700;
        margin-top: 15px;
        margin-bottom: 12px;
        color: black;
        font-size: 19px;
    }

    .content-page {
        display: none;
    }

    .content-page.active {
        display: block;
    }

    .pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        /* Center items horizontally */
        gap: 8px;
        /* Space between items */
    }

    .pagination a {
        text-decoration: none;
        color: #555;
        font-weight: bold;
        font-size: 16px;
        padding: 10px 18px;
        border-radius: 50%;
        transition: background-color 0.3s, color 0.3s;
        cursor: pointer;
        display: inline-flex;
        border: 0px solid #dee2e6 !important;
        justify-content: center;
        align-items: center;
        /* min-width: 36px; */
        /* height: 36px; */
    }

    .pagination a.active {
        background-color: #1d70b7;
        color: white;
    }

    .pagination a:hover {
        background-color: #e0e0e0;
    }

    .pagination a.arrow {
        font-size: 18px;
        color: #1d70b7;
        border: none;
        background: none;
    }

    .pagination a.arrow:hover {
        color: #0d5294;
    }

    .hidden {
        display: none;
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
        <section class="page-title" style="background-image:url(../assets/images/blogs/blogs.png )">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left">
                        <h1>Blog</h1>
                        <div class="text"></div>
                    </div>
                    <div class="pull-right">
                        <ul class="page-breadcrumb">
                            <li><a href="./"></a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <div class="grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <ul class="page-breadcrumb">
                                <li><a href="../">home /</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 ptb-50">
                    <p class="text-center blog-posts">RECENT BLOG POSTS</p>
                </div>
            </div>
        </div>

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div id="contentPage1" class="content-page">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side-->
                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img
                                                src="../assets/images/blogs/Two-Parents-Fighting-Over-Chil.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> June 27, 2024</li>
                                        </ul>
                                        <h3>

                                            Parental Guide Before Hiring a Child Custody Attorney in Houston </h3>





                                        <div class="my-texttt">
                                            <div class="text">Navigating the complexities of infant custody may be
                                                daunting
                                                for any determination. Hiring a Child Custody Attorney in Houston is a
                                                crucial step in ensuring the satisfactory interests of your toddler are
                                                protected.
                                            </div>

                                            <a class="read-more" href="child-custody-attorney">Read
                                                More</a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog2.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> June 27, 2024</li>
                                        </ul>
                                        <h3>

                                            The Impact of Divorce Litigation on Your Emotional Well-being </h3>

                                        <h3> </h3>

                                        <div class="my-texttt">
                                            <div class="text">Divorce is a life-altering event that can have profound
                                                effects on your emotional well-being. The dissolution of a marriage
                                                often
                                                brings with it a whirlwind of emotions, from sadness and anger to relief
                                                and
                                                fear..
                                            </div>

                                            <a class="read-more" href="best-litigated-divorce-attorney-in-texas">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog3.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> August 29, 2022</li>
                                        </ul>
                                        <h3>

                                            Bo Nichols named in the 2023 Best Lawyers Awards </h3>

                                        <h3> </h3>

                                        <div class="my-texttt">
                                            <div class="text">After his impressive feats of being recognized as the best
                                                Lawyer in America from 2009 along with the title of Texas Super Lawyer
                                                since
                                                2005.
                                            </div>

                                            <a class="read-more" href="best-lawyer-in-houston">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row clearfix">

                        <!--Content Side-->

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog4.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> June 22, 2022</li>
                                        </ul>
                                        <h3>

                                            International Be Kind to Lawyers Day </h3>

                                        <h3> </h3>

                                        <div class="my-texttt">
                                            <div class="text">International Be Kind to Lawyers Day takes place on the
                                                2nd
                                                Tuesday of April. Although lawyers have a bad reputation among the
                                                general
                                                public.
                                            </div>

                                            <a class="read-more" href="lawyers-day-in-houston">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog5.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> June 07, 2022</li>
                                        </ul>
                                        <h3>

                                            What Are the Rights of Parents for Child Custody </h3>





                                        <div class="my-texttt">
                                            <div class="text">Parents who are divorced or have kids younger than 18
                                                years
                                                old may find it difficult to raise their kids in single-parent
                                                households.
                                            </div>

                                            <a class="read-more" href="rights-of-parents-for-child-custody">Read
                                                More</a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog6.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> April 21, 2022</li>
                                        </ul>
                                        <h3>

                                            International Child Custody Law </h3>



                                        <div class="my-texttt">
                                            <div class="text">When a child custody case occurs in an international
                                                arena, it
                                                can be more heated and emotional.
                                            </div>

                                            <a class="read-more" href="international-childs-custody-law">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="row clearfix">

                        <!--Content Side-->

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog7.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> April 15, 2022</li>
                                        </ul>
                                        <h3>

                                            How Divorce Affect the Mental Health of Children? </h3>

                                        <h3> </h3>

                                        <div class="my-texttt">
                                            <div class="text">Custody battles can be a very stressful time for both
                                                parents
                                                and children. Some wonder if they should stay together.
                                            </div>

                                            <a class="read-more"
                                                href="divorce-affect-the-mental-health-of-children">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog8.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> June 07, 2022</li>
                                        </ul>
                                        <h3>

                                            How to Apply for Your Child's Custody Legally? </h3>

                                        <div class="my-texttt">
                                            <div class="text">The District Court has jurisdiction to entertain
                                                applications
                                                for appointing guardians. If a person is appointed according to these
                                                proceedings.
                                            </div>

                                            <a class="read-more" href="childs-custody-legally-in-houston">Read
                                                More</a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog9.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> April 21, 2022</li>
                                        </ul>
                                        <h3>

                                            9 Legal Facts About Divorce You Should Know </h3>



                                        <div class="my-texttt">
                                            <div class="text">When a marriage ends, many changes often happen to spouses
                                                and
                                                their children. These can cause increased stress levels in both parties.
                                            </div>

                                            <a class="read-more" href="legal-Facts-about-divorce">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
            <div id="contentPage2" class="content-page">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side-->
                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img
                                                src="../assets/images/blogs/Two-Parents-Fighting-Over-Chil.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> June 27, 2024</li>
                                        </ul>
                                        <h3>

                                            Parental Guide Before Hiring a Child Custody Attorney in Houston </h3>





                                        <div class="my-texttt">
                                            <div class="text">Navigating the complexities of infant custody may be
                                                daunting
                                                for any determination. Hiring a Child Custody Attorney in Houston is a
                                                crucial step in ensuring the satisfactory interests of your toddler are
                                                protected.
                                            </div>

                                            <a class="read-more" href="child-custody-attorney">Read
                                                More</a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog2.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> June 27, 2024</li>
                                        </ul>
                                        <h3>

                                            The Impact of Divorce Litigation on Your Emotional Well-being </h3>

                                        <h3> </h3>

                                        <div class="my-texttt">
                                            <div class="text">Divorce is a life-altering event that can have profound
                                                effects on your emotional well-being. The dissolution of a marriage
                                                often
                                                brings with it a whirlwind of emotions, from sadness and anger to relief
                                                and
                                                fear..
                                            </div>

                                            <a class="read-more" href="best-litigated-divorce-attorney-in-texas">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="content-side col-md-4 ">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="child-custody-attorney.php"><img src="../assets/images/blogs/blog3.png"
                                                alt=""></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon flaticon-user-1"></span> By <span
                                                    class="theme-color">Bo
                                                    Nichols</span></li>
                                            <li><span class="icon flaticon-calendar-1"></span> August 29, 2022</li>
                                        </ul>
                                        <h3>

                                            Bo Nichols named in the 2023 Best Lawyers Awards </h3>

                                        <h3> </h3>

                                        <div class="my-texttt">
                                            <div class="text">After his impressive feats of being recognized as the best
                                                Lawyer in America from 2009 along with the title of Texas Super Lawyer
                                                since
                                                2005.
                                            </div>

                                            <a class="read-more" href="best-lawyer-in-houston">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                   
                </div>
            </div>

        </div>

        <div class="ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination">
                            <!-- Left Arrow -->
                            <a class="arrow" id="prevPage">&#x276E;</a>
                            <!-- Page Numbers -->
                            <div id="pageNumbers"></div>
                            <!-- Right Arrow -->
                            <a class="arrow" id="nextPage">&#x276F;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script>
            // Total pages
            const totalPages = 2;
            let currentPage = 1;

            // DOM Elements
            const pageNumbersContainer = document.getElementById('pageNumbers');
            const prevPageButton = document.getElementById('prevPage');
            const nextPageButton = document.getElementById('nextPage');
            const contentPage1 = document.getElementById('contentPage1');
            const contentPage2 = document.getElementById('contentPage2');

            // Function to render page numbers
            function renderPagination() {
                pageNumbersContainer.innerHTML = ''; // Clear existing numbers

                for (let i = 1; i <= totalPages; i++) {
                    const pageLink = document.createElement('a');
                    pageLink.textContent = i;
                    pageLink.classList.add('page-link');
                    if (i === currentPage) {
                        pageLink.classList.add('active');
                    }

                    pageLink.addEventListener('click', () => {
                        currentPage = i;
                        updatePagination();
                    });

                    pageNumbersContainer.appendChild(pageLink);
                }
            }

            // Function to update pagination state
            function updatePagination() {
                renderPagination();

                // Disable/Enable Prev and Next buttons
                prevPageButton.classList.toggle('hidden', currentPage === 1);
                nextPageButton.classList.toggle('hidden', currentPage === totalPages);

                // Show content for the current page
                if (currentPage === 1) {
                    contentPage1.classList.add('active');
                    contentPage2.classList.remove('active');
                } else if (currentPage === 2) {
                    contentPage1.classList.remove('active');
                    contentPage2.classList.add('active');
                }
            }

            // Event Listeners for Arrows
            prevPageButton.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    updatePagination();
                }
            });

            nextPageButton.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    updatePagination();
                }
            });

            // Initial Render
            updatePagination();

        </script>


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

<div class="container">

    <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">

        </div>

        <div class="col-md-4">

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">

        </div>

        <div class="col-md-4">

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">

        </div>

        <div class="col-md-4">

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">
         <h1>test</h1>
        </div>

        <div class="col-md-4">
        <h2>eese</h2>
        </div>

        <div class="col-md-4">
         <h3>qwerty</h3>
        </div>

        <div class="col-md-4">
            <h3>qwerty</h3>
           </div>

    </div>

</div>