<?php
// Turn off error reporting
error_reporting(0);
ini_set('display_errors', 0);

   include '../config.php';
   $id=htmlspecialchars($_GET['id']);
   $fetch=$tekofy->prepare("SELECT * FROM `cities_tbl` WHERE id=:id");
   $fetch->bindparam(':id',$id);
   $fetch->execute();
   $val2=$fetch->fetch(PDO::FETCH_ASSOC);
   ?>
<!doctype html>
<html lang="en">
   <head>
      <title>ADD cities | Builtosm</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Builtosm Admin Panel">
      <meta name="author" content="Builtosm">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <!-- VENDOR CSS -->
      <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
      <script src="https://kit.fontawesome.com/02d5a99266.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">
      <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
      <!-- MAIN CSS -->
      <link rel="stylesheet" href="../assets/css/main.css">
   </head>
   <body data-theme="light" class="font-nunito">
      <div id="wrapper" class="theme-cyan">
         <!-- Page Loader -->
         <div class="page-loader-wrapper">
            <div class="loader">
               <div class="m-t-30"><img src="https://wrraptheme.com/templates/iconic/dist/assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
               <p>Please wait...</p>
            </div>
         </div>
         <!-- Top navbar div start -->
         <?php include'top-bar.php';?>
         <!-- main left menu -->
         <?php include'left-menu.php';?>
         <!-- rightbar icon div -->
         <!-- mani page content body part -->
         <div id="main-content">
            <form method="POST" enctype="multipart/form-data">
               <div class="container-fluid">
                  <div class="block-header">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <h2>Add cities</h2>
                           <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i></a></li>
                              <li class="breadcrumb-item"><a href="all-city.php">All cities</a></li>
                              <li class="breadcrumb-item active"><a href="index.php">Back</a></li>
                           </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="d-flex flex-row-reverse">
                              <div class="page_action">
                                 <!-- <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button> -->
                                 <a href="all-city.php"><button type="button" class="btn btn-secondary" data-toggle="modal" >All cities</button></a>
                              </div>
                              <div class="p-2 d-flex">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row clearfix">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                           <div class="header">
                              <h2>cities Basic Information</h2>
                           </div>
                           
                  <div class="body">
                     <div class="row clearfix">
                     <div class="col-sm-12">
                        <div class="form-group">
                           <label>Meta Title</label>
                           <input type="text" id="meta_title" name="meta_title"value="<?=$val2['meta_title']?>" maxlength="200" placeholder="Enter SEO title (max 20 characters)" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;" required><br>
                           <small style="color:#777;">Example: nstagram Video Downloader Hyderabad</small><br><br>
                           <script>
                              function countChars() {
                                const input = document.getElementById('meta_title');
                                const count = input.value.length;
                                document.getElementById('charCount').textContent = `${count} / 20 characters`;
                              }
                           </script>
                        </div>
                     </div>
                     <div class="col-sm-12">
                                    <div class="form-group">
                                       <label>Meta Description</label>
                                       <input type="text" class="form-control" placeholder="Enter Meta Description" name="meta_description" value="<?=$val2['meta_description']?>">
                                    </div>
                                 </div>
                     <div class="col-lg-12">
                        <div class="form-group">
                            
                           <label for="meta_script" style="font-weight:600;">Meta Script</label><br>
                           <textarea 
                              id="meta_script" 
                              name="meta_script" 
                              class="form-control" 
                              rows="8" 
                              cols="80"
                              placeholder="Add Custom Meta Script (Head/Footer): Paste your meta script here"
                              style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-family:monospace; resize:vertical;"
                              ><?= isset($val2['meta_script']) ? htmlspecialchars_decode($val2['meta_script'], ENT_QUOTES) : '' ?></textarea><br><br>
                        </div>
                     </div>

                     <div class="col-sm-12">
                                    <div class="form-group">
                                       <label>Keywords(To Be separated By commas)</label>
                                       <input type="text" name="keywords" value="<?=$val2['keywords']?>"  class="form-control " placeholder="Keywords(To Be separated By commas)">
                                    </div>
                                 </div>
                  </div>
                   
               
                  <div class="row clearfix">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                           <div class="header">
                              <h2> Location Info</h2>
                           </div>
                           <div class="body">



  <div class="col-sm-6">
    <div class="form-group">
      <label for="city">Select Country / State/ District/ City</label>
      <input type="text" name="city"  class="form-control" value="<?=$val2['city']?>"  placeholder="Enter City">
    </div>
  </div>
