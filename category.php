<?php
require 'assets/lib/Parsedown.php'; $tmp = 1;
$listCategory = $_GET["category"];
$id = $_GET["id"];
$data = json_decode(file_get_contents("data.json"));
$dataArray = json_decode(file_get_contents("data.json"), TRUE);
$NumberOfPost = count($dataArray['PostValue']) - 1;
$SiteUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//Get Author Data
$AuthorName = $data -> Author -> Name;
$AuthorDesc = $data -> Author -> Description;
$AuthorBio = $data -> Author -> Bio;
$AuthorFB = $data -> Author -> Facebook;
$AuthorIG = $data -> Author -> Instagram;
$AuthorTW = $data -> Author -> Twitter;

?>
<!doctype html>
<html lang="en" class="minimal-style is-menu-fixed is-always-fixed is-selection-shareable blog-animated header-light header-small" data-effect="slideUp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="All post with category: <?php echo $listCategory; ?>">
    <meta name="keywords" content="personal, blog, html5">
    <meta name="author" content="HoangLe">
    <title>Category:: <?php echo $listCategory; ?></title>
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
<body class=" single ">
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
            <div class="layout-medium">
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
                <a class="search-toggle toggle-link"></a>
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
                <div class="social-container">
                    <a class="social-link facebook" href="<?php echo $AuthorFB;?>"></a>
                    <a class="social-link twitter" href="<?php echo $AuthorTW;?>"></a>
                    <a class="social-link vine" href="#"></a>
                    <a class="social-link dribbble" href="#"></a>
                    <a class="social-link instagram" href="<?php echo $AuthorIG;?>"></a>
                </div>
            </div>
        </nav>
    </header>
    <!-- header -->




    <!-- site-main -->
    <div id="main" class="site-main">
        <div class="layout-medium">
            <div id="primary" class="content-area with-sidebar">
                <!-- site-content -->
                <div id="content" class="site-content" role="main">
                    <header class="entry-header">
                        <h1 class="entry-title"><i>Posts in</i> <span class="cat-title"><?php echo $listCategory; ?></span></h1>
                        <!--<h1 class="entry-title"><i>Posts tagged</i> <span class="cat-title">typography</span></h1>-->
                        <!--<h1 class="entry-title"><i>Posts by</i> <span class="cat-title">Jeff Winger</span></h1>-->
                        <!--<h1 class="entry-title"><i>searched for :</i> <span class="cat-title">summertime</span></h1>-->
                    </header>


                    <!-- BLOG LIST -->
                    <div class="blog-list blog-stream">
                        <?php
                        //Get Post Data
                        for ($x = 0; $x <= $NumberOfPost; $x++) {
                            if ($listCategory == $data -> PostValue["$x"] -> PostCategory){
                                $postID = $data -> PostValue["$x"] -> PostID;
                                $postKey = $postID -1;
                                $PostTitle = $data->PostValue["$x"]->PostTitle;
                                $PostDate = date('Y-M-d H:i:s',$data -> PostValue["$x"] -> PostDate);
                                $PostPath = $data->PostValue["$x"]->PostFilePath;
                                $PostImg = $data->PostValue["$x"]->PostImgPath;
                                $PostDescription = $data->PostValue["$x"]->PostDescription;
                                $PostCategory = $data->PostValue["$x"]->PostCategory;
                                echo '<article class="hentry post has-post-thumbnail">
                            <div class="featured-image">
                                <a href="post.php?id='. $postID .'" title="'. $PostTitle .'"><img src="' . $PostImg . '" alt="blog-image"></a>
                            </div>
                            <div class="hentry-middle">
                                <header class="entry-header">

                                    <div class="entry-meta">
                                                <span class="cat-links">
                                                    <a href="category.php?category=' .$PostCategory. '" title="View all posts in ' . $PostCategory .'" rel="category tag">' . $PostCategory . '</a>
                                                </span>
                                        <span class="entry-date">
                                                    <time class="entry-date">' . $PostDate .'</time>
                                                </span>
                                    </div>
                                    <h2 class="entry-title"><a href="post.php?id='. $postID .'" title="'. $PostTitle .'">'. $PostTitle .'</a></h2>
                                </header>

                                <div class="entry-content">
                                    <p>'. $PostDescription .'
                                        <span class="more">
                                                    <a href="post.php?id='. $postID .'" class="more-link">Read More</a>
                                                </span>
                                    </p>
                                </div>
                            </div>
                        </article>';
                                $tmp = 0;
                            } else if ($tmp == 1) {
                                $tmp = 0;
                                echo ' <article class="hentry post has-post-thumbnail">
                            <div class="hentry-middle">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#" title="NotFound">No Post Found :<</a></h2>
                                </header>
                            </div>
                        </article>';
                            }

                        }
                        ?>





                    </div>
                    <!-- BLOG LIST -->







                </div>
                <!-- site-content -->

            </div>
            <!-- primary -->




            <!-- #secondary -->
            <div id="secondary" class="widget-area sidebar" role="complementary">

                <!-- widget : text -->
                <aside class="widget widget_text">
                    <h3 class="widget-title">About Me</h3>
                    <div class="textwidget">
                        <p><img src="assets/images/blog/author.jpg" alt="avatar"></p>
                        <p><?php echo $AuthorDesc;?>.</p>
                    </div>
                </aside>
                <!-- widget : text -->

                <!-- widget : text -->
                <aside class="widget widget_text">
                    <h3 class="widget-title">Follow Me</h3>
                    <div class="textwidget">
                        <p>
                            <a class="social-link facebook" href="<?php echo $AuthorFB;?>"></a>
                            <a class="social-link twitter" href="<?php echo $AuthorTW;?>"></a>
                            <a class="social-link vine" href="#"></a>
                            <a class="social-link dribbble" href="#"></a>
                            <a class="social-link instagram" href="<?php echo $AuthorIG;?>"></a>
                        </p>
                    </div>
                </aside>
                <!-- widget : text -->

            </div>
            <!-- #secondary -->




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

                <h1 class="site-title">
                    <a href="/" rel="home">
                        <img src="assets/images/site/logo.png" alt="logo">
                    </a>
                </h1>
                <!-- site-title -->

                <p class="site-description"><?php echo $AuthorBio;?></p>

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