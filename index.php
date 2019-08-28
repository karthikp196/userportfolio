<?php
    include('config.php');
?>



<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Aircv" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Metronic "Aircv" Frontend Freebie</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="owl.theme.default.css">

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">About</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Experience</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Work</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <?php
             $sql= "SELECT * FROM image_upload";
             $res = mysqli_query($conn,$sql);
             while($row=mysqli_fetch_assoc($res)){
               ?>
         

        <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="admin/<?php echo $row['img_dir'] ?>">
        <?php
             }
             ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <?php
                            $sql= "SELECT * FROM name";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <div class="promo-block-divider">
                            <h1 class="promo-block-title"><?php echo $row['firstname']; ?> <br/> <?php  echo $row['lastname']; ?></h1>
                            <p class="promo-block-text"> <?php  echo $row['position'];  ?> </p>
                        </div>

                        <?php
                        }
                        ?>

                        <?php
                            $sql= "SELECT * FROM social_links";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <ul class="list-inline">
                            <li><a href="<?php echo $row['facebook'] ?> " class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="<?php echo $row['twitter'] ?>" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="<?php echo $row['dribble'] ?>" class="social-icons"><i class="icon-social-dribbble"></i></a></li>
                            <li><a href="<?php echo $row['behance'] ?>" class="social-icons"><i class="icon-social-behance"></i></a></li>
                            <li><a href="<?php echo $row['linkdin'] ?>" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                        </ul>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <?php
                        $sql = "SELECT * FROM introsection";
                        $res = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0"><?php echo $row['intro']  ?></h2>
                            <p><?php  echo $row['introbelow']; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="margin-b-60">
                            <p><?php echo $row['details']; ?> </p>
                            
                        </div>

                        <?php
                            }
                        ?>

                        <!-- Progress Box -->
                        <?php
                            $sql="SELECT * FROM skilltable";
                            $res = mysqli_query($conn,$sql);

                            while($row=mysqli_fetch_assoc($res)) {
                        ?>
                        <div class="progress-box">
                            <h5><?php echo $row['skill']; ?> <span class="color-heading pull-right"><?php echo $row['skillvalue']?>%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $row['skillvalue'] ?>"></div>
                            </div>
                        </div>

                        <!-- End Progress Box -->

                        <?php
                            }
                        ?>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Experience -->
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Experience</h2>
                               
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row row-space-2 margin-b-4">
                                <?php
                                    $sql = "SELECT * FROM experience";
                                    $res=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($res)){
                                ?>
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-chemistry"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3><?php echo $row['title'] ?> </h3>
                                            <p class="margin-b-5"> <?php echo $row['alldetails'] ?> </p>
                                        </div>
                                        <a href="#" class="content-wrapper-link"></a>    
                                    </div>
                                </div>

                                <?php
                                    }
                                ?>
                             
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Experience -->

        <!-- Work -->
        <div id="work">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Works</h2>
                            <p>I build the real value.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1">
                        <!-- Masonry Grid -->
                        <div id="owl-demo" class="owl-carousel owl-theme work_crs">
                            <div class="item">
                                <div class="work_tab">
                                    <div class="wrk_tit">
                                        <p>
                                            My work1 / My first Company
                                        </p>
                                    </div>
                                    <div class="wrk_img">
                                        <img class="responsive" src="https://bloximages.newyork1.vip.townnews.com/gazette.com/content/tncms/assets/v3/editorial/4/30/43038dac-b2d8-11e8-a5f9-d3f2f75cc337/5b92d845579dd.image.jpg" alt="">
                                    </div>
                                    <div class="wrk_desc">
                                        <p>
                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                        </p>

                                        <a href="">Know More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="work_tab">
                                    <div class="wrk_tit">
                                        <p>
                                            My work2 / My first Company
                                        </p>
                                    </div>
                                    <div class="wrk_img">
                                        <img class="responsive" src="https://bloximages.newyork1.vip.townnews.com/gazette.com/content/tncms/assets/v3/editorial/4/30/43038dac-b2d8-11e8-a5f9-d3f2f75cc337/5b92d845579dd.image.jpg" alt="">
                                    </div>
                                    <div class="wrk_desc">
                                        <p>
                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                        </p>

                                        <a href="">Know More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="work_tab">
                                    <div class="wrk_tit">
                                        <p>
                                            My work3 / My first Company
                                        </p>
                                    </div>
                                    <div class="wrk_img">
                                        <img class="responsive" src="https://bloximages.newyork1.vip.townnews.com/gazette.com/content/tncms/assets/v3/editorial/4/30/43038dac-b2d8-11e8-a5f9-d3f2f75cc337/5b92d845579dd.image.jpg" alt="">
                                    </div>
                                    <div class="wrk_desc">
                                        <p>
                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                        </p>

                                        <a href="">Know More</a>
                                    </div>
                                </div>
                            </div>
      
      
      
                        </div>
                        <!-- End Masonry Grid -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Work -->
            
        <!-- Contact -->
        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row">
                    <?php
                     $sql = "SELECT * FROM contact_footer";
                     $res=mysqli_query($conn,$sql);
                     while($row=mysqli_fetch_assoc($res)){

                    ?>
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0"><?php echo $row['c_title'] ?> </h2>
                                <p><?php echo $row['c_hire'] ?></p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Location</h5>
                                    <a href="#"><?php echo $row['c_location'] ?></a>
                                </div>
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Phone</h5>
                                    <a href="#"><?php echo $row['c_phone'] ?></a>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Email</h5>
                                    <a href="mailto:<?php echo $row['c_email'] ?>"><?php echo $row['c_email'] ?></a>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Web</h5>
                                    <a href="#"><?php echo $row['c_web'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo-dark.png" alt="Aircv Logo">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/aircv/"></a> Copy right @2019 </p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/carouesl_item.js"> </script>

    </body>
    <!-- END BODY -->
</html>