<?php
require 'assets/lib/Parsedown.php';
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


//Get Post Data
for ($x = 0; $x <= $NumberOfPost; $x++) {
    if ($id == $data -> PostValue["$x"] -> PostID){
        $postID = $data -> PostValue["$x"] -> PostID;
        $postKey = $postID -1;
        $PostTitle = $data->PostValue["$x"]->PostTitle;
        $PostDate = date('Y-M-d H:i:s',$data -> PostValue["$x"] -> PostDate);
        $PostPath = $data->PostValue["$x"]->PostFilePath;
        $PostImg = $data->PostValue["$x"]->PostImgPath;
        $PostDescription = $data->PostValue["$x"]->PostDescription;
        $PostCategory = $data->PostValue["$x"]->PostCategory;
    }
    $Parsedown = new Parsedown();
}
?>
<!doctype html>
<html lang="en" class="minimal-style is-menu-fixed is-always-fixed is-selection-shareable blog-animated header-light header-small" data-effect="slideUp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $PostDescription; ?>">
    <meta name="keywords" content="personal, blog, html5">
    <meta name="author" content="HoangLe">
    <title><?php echo $PostTitle; ?></title>
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
                <!-- site-title -->

                <!-- site-title : text-logo -->
                <!--<h1 class="site-title">
                    <a href="assets/../index.html" rel="home">
                        Haley Dust
                    </a>
                </h1>-->
                <!-- site-title -->




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
    <div id="main" class="site-main"> <!-- .featured-top -->
        <div class="featured-top">

            <img src="assets/images/blog/02.jpg" alt="post-image">

            <!-- .post-thumbnail -->
            <div class="post-thumbnail" style="background-image:url(<?php echo $PostImg;?>)">

                <!-- .entry-header -->
                <header class="entry-header">


                    <!-- .entry-meta -->
                    <div class="entry-meta">
                            <span class="cat-links">
                                <a href="<?php echo 'category.php?category='. $PostCategory;?>" title="View all posts in Travel" rel="category tag"><?php echo $PostCategory; ?></a>
                            </span>
                    </div>
                    <!-- .entry-meta -->

                    <!-- .entry-title -->
                    <h1 class="entry-title"><?php echo $PostTitle; ?></h1>

                    <!-- .entry-meta -->
                    <div class="entry-meta">
                            <span class="entry-date">
                                <time class="entry-date""><?php echo $PostDate; ?></time>
                            </span>
                    </div>
                    <!-- .entry-meta -->

                </header>
                <!-- .entry-header -->

            </div>
            <!-- .post-thumbnail -->

        </div>
        <!-- .featured-top -->


        <div class="layout-medium">
            <div id="primary" class="content-area">









                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- .hentry -->
                    <article class="hentry post single-post">


                        <!-- .entry-content -->
                        <?php echo $Parsedown->text(file_get_contents($PostPath));?>
                        <!-- .entry-content -->




                        <!-- .post-tags -->
                        <div class="post-tags tagcloud">
                            <?php
                            $tag = $data -> PostValue["$postKey"] -> PostTag;
                            $str_arr = explode ("+", $tag);
                            $NumberOfTag = count($str_arr) - 1;
                            for ($x = 0; $x <= $NumberOfTag; $x++) {
                                $tagValue = $str_arr[$x];
                                echo '<a href="tag.php?' . $tagValue .'" rel="tag">'. $tagValue . '</a>';
                            }
                            ?>
                        </div>
                        <!-- .post-tags -->


                        <!-- .share-links -->
                        <div class="share-links">

                            <h3>SHARE THIS POST</h3>

                            <a rel="nofollow" target="_blank" href="mailto:?subject=I wanted you to see this post&amp;body=Check out this post : <?php echo $PostTitle;?> - <?php echo $SiteUrl; ?> ." title="Email this post to a friend"><i class="pw-icon-mail"></i></a>

                            <a rel="nofollow" target="_blank" href="http://twitter.com/home?status=Currently reading: <?php echo $PostTitle;?> - <?php echo $SiteUrl; ?>" title="Share this post with your followers"><i class="pw-icon-twitter"></i></a>

                            <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $SiteUrl; ?>&amp;t=<?php echo $PostTitle;?>" title="Share this post on Facebook"><i class="pw-icon-facebook"></i></a>


                        </div>
                        <!-- .share-links -->


                        <!-- .nav-single -->
                        <nav class="nav-single row">

                            <div class="nav-previous col-xs-6">
                                <h4>PREVIOUS POST</h4>
                                <a href="post.php?id=<?php echo ($postID - 1);?>" rel="prev"><?php $prev = $postKey - 1; echo $PostTitle = $data->PostValue["$prev"]->PostTitle; ?></a>
                            </div>

                            <div class="nav-next col-xs-6">
                                <h4>NEXT POST</h4>
                                <a href="post.php?id=<?php echo ($postID + 1);?>" rel="next"><?php $next = $postKey + 1; echo $PostTitle = $data->PostValue["$next"]->PostTitle; ?></a>
                            </div>

                        </nav>
                        <!-- .nav-single -->


                        <!-- .about-author -->
                        <aside class="about-author">

                            <h3>About The Author</h3>

                            <!-- .author-bio -->
                            <div class="author-bio">

                                <!-- .author-img -->
                                <div class="author-img">
                                    <a href="assets/#"><img alt="<?php echo $AuthorName;?>" src="assets/images/blog/author.jpg" class="avatar"></a>
                                </div>
                                <!-- .author-img -->

                                <!-- .author-info -->
                                <div class="author-info">
                                    <h4 class="author-name"><?php echo $AuthorName;?></h4>
                                    <p><?php echo $AuthorDesc;?>.</p>

                                    <p>
                                        <a class="social-link facebook" href="<?php echo $AuthorFB;?>"></a>
                                        <a class="social-link twitter" href="<?php echo $AuthorTW;?>"></a>
                                        <a class="social-link vine" href="#"></a>
                                        <a class="social-link dribbble" href="#"></a>
                                        <a class="social-link instagram" href="<?php echo $AuthorIG;?>"></a>
                                    </p>

                                </div>
                                <!-- .author-info -->

                            </div>
                            <!-- .author-bio -->

                        </aside>
                        <!-- .about-author -->



                    </article>
                    <!-- .hentry -->

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



            <!-- widget-area -->
            <!--<div class="widget-area" role="complementary">

                <div class="row">

                    <div class="col-sm-6 col-md-4">


                        <aside class="widget widget_text">

                          <div class="textwidget">
                            <a href="assets/#"><img src="assets/../images/blog/banner.jpg" alt="banner"></a>
                          </div>
                        </aside>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <aside class="widget widget_categories">
                          <ul>
                            <li class="cat-item"><a href="assets/#" title="View all posts filed under Nature">Nature</a></li>
                            <li class="cat-item"><a href="assets/#" title="View all posts filed under Life">Life</a></li>
                            <li class="cat-item"><a href="assets/#" title="View all posts filed under Adventure">Adventure</a></li>
                            <li class="cat-item"><a href="assets/#" title="View all posts filed under Freebies">Freebies</a></li>
                          </ul>
                        </aside>


                        <aside class="widget widget_mc4wp_widget">
                            <h3 class="widget-title">Sign Up For The Newsletter</h3>
                            <div class="form mc4wp-form">
                                <form method="post">
                                    <p>
                                        <label>Email address: </label>
                                        <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                    </p>
                                    <p>
                                        <input type="submit" value="Sign up">
                                    </p>
                                </form>
                            </div>
                        </aside>

                    </div>

                    <div class="col-sm-12 col-md-4">

                        <aside class="widget widget_widget_tptn_pop">
                            <h3 class="widget-title">Trending Posts</h3>
                            <div class="tptn_posts tptn_posts_widget">
                                <ul>

                                    <li>
                                        <a href="assets/#" class="tptn_link">
                                            <img src="assets/../images/blog/p2.jpg" alt="post-image" class="tptn_thumb">
                                        </a>
                                        <span class="tptn_after_thumb">
                                            <a href="assets/#" class="tptn_link"><span class="tptn_title">Feel The Wind</span></a>
                                            <span class="tptn_date"> September 3, 2014</span>
                                        </span>
                                    </li>

                                    <li>
                                        <a href="assets/#" class="tptn_link">
                                            <img src="assets/../images/blog/p3.jpg" alt="post-image" class="tptn_thumb">
                                        </a>
                                        <span class="tptn_after_thumb">
                                            <a href="assets/#" class="tptn_link"><span class="tptn_title">Stop Worrying About How Pretty It is</span></a>
                                            <span class="tptn_date"> September 3, 2014</span>
                                        </span>
                                    </li>

                                    <li>
                                        <a href="assets/#" class="tptn_link">
                                            <img src="assets/../images/blog/p4.jpg" alt="post-image" class="tptn_thumb">
                                        </a>
                                        <span class="tptn_after_thumb">
                                            <a href="assets/#" class="tptn_link"><span class="tptn_title">10 Killer Blogging Tips</span></a>
                                            <span class="tptn_date"> September 3, 2014</span>
                                        </span>
                                    </li>

                                </ul>
                            </div>
                        </aside>

                    </div>

                </div>

            </div>-->
            <!-- widget-area -->



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