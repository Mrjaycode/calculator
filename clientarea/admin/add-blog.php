
<?php
   include "../config.php";
   
   ?>
<!doctype html>
<html lang="en">
<head>
<title>ADD BLOG | Calcspeed</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Affordable Bike Rides in Hyderabad | OK2GO Bike Taxis">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/02d5a99266.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../assets/vendor/summernote/dist/summernote.css"/>
<link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="" width="48" height="48" alt="Tekofy"></div>
            <p>Please wait...</p>
        </div>
    </div> -->

    <!-- Top navbar div start -->
    <?php include'top-bar.php';?>

    <!-- main left menu -->
    <?php include'left-menu.php';?>

    <!-- rightbar icon div -->
    <div class="right_icon_bar">
       
    </div>

    <!-- mani page content body part -->
    <div id="main-content">
      <form method="POST" enctype="multipart/form-data">
        
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Blog Posts</h2>
                        <ul class="breadcrumb">                           
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="all-blogs.php">
                                    <button type="button" class="btn btn-primary">All Blogs</button>
                                </a>
                                <!-- <a href="" class="btn btn-secondary" title="new post">Cancel</a> -->
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                     <div class="col-sm-12">
                        <div class="form-group">
                            <label>URL link slug (max 60 characters)</label>
                           <input type="text" id="meta_title" name="meta_title" maxlength="60" placeholder="Enter URL link slug (max 60 characters)" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;" required><br>
                           <small style="color:#777;">Example: Calcspeed is for farmers to sell and buy</small><br><br>
                           <script>
                              function countChars() {
                                const input = document.getElementById('meta_title');
                                const count = input.value.length;
                                document.getElementById('charCount').textContent = `${count} / 60 characters`;
                              }
                           </script>
                        </div>
                     </div>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta blog title</label>
                                <input type="text" class="form-control" placeholder="Enter Meta Blog title" name="title">
                            </div>
                            </div>
                     <div class="col-sm-12">
                                    <div class="form-group">
                                       <label>Meta Description</label>
                                       <input type="text" class="form-control" placeholder="Enter Meta Description" name="meta_description">
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                  <div class="form-group">
                                    <label>Meta Keywords</label>
                                <input type="text" class="form-control" placeholder="Enter Meta Keywords" name="keywords">
                            </div>
                            </div>
                     <div class="col-sm-12">
                        <div class="form-group">
                           <label for="meta_script" style="font-weight:600;">Custom Meta Script (Head / Footer)</label>
                           <textarea 
                              id="meta_script" 
                              name="meta_script" 
                              class="form-control" 
                              rows="8" 
                              placeholder="Paste your custom script here, e.g., Google Analytics, Meta Pixel, or JSON-LD Schema"
                              style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-family: monospace; resize: vertical;"
                              ></textarea>
                           <small style="color:#777;">
                           Example:<br>
                           <code>&lt;script&gt;<br>
                           &nbsp;&nbsp;console.log('Tracking Script Loaded');<br>
                           &lt;/script&gt;</code>
                           </small>
                        </div>
                     </div>
                  </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                           
                            <div class="form-group">
                              <label>Blog Heading</label>
                                <input type="text" class="form-control" placeholder="Enter Blog Heading" name="blog_heading">
                            </div>
                            <label>Select Category</label>
                            <select class="form-control show-tick" name="blog_category">
    <option value="">Select Category</option>

    <option value="Loans & EMI">Loans & EMI</option>
    <option value="Personal Finance">Personal Finance</option>
    <option value="Investments & Savings">Investments & Savings</option>
    <option value="Tax & GST">Tax & GST</option>
    <option value="Salary & Income">Salary & Income</option>
    <option value="Percentage & Mathematics">Percentage & Mathematics</option>
    <option value="Health & Fitness">Health & Fitness</option>
    <option value="Education & Students">Education & Students</option>
    <option value="Time & Date Calculations">Time & Date Calculations</option>
    <option value="Business & Accounting">Business & Accounting</option>
    <option value="Shopping & Discounts">Shopping & Discounts</option>
    <option value="Insurance & Planning">Insurance & Planning</option>
    <option value="Real Estate Finance">Real Estate Finance</option>
    <option value="Financial Guides">Financial Guides</option>
    <option value="Calculator Tutorials">Calculator Tutorials</option>
