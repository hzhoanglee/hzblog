<?php
$data = json_decode(file_get_contents("../data.json"));
$dataArray = json_decode(file_get_contents("../data.json"), TRUE);
$NumberOfPost = count($dataArray['PostValue']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>CRUD AdminPanel</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="ion-close"></i>
        </button>

        <div class="left-side-logo d-block d-lg-none">
            <div class="text-center">

                <a href="index.html" class="logo"><img src="assets/images/logo-dark.png" height="20" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Actions </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="new.php">New Post</a></li>
                            <li><a href="edit.php">Edit Post</a></li>
                            <li><a href="delete.php">Delete Post</a></li>
                            <li><a href="update.php">Update</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">


                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="page-title">New Post</h5>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h1 class="mt-0 header-title">Select a post to delete</h1>
                                    <form action="new.php" method="post">
                                        <input type="text" name="data" value="true" hidden>
                                        <div class="form-group row">
                                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="" id="title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="img" class="col-sm-2 col-form-label">Thumbnail URL</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="" id="img" name="img">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category" class="col-sm-2 col-form-label">Category</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="" id="category" name="category">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">File Path</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" id="file" name="file">
                                                    <option selected>Select Post</option>
                                                    <?php
                                                    $dir = scandir("../post/"); // Or any other directory
                                                    $list = array_diff($dir, array('.', '..'));
                                                    foreach ($list as $item) {
                                                        echo '<option value="post/'. $item .'">post/'. $item .'</option>';
                                                    }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tag" class="col-sm-2 col-form-label">Tags (divide by +)</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="" id="tag" name="tag">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="desc" class="col-sm-2 col-form-label">Description</label>
                                            <textarea id="desc" class="form-control" maxlength="225" rows="3" placeholder="Description." name="desc"></textarea>
                                        </div>
                                        <input type="submit">
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container fluid -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <footer class="footer">
            © 2018 - 2020 <b>Drixo</b> <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>
<pre>
<?php
if ($_POST["data"] == "true"){
    echo 'NewPost info: <br>';
    $newpost = array();
    $newpost["PostValue"][$NumberOfPost]["PostID"] = $NumberOfPost + 1;
    $newpost["PostValue"][$NumberOfPost]["PostTitle"] = $_POST["title"];
    $newpost["PostValue"][$NumberOfPost]["PostDate"] = time();
    $newpost["PostValue"][$NumberOfPost]["PostFilePath"] = $_POST["file"];
    $newpost["PostValue"][$NumberOfPost]["PostImgPath"] = $_POST["img"];
    $newpost["PostValue"][$NumberOfPost]["PostDescription"] = $_POST["desc"];
    $newpost["PostValue"][$NumberOfPost]["PostCategory"] = $_POST["category"];
    $newpost["PostValue"][$NumberOfPost]["PostTag"] = $_POST["tag"];
    $cel = array_merge_recursive($dataArray, $newpost);
    $newdata = json_encode($cel,JSON_PRETTY_PRINT);
    echo $newdata;
    $myfile = fopen("../data.json", "w") or die("Unable to open file!");
    fwrite($myfile, $newdata); fclose($myfile);

}

?>

</pre>