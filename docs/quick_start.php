<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BetterPluginsApi - Quick Start</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>

    <?php $_GET['active'] = "qs";
    include "includes/topInclude.php";?>

    <main>

        <!-- Services Area Start -->
        <section class="service-area services-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center">
                            <h2>Quick Start with<br>BetterPluginsApi</h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="fas fa-terminal" style="
                                        background-image: -moz-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -webkit-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -ms-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                    "></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="doc/commands.php">Commands</a></h4>
                                <p>Create your first command with the <i>BetterExecutor</i> or <i>BetterCooldownExecutor</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <span class="fas fa-bolt" style="
                                        background-image: -moz-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -webkit-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -ms-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                    "></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="doc/get_started.php">Getting Started</a></h4>
                                <p>Start developing your first plugin with <b>BetterPluginsAPI</b><br/><br/></p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="fas fa-users" style="
                                        background-image: -moz-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -webkit-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -ms-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                    "></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="doc/events.php">Events</a></h4>
                                <p>Create your first events with <i>BetterEventExecutor</i><br/><br/></p>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!--<div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Easily Manage</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <span class="fas fa-flag" style="
                                        background-image: -moz-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -webkit-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                        background-image: -ms-linear-gradient( 90deg, rgb(0, 202, 233) 0%, rgb(0, 101, 248) 100%);
                                    "></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="doc/translations.php">Translations</a></h4>
                                <p>Learn to create translations with BetterPluginsApi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Quick Messaging</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>

                    <!-- End of the cards -->
                </div>-->
            </div>
        </section>
        <!-- Services Area End -->
     
    </main>
   <?include "includes/bottomInclude.php";?>
        
    </body>
</html>