</select>

                            <div class="form-group" style="margin-top: 10px;">
                                <div class="form-control">
                                    <label>Blog Image(625x448)</label>
                                    <input type="file" class="dropify" name="blog_image">
                                </div>
                            </div>
                           <!--  <div class="summernote">
                                <h3 class="mb-0">hi,</h3>
                                <h4 class="m-t-0">we are Summernote</h4>
                                <p></p>
                            </div> -->
                          
                            <div class="form-group">
                                <label>Blog Description</label>
                                <textarea id="myTextarea"  name="blog_description" placeholder="Blog Description">
                                    <h3 class="mb-0">hi,</h3>
                                    <h4 class="m-t-0">we are Summernote</h4>
                                    <p></p>
                                </textarea>
                            </div>
                            <!-- ADD AFTER the blog_description form-group div, BEFORE the status form-group -->

<div class="form-group">
    <label>Quick Takeaway Description</label>
    <textarea class="form-control" name="quick_takeaway" rows="3" placeholder="Enter a short quick takeaway for readers"></textarea>
</div>

<div class="form-group">
    <label>Quotation</label>
    <input type="text" class="form-control" placeholder="Enter a notable quote" name="quotation">
</div>

<div class="form-group">
    <label>Formula Text</label>
    <textarea class="form-control" name="formula_text" rows="3" placeholder="Enter formula or equation text (e.g. EMI = P × r × (1+r)^n / ((1+r)^n - 1))"></textarea>
</div>
                            <div class="form-group">
  <label>Status</label>
  <select class="form-control" name="status" required>
    <option value="1">Active</option>
    <option value="0">Inactive</option>
  </select>
</div>
                            <button type="submit" name="submit_form" class="btn btn-block btn-primary   m-t-20">Post</button>
                        </div>
                    </div>
                </div>            
            </div>

        </div>
      </form>
    </div>
    
</div>

<!-- Javascript -->
<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/vendor/dropify/js/dropify.min.js"></script>
<!-- page js file -->
<script src="../assets/js/pages/forms/dropify.js"></script>
<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/vendor/summernote/dist/summernote.js"></script>
<script type="text/javascript" src="../assets/js/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    //Image upload handler callback function
    const image_upload_handler_callback = (blobInfo, progress) => new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload.php');

        xhr.upload.onprogress = (e) => {
            progress(e.loaded / e.total * 100);
        };

        xhr.onload = () =>{
            if (xhr.status === 403){
                reject({ message: 'HTTP Error: ' + xhr.status, remove: true});
                return;
            }
            if (xhr.status < 200 || xhr.status >= 300){
                reject('HTTP Error: ' + xhr.status);
                return;
            }
            const json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string'){
                reject('Invalid JSON: ' + xhr.responseText);
                return;
            }
            resolve(json.location);
        };

        xhr.onerror = () => {
            reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
        };

        const formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);

    });

    // Initialize TinyMCE and attach to textarea element
    tinymce.init({
        selector : '#myTextarea',
        plugins: 'image',
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignjustify | outdent indent | image',
        images_upload_url: 'upload.php',
        images_upload_handler: image_upload_handler_callback
    });
</script>
<script src="../assets/js/sweetalert.min.js"></script>

<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        
    window.save = function() {
        $(".click2edit").summernote('destroy');
    }
</script>
     <?php
if(isset($_GET['success'])){
    ?>
    <script type="text/javascript">
        swal({
         title: "Blog Added",
         text: "You clicked the button!",
         icon: "success",
         });
            
    </script>
    <?php
}
?>
<?php
if(isset($_GET['number-not-Exist'])){
    ?>
    <script type="text/javascript">
        swal({
         title: "This Number Not Exist!",
         text: "Please Check or Sign up",
         icon: "warning",
         });
    </script>
   <?php 
}
?>
<?php
if(isset($_GET['invalid-email'])){
    ?>
    <script type="text/javascript">
        swal({
         title: "This Email Not Exist!",
         text: "Please Check or Sign up",
         icon: "warning",
         });
    </script>
   <?php 
}
?>
<?php
if(isset($_GET['invalid-mobile'])){
    ?>
    <script type="text/javascript">
         swal({
         title: "Failed!",
         text: "Invalid Email or Password!",
         icon: "error",
         });
    </script>
    <?php
}
?>
<?php
if(isset($_GET['logout'])){
    ?>
    <script type="text/javascript">
         swal({
         title: "Log out!",
         text: "",
         icon: "success",
         });
    </script>
    <?php
}
?>
</body>
</html>


