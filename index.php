<?php
$data = json_decode(file_get_contents("data.json"));
$dataArray = json_decode(file_get_contents("data.json"), TRUE);
$NumberOfPost = count($dataArray['PostValue']) - 1;
//Get Author Data
$AuthorFB = $data -> Author -> Facebook;
$AuthorIG = $data -> Author -> Instagram;
$AuthorTW = $data -> Author -> Twitter;
?>
<!doctype html>
<html lang="en" class="minimal-style is-menu-fixed is-always-fixed is-selection-shareable blog-animated header-light header-small" data-effect="slideUp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sample Blog of HoangLe">
    <meta name="keywords" content="personal, blog, html5">
    <meta name="author" content="HoangLe">
    <title><?php echo $data->SiteTitle; ?></title>
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/ico/apple-touch-icon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="assets/js/jquery.magnific-popup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/js/jquery.fluidbox/fluidbox.css">
    <link rel="stylesheet" type="text/css" href="assets/js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/js/selection-sharer/selection-sharer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/rotate-words.css">
    <link rel="stylesheet" type="text/css" href="assets/css/align.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/js/shortcodes/shortcodes.css">
    <link rel="stylesheet" type="text/css" href="assets/css/768.css">
    <link rel="stylesheet" type="text/css" href="assets/css/992.css">
    <script src="assets/js/modernizr.min.js"></script>
</head>

<body class="  ">

