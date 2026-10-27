
<?php
// Turn off error reporting
error_reporting(0);
ini_set('display_errors', 0);

   include '../config.php';
   $id=htmlspecialchars($_GET['id']);
   $fetch=$anjan->prepare("SELECT * FROM `blog_tbl` WHERE id=:id");
   $fetch->bindparam(':id',$id);
   $fetch->execute();
   $val2=$fetch->fetch(PDO::FETCH_ASSOC);
   ?>
<!doctype html>
<html lang="en">
<head>
<title>Edit BLOG | Calcspeed</title>
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
            <div class="m-t-30"><img src="" width="48" height="48" alt="Calcspeed"></div>
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
                <input type="hidden" name="id" value="<?= htmlspecialchars($val2['id']) ?>">
                                 <input type="hidden" name="blog_id" value="<?php echo $val2['blog_id']; ?>">
                                 
                     <div class="col-sm-12">
                        <div class="form-group">
                           <label>URL SLUG Meta Title(max 60 characters)</label>
                           <input type="text" id="meta_title" name="meta_title"  value="<?=$val2['meta_title']?>" maxlength="60" placeholder="Enter SEO title (max 60 characters)" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;" required><br>
                           <small style="color:#777;">Buy & Sell Farming Equipment Easily | Calcspeed for Farmers</small><br><br>
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
                                <input type="text" class="form-control" placeholder="Enter Meta Blog title" name="title"value="<?=$val2['title']?>" >
                            </div>
                            </div>
                     <div class="col-sm-12">
                                    <div class="form-group">
                                       <label>Meta Description</label>
                                       <input type="text" class="form-control" placeholder="Enter Meta Description" name="meta_description" value="<?=$val2['meta_description']?>">
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                  <div class="form-group">
                                    <label>Meta Keywords</label>
                                <input type="text" class="form-control" placeholder="Enter Meta Keywords" name="keywords"value="<?=$val2['keywords']?>">
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
                              cols="80"
                              placeholder="Add Custom Meta Script (Head/Footer): Paste your meta script here"
                              style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-family:monospace; resize:vertical;"
                              ><?= isset($val2['meta_script']) ? htmlspecialchars_decode($val2['meta_script'], ENT_QUOTES) : '' ?></textarea>
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
                                <input type="text" class="form-control" placeholder="Enter Blog Heading" name="blog_heading" value="<?=$val2['blog_heading']?>">
                            </div>
                           <label>Select category</label>
                           <?php
// Assuming $val2['blog_category'] contains the selected category value
$selectedCategory = $val2['blog_category'];

// Define categories
$categories = [
    "",
    "Loans & EMI",
    "Personal Finance",
    "Investments & Savings",
    "Tax & GST",
    "Salary & Income",
    "Percentage & Mathematics",
    "Health & Fitness",
    "Education & Students",
    "Time & Date Calculations",
    "Business & Accounting",
    "Shopping & Discounts",
    "Insurance & Planning",
    "Real Estate Finance",
    "Financial Guides",
    "Calculator Tutorials"
];

// Output select element
echo '<select class="form-control show-tick" id="blogCategorySelect" required name="blog_category">';

echo '<option value="">Select Category</option>';

foreach ($categories as $category) {
    if ($category == "") continue;

    $isSelected = ($selectedCategory == $category) ? 'selected' : '';
    echo '<option value="' . htmlspecialchars($category) . '" ' . $isSelected . '>'
         . htmlspecialchars($category) .
         '</option>';
}

echo '</select>';
?>

                           
                            <div class="form-group" style="margin-top: 10px;">
                                 <img  id="uploaded_photo" src="blog-images/<?=$val2['blog_image']?>" style="" alt="" class="" width="300">
                              </div>
                              <div class="form-group" style="margin-top: 10px;">
                                 <div class="form-control">
                                    <label>Blog Image(625x448)</label>
                                    <input type="file" value="<?=$val2['blog_image']?>"  id="blog_image" name="blog_image" onchange="loadFile(event)" class="dropify" name="blog_image">
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
                                    <?= htmlspecialchars_decode($val2['blog_description']) ?>
                                </textarea>
                            </div>
                             <!-- ADD AFTER the blog_description form-group div, BEFORE the status form-group -->

<div class="form-group">
    <label>Quick Takeaway Description</label>
    <textarea class="form-control" name="quick_takeaway"rows="3" placeholder="Enter a short quick takeaway for readers"> <?= htmlspecialchars_decode($val2['quick_takeaway']) ?></textarea>
</div>

<div class="form-group">
    <label>Quotation</label>
    <input type="text" class="form-control" placeholder="Enter a notable quote" name="quotation" value="<?=$val2['quotation']?>">
</div>

<div class="form-group">
    <label>Formula Text</label>
    <textarea class="form-control" name="formula_text"  rows="3" placeholder="Enter formula or equation text (e.g. EMI = P × r × (1+r)^n / ((1+r)^n - 1))"><?= htmlspecialchars_decode($val2['formula_text']) ?></textarea>
</div>

                            <div class="form-group">
  <label>Status</label>
  <?php
                                    // Assuming $val2['status'] contains the selected category value
                                    $selectedCategory = $val2['status'];
                                    
                                    // Define an array of categories
                                    $categories = [
                                        "1",
                                        "0",
                                        
                                    ];
                                    
                                    // Output the select element with options
                                    echo '<select class="form-control show-tick" id="blogCategorySelect" required name="status">';
                                    foreach ($categories as $category) {
                                        $isSelected = ($selectedCategory == $category) ? 'selected' : '';
                                        echo '<option value="' . $category . '" ' . $isSelected . '>' . $category . '</option>';
                                    }
                                    echo '</select>';
                                    ?>