<?php
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['submit_form'])){
        // Generate booking ID
     $get_blog_id = $anjan->prepare("SELECT max(id) FROM blog_tbl");
    $get_blog_id->execute();
    $blog_id = $get_blog_id->fetch(PDO::FETCH_ASSOC);
    if($blog_id['max(id)'] > 0){
        $n = $blog_id['max(id)'] + 1;
        $blog_id = 'BLG00' . $n;
    } else {
        $blog_id = 'BLG001';
    }
    $auser_id = $userRow['auser_id']; // take from session user info
    $blog_category=htmlspecialchars(trim($_POST['blog_category']));
    $title=htmlspecialchars(trim($_POST['title']));
    $meta_description=htmlspecialchars(trim($_POST['meta_description']));
    $meta_script = trim($_POST['meta_script']);
    $keywords=htmlspecialchars(trim($_POST['keywords']));
    $blog_description = $_POST['blog_description'];
    $blog_heading=htmlspecialchars(trim($_POST['blog_heading']));
    $quick_takeaway = htmlspecialchars(trim($_POST['quick_takeaway']));
$quotation      = htmlspecialchars(trim($_POST['quotation']));
$formula_text   = htmlspecialchars(trim($_POST['formula_text']));
   $status=htmlspecialchars(trim($_POST['status']));
$getUser = $anjan->prepare("SELECT user_name FROM client_tbl WHERE auser_id = ?");
$getUser->execute([$auser_id]);
$userData = $getUser->fetch(PDO::FETCH_ASSOC);

$added_by = $userData ? $userData['user_name'] : 'Admin';
    $added_date=date('d/m/Y');
    $added_time=date('H:i:s');



  // function to create slug
   function slugify($text) {
       $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
       $text = strtolower($text);
       $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
       $text = trim($text, '-');
       return $text ?: 'post';
   }
   
   // ensure unique slug
   function getUniqueSlug(PDO $pdo, $meta_title, $id = null) {
       $slug = slugify($meta_title);
       $baseSlug = $slug;
       $i = 2;
   
       while (true) {
           $sql = "SELECT COUNT(*) FROM blog_tbl WHERE slug = :slug" . ($id ? " AND id != :id" : "");
           $stmt = $pdo->prepare($sql);
           $params = [':slug' => $slug];
           if ($id) $params[':id'] = $id;
           $stmt->execute($params);
           $exists = $stmt->fetchColumn();
   
           if ($exists == 0) break; // unique
           $slug = $baseSlug . '-' . $i;
           $i++;
       }
       return $slug;
   }
   
   // in your add_blog save logic
   $meta_title = $_POST['meta_title'];
   $slug  = getUniqueSlug($anjan, $meta_title);

 function uploadBlogImage($file){

    if(empty($file['name'])) return "";

    // original name
    $originalName = basename($file['name']);

    // remove spaces
    $originalName = str_replace(' ', '-', $originalName);

    // upload
    move_uploaded_file($file['tmp_name'], "blog-images/" . $originalName);

    return $originalName;
}
$blog_image = uploadBlogImage($_FILES['blog_image']);

    $insert = $anjan->prepare("INSERT INTO blog_tbl (
    auser_id,
    blog_id,
    blog_category,
    title,
    blog_heading,
    slug,
    meta_description,
    meta_title,
    meta_script,
    keywords,
    blog_image,
    blog_description,
    quick_takeaway,
    quotation,
    formula_text,
    status,
    added_by,
    added_date,
    added_time
) VALUES (
    :auser_id,
    :blog_id,
    :blog_category,
    :title,
    :blog_heading,
    :slug,
    :meta_description,
    :meta_title,
    :meta_script,
    :keywords,
    :blog_image,
    :blog_description,
    :quick_takeaway,
    :quotation,
    :formula_text,
    :status,
    :added_by,
    :added_date,
    :added_time
)");

$insert->bindParam(':auser_id',       $auser_id);
$insert->bindParam(':blog_id',        $blog_id);
$insert->bindParam(':blog_category',  $blog_category);
$insert->bindParam(':title',          $title);
$insert->bindParam(':blog_heading',   $blog_heading);
$insert->bindParam(':slug',           $slug);
$insert->bindParam(':meta_description', $meta_description);
$insert->bindParam(':meta_title',     $meta_title);
$insert->bindParam(':meta_script',    $meta_script);
$insert->bindParam(':keywords',       $keywords);
$insert->bindParam(':blog_image',     $blog_image);
$insert->bindParam(':blog_description', $blog_description);
$insert->bindParam(':quick_takeaway', $quick_takeaway);
$insert->bindParam(':quotation',      $quotation);
$insert->bindParam(':formula_text',   $formula_text);
$insert->bindParam(':status',         $status);
$insert->bindParam(':added_by',       $added_by);
$insert->bindParam(':added_date',     $added_date);
$insert->bindParam(':added_time',     $added_time);

$insert->execute();

if($insert){
        echo'<script>window.location.href="?success"</script>';
    }else{
        echo'<script>window.location.href="?failed"</script>}';
    }
    
    }

?>