<!-- page -->
<div id="page" class="hfeed site">

    <!-- header -->
    <header id="masthead" class="site-header" role="banner">


        <!-- site-navigation -->
        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">



            <!-- layout-medium -->
            <div class="layout-medium">




                <!-- site-title : image-logo -->
                <h1 class="site-title">
                    <a href="/" rel="home">
                        <img src="assets/images/site/logo.png" alt="logo">
                        <span class="screen-reader-text"><?php echo $data->SiteTitle; ?></span>
                    </a>
                </h1>




                <a class="menu-toggle"><span class="lines"></span></a>

                <!-- nav-menu -->
                <div class="nav-menu">
                    <ul>
                        <li><a href="/">HOME</a>
                    </ul>
                </div>
                <!-- nav-menu -->

                <a class="search-toggle toggle-link"></a>

                <!-- search-container -->
                <div class="search-container">

                    <div class="search-box" role="search">
                        <form method="get" class="search-form" action="#">
                            <label>Search Here
                                <input type="search" id="search-field" placeholder="type and hit enter" name="s">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </div>

                </div>
                <!-- search-container -->

                <!-- social-container -->
                <div class="social-container">

                    <a class="social-link facebook" href="<?php echo $AuthorFB;?>"></a>
                    <a class="social-link twitter" href="<?php echo $AuthorTW;?>"></a>
                    <a class="social-link vine" href="#"></a>
                    <a class="social-link dribbble" href="#"></a>
                    <a class="social-link instagram" href="<?php echo $AuthorIG;?>"></a>

                </div>
                <!-- social-container -->

            </div>
            <!-- layout-medium -->

        </nav>
        <!-- site-navigation -->






    </header>
    <!-- header -->




    <!-- site-main -->
    <div id="main" class="site-main">
        <div class="layout-medium">
            <div id="primary" class="content-area">

                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- .hentry -->
                    <article class="hentry page">


                        <!-- .entry-content -->
                        <div class="entry-content intro" data-animation="rotate-1">



                            <!-- .profile-image -->
                            <div class="profile-image">
                                <img alt="profile" src="assets/images/blog/author.jpg"/>
                            </div>
                            <!-- .profile-image -->


                            <h2><em>Hi.</em> I am HoangLe</h2>
                            <h3>I am a <strong>coder</strong> <strong>student</strong> <strong>writer</strong></h3>


                            <!-- .link-boxes -->
                            <figure>
                                <a href="https://mhoang.net"><img src="assets/images/site/box-01.jpg" alt="About Me"></a>
                                <figcaption class="wp-caption-text">About Me</figcaption>
                            </figure>

                            <figure>
                                <a href="https://mhoang.net"><img src="assets/images/site/box-02.jpg" alt="About Me"></a>
                                <figcaption class="wp-caption-text">Life</figcaption>
                            </figure>

                            <figure>
                                <a href="https://mhoang.net"><img src="assets/images/site/box-03.jpg" alt="About Me"></a>
                                <figcaption class="wp-caption-text">Travel</figcaption>
                            </figure>

                            <figure>
                                <a href="https://www.instagram.com/_hoho.hihi_/"><img src="assets/images/site/box-04.jpg" alt="About Me"></a>
                                <figcaption class="wp-caption-text">Follow On Instagram</figcaption>
                            </figure>
                            <!-- .link-boxes -->


                        </div>
                        <!-- .entry-content -->



                    </article>
                    <!-- .page -->




                    <!-- .home-title -->
                    <h3 class="widget-title home-title">LATEST FROM THE BLOG</h3>

                    <?php
                    for ($x = 0; $x <= $NumberOfPost; $x++) {
                        echo '<div class="blog-simple">
                        <article class="hentry post has-post-thumbnail">
                            <div class="hentry-left">
                                <div class="entry-date">';
                        echo '<span class="day">' . date('d',$data -> PostValue["$x"] -> PostDate) . '</span>';
                        echo '<span class="month">' . date('M',$data -> PostValue["$x"] -> PostDate) . '</span>';
                        echo '<span class="year">' . date('Y',$data -> PostValue["$x"] -> PostDate) . '</span>
                            </div>';
                        echo '<div class="featured-image" style="background-image:url('. $data -> PostValue["$x"] -> PostImg .')"></div>
                            </div>
                            <div class="hentry-middle">
                                <h2 class="entry-title"><a href="post.php?id='. $data -> PostValue["$x"] -> PostID .'">'. $data->PostValue["$x"]->PostTitle .'</a></h2>
                            </div>
                            <a class="post-link" href="post.php?id='. $data -> PostValue["$x"] -> PostID .'">'. $data->PostValue["$x"]->PostTitle .'</a>
                        </article>';
                    }
                    ?>



                    <!-- .home-launch
                    <div class="home-launch">
                        <a class="button" href="assets/blog-irregular.html">See All Posts</a>
                    </div>
                    .home-launch -->


                </div>
                <!-- site-content -->

            </div>
            <!-- primary -->





        </div>
        <!-- layout -->


    </div>
    <!-- site-main -->



    <!-- site-footer -->
    <footer id="colophon" class="site-footer" role="contentinfo">

        <!-- layout-medium -->
        <div class="layout-medium">


            <!-- site-title-wrap -->
            <div class="site-title-wrap">


                <!-- site-title : text-logo -->
                <!--<h1 class="site-title">
                    <a href="assets/../index.html" rel="home">
                        Jeff Winger
                    </a>
                </h1>-->
                <!-- site-title -->

                <!-- site-title : image-logo -->
                <h1 class="site-title">
                    <a href="assets/index.html" rel="home">
                        <img src="assets/images/site/logo.png" alt="logo">
                    </a>
                </h1>
                <!-- site-title -->

                <p class="site-description"><?php echo $data -> Author -> Bio; ?></p>

            </div>
            <!-- site-title-wrap -->


            <!-- footer-social -->
            <div class="footer-social">

                <div class="textwidget">
                    <a class="social-link facebook" href="<?php echo $AuthorFB;?>"></a>
                    <a class="social-link twitter" href="<?php echo $AuthorTW;?>"></a>
                    <a class="social-link vine" href="#"></a>
                    <a class="social-link dribbble" href="#"></a>
                    <a class="social-link instagram" href="<?php echo $AuthorIG;?>"></a>
                </div>

            </div>
            <!-- footer-social -->

        </div>
        <!-- layout-medium -->


        <!-- .site-info -->
        <div class="site-info">

            <!-- layout-medium -->
            <div class="layout-medium">

                <div class="textwidget">crafted with <i class="pw-icon-heart"></i> <em>by</em> HZV</div>

            </div>
            <!-- layout-medium -->

        </div>
        <!-- .site-info -->



    </footer>
    <!-- site-footer -->


</div>
<!-- page -->


<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="assets/js/jquery-3.1.1.min.js"><\/script>');
    }
</script>
<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.fitvids.js"></script>
<script src="assets/js/jquery.viewport.mini.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.fluidbox/jquery.fluidbox.min.js"></script>
<script src="assets/js/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/selection-sharer/selection-sharer.js"></script>
<script src="assets/js/socialstream.jquery.js"></script>
<script src="assets/js/jquery.collagePlus/jquery.collagePlus.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/shortcodes/shortcodes.js"></script>

</body>
</html>