</div>




<style>
.area-suggestions-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #ddd;
    border-top: none;
    border-radius: 0 0 5px 5px;
    max-height: 250px;
    overflow-y: auto;
    z-index: 1000;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    display: none;
}

.suggestion-item {
    padding: 10px 15px;
    cursor: pointer;
    border-bottom: 1px solid #f0f0f0;
    transition: background-color 0.2s;
    font-size: 14px;
}

.suggestion-item:hover, .suggestion-item.selected {
    background-color: #f8f9fa;
}

.suggestion-item:last-child {
    border-bottom: none;
}

.suggestion-item .suggestion-details {
    font-size: 12px;
    color: #666;
    margin-top: 2px;
}

.area-search-container {
    position: relative;
}

.loading-spinner {
    text-align: center;
    padding: 10px;
    color: #666;
}

.spinner {
    border: 2px solid #f3f3f3;
    border-top: 2px solid #007bff;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
    margin: 0 auto 5px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>


                  
                           </div>
                        </div>
                     </div>
                  </div>
               
                                 <div class="col-sm-12">
                                    <button type="submit" name="submit_form" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                 </div>
                              </div>
                           </form>
                           </div>
                        </div>
                    
      <!-- Javascript -->
      <script src="../assets/bundles/libscripts.bundle.js"></script>    
      <script src="../assets/bundles/vendorscripts.bundle.js"></script>
      <script src="../assets/vendor/dropify/js/dropify.min.js"></script>
      <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js --> 
      <!-- page js file -->
      <script src="../assets/bundles/mainscripts.bundle.js"></script>
      <script src="../../js/pages/forms/dropify.js"></script>
      

      <script src="../assets/js/sweetalert.min.js"></script>
      <?php
         if(isset($_GET['success'])){
             ?>
      <script type="text/javascript">
         swal({
          title: "Successfully Added",
          text: "You clicked the button!",
          icon: "success",
          });
             
      </script>
      <?php
         }
         ?>
      <?php
         if(isset($_GET['failed'])){
             ?>
      <script type="text/javascript">
         swal({
          title: "Not Submited",
          text: "Please Check or Sign up",
          icon: "error",
          });
      </script>
      <?php 
         }
         ?>
   </body>
</html>
<?php
   if(isset($_POST['submit_form'])){
     
   
       $meta_description=htmlspecialchars(trim($_POST['meta_description']));
       $meta_script = trim($_POST['meta_script']);
       $keywords = htmlspecialchars(trim($_POST['keywords']));
       
       $city = htmlspecialchars(trim($_POST['city']));
       $added_date = date('d/m/Y');
       $added_time = date('H:i:s');
   
 
   // slug code
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
           $sql = "SELECT COUNT(*) FROM cities_tbl WHERE slug = :slug" . ($id ? " AND id != :id" : "");
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
   $slug  = getUniqueSlug($tekofy, $meta_title);    
   
  $update=$tekofy->prepare("UPDATE cities_tbl SET

meta_title=:meta_title,
slug=:slug,
meta_description=:meta_description,
meta_script=:meta_script,
keywords=:keywords,

city=:city,
added_date=:added_date,
added_time=:added_time

WHERE id=:id");

$update->bindParam(':meta_title',$meta_title);
$update->bindParam(':slug',$slug);
$update->bindParam(':meta_description',$meta_description);
$update->bindParam(':meta_script',$meta_script);
$update->bindParam(':keywords',$keywords);
$update->bindParam(':city',$city);
$update->bindParam(':added_date',$added_date);
$update->bindParam(':added_time',$added_time);
 $update->bindParam(':id', $id);
   
   // Execute the query
       if ($update->execute()) {
           echo '<script>window.location.href="?success&id='.$id.'"</script>';
       } else {
           echo '<script>window.location.href="?failed&id='.$id.'"</script>';
       }
   }
   ?>

