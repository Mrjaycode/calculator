<?php
error_reporting(E_ERROR | E_PARSE);
include '../config.php';
$id=htmlspecialchars($_GET['id']);
$fetch = $anjan->prepare("SELECT * FROM blog_tbl WHERE id=:id ");
$fetch->bindParam(':id', $id);
$fetch->execute();
$val2=$fetch->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
<title>VIEW BLOG | Calcspeed</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/blog.css">
</head>

<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    

    <!-- Top navbar div start -->
   <?php include'top-bar.php';?>

    <!-- main left menu -->
    <?php include'left-menu.php';?>

    <!-- rightbar icon div -->
    <div class="right_icon_bar">
        <!-- <ul>
            <li><a href="app-inbox.html"><i class="fa fa-envelope"></i></a></li>
            <li><a href="app-chat.html"><i class="fa fa-comments"></i></a></li>
            <li><a href="app-calendar.html"><i class="fa fa-calendar"></i></a></li>
            <li><a href="file-dashboard.html"><i class="fa fa-folder"></i></a></li>
            <li><a href="app-contact.html"><i class="fa fa-id-card"></i></a></li>
            <li><a href="blog-list.html"><i class="fa fa-globe"></i></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
        </ul> -->
    </div>

    <!-- mani page content body part -->
    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Blog Details</h2>
                        <ul class="breadcrumb">                           
                            <li class="breadcrumb-item">All Blogs</li>
                            <li class="breadcrumb-item active">View Blog</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="all-blogs.php">
                                    <button type="button" class="btn btn-primary">All Blogs</button>
                                </a>
                                <a href="edit-blog.php?id=<?php echo $val2['id']; ?>" class="btn btn-secondary" title="new post"><i class="fa fa-pencil"></i> Edit</a>

                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <h3><a href="#"><?=$val2['title']?></a></h3>
                            <div class="">
                                <img class="d-block img-fluid" src="blog-images/<?php echo $val2['blog_image'];?>">
                            </div>
                            <div>
                                 <?= html_entity_decode($val2['blog_description'])?>
                            </div>
                        </div>                        
                    </div>
                    
                </div>
                
            </div>

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<!-- page js file -->
<script src="../assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
