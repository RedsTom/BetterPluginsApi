<?php

    $page = $_GET['active'];

?>
<head>
    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta name="description" content="Official website of BetterPluginsApi"/>
    <meta property="org:image" content="assets/img/logo/logo.png">
</head>

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="../assets/img/logo/loading_logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<?php $_GET['prver'] = 'b0.1.1'?>
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html"><img src="../assets/img/logo/logo.png" width="287" height="64" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li <? if($page == "index") echo "class='active'"?>><a href="../index.php"> Home</a></li>
                                    <li <? if($page == "dl") echo "class='active'"?>><a href="../download.php">Download</a></li>
                                    <li <? if($page == "qs") echo "class='active'"?>><a href="../quick_start.php">Quick Start</a>
                                        <ul class="submenu">
                                            <li><a href="../doc/get_started.php">Getting Started</a></li>
                                            <li><a href="../doc/commands.php">Commands</a></li>
                                            <!--<li><a href="../doc/events.php">Events</a></li>-->
                                        </ul>
                                    </li><!--
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li>-->
                                    <li <? if($page == "jd") echo "class='active'"?>><a href="../javadoc/index.html">Javadocs</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>