</div>
                            <button type="submit" name="submit_form" class="btn btn-block btn-primary   m-t-20">Update</button>
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
<script type="text/javascript">
         ////////IMG UPLOAD////////
         var loadFile = function(event) {
           var reader = new FileReader();
           reader.onload = function(){
             var output = document.getElementById('uploaded_photo');
             $("#uploaded_photo").show();
             output.src = reader.result;
           };
           reader.readAsDataURL(event.target.files[0]);
         };
         ////////IMG UPLOAD////////
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
<script type="text/javascript">
  ////////IMG UPLOAD////////
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('uploaded_photo');
      $("#uploaded_photo").show();
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
////////IMG UPLOAD////////
</script>

     <?php
if(isset($_GET['success'])){
    ?>
    <script type="text/javascript">
        swal({
         title: "Blog Updated",
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
   $status=htmlspecialchars(trim($_POST['status']));
   $quick_takeaway = htmlspecialchars(trim($_POST['quick_takeaway']));
$quotation      = htmlspecialchars(trim($_POST['quotation']));
$formula_text   = htmlspecialchars(trim($_POST['formula_text']));
   $getUser = $anjan->prepare("SELECT user_name FROM client_tbl WHERE auser_id = ?");
$getUser->execute([$auser_id]);
$userData = $getUser->fetch(PDO::FETCH_ASSOC);

$added_by = $userData ? $userData['user_name'] : 'Admin';
    $added_date=date('d/m/Y');
    $added_time=date('H:i:s');


$meta_title=htmlspecialchars(trim($_POST['meta_title']));
     // ✅ Generate slug from meta_title for update
    function generateSlug($meta_title) {
        $slug = strtolower(trim($meta_title));
        $slug = preg_replace('/[^a-z0-9-]/', '-', $slug); // Replace special chars with hyphens
        $slug = preg_replace('/-+/', '-', $slug); // Replace multiple hyphens with single
        $slug = trim($slug, '-'); // Remove leading/trailing hyphens
        return $slug;
    }
    
    // ✅ Ensure unique slug for update - FIXED TABLE NAME
    function getUniqueSlugForUpdate(PDO $pdo, $meta_title, $current_id) {
        $slug = generateSlug($meta_title);
        $baseSlug = $slug;
        $i = 2;

        while (true) {
            $sql = "SELECT COUNT(*) FROM blog_tbl WHERE slug = :slug AND id != :id"; // ✅ Changed to blog_tbl
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':slug' => $slug, ':id' => $current_id]);
            $exists = $stmt->fetchColumn();

            if ($exists == 0) break; // unique
            $slug = $baseSlug . '-' . $i;
            $i++;
        }
        return $slug;
    }
    
    $slug = getUniqueSlugForUpdate($anjan, $meta_title, $id);

    // Blog image
      // ✅ KEEP OLD IMAGE IF NO NEW IMAGE UPLOADED
if (!empty($_FILES["blog_image"]["name"])) {

    $ext1 = pathinfo($_FILES['blog_image']["name"], PATHINFO_EXTENSION);
    $blog_id = $_POST['blog_id']; // use existing blog_id

    $newfilename1 = $blog_id . '.' . $ext1;

    // Avoid duplicate file names
    $serial_number = 1;
    $original_filename = $newfilename1;

    while(file_exists("blog-images/" . $newfilename1)) {
        $newfilename1 = pathinfo($original_filename, PATHINFO_FILENAME) . '_' . $serial_number . '.' . $ext1;
        $serial_number++;
    }

    $blog_image = $newfilename1;

    move_uploaded_file($_FILES["blog_image"]["tmp_name"], "blog-images/" . $blog_image);

} else {
    // ✅ KEEP OLD IMAGE
    $blog_image = $val2['blog_image'];
}
    

   $update = $anjan->prepare("UPDATE blog_tbl SET
    blog_category = :blog_category,
    title = :title,
    blog_heading = :blog_heading,
    slug = :slug,
    meta_description = :meta_description,
    meta_title = :meta_title,
    meta_script = :meta_script,
    keywords = :keywords,
    blog_image = :blog_image,
    quick_takeaway=:quick_takeaway,
    quotation=:quotation,
    formula_text=:formula_text,
    status=:status,
    blog_description = :blog_description,
    added_by=:added_by
WHERE id = :id");

$update->bindParam(':blog_category', $blog_category);
$update->bindParam(':title', $title);
$update->bindParam(':blog_heading', $blog_heading);
$update->bindParam(':slug', $slug);
$update->bindParam(':meta_description', $meta_description);
$update->bindParam(':meta_title', $meta_title);
$update->bindParam(':meta_script', $meta_script);
$update->bindParam(':keywords', $keywords);
$update->bindParam(':blog_image', $blog_image);
$update->bindParam(':blog_description', $blog_description);
$update->bindParam(':quick_takeaway', $quick_takeaway);
$update->bindParam(':quotation',      $quotation);
$update->bindParam(':formula_text',   $formula_text);
 $update->bindparam(':status',$status);
 $update->bindparam(':added_by',$added_by);
$update->bindParam(':id', $_POST['id']);

$update->execute();

    // Check if the update was successful and redirect accordingly
    if ($update) {
        echo '<script>window.location.href="edit-blog.php?updated&id='.$id.'"</script>';
    } else {
        echo '<script>window.location.href="edit-blog.php?updated&id='.$id.'"</script>';
    }
}
?>