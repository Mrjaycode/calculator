<?php
   error_reporting(E_ERROR | E_PARSE);
   include "../config.php";
   
   
   ?>
<!doctype html>
<html lang="en">
   <head>
      <title>ADD Pages | Instavideo</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Instavideo Admin Panel">
      <meta name="author" content="Instavideo">
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
                  <h2>Add insta</h2>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i></a></li>
                     <li class="breadcrumb-item"><a href="all-pages.php">All Pages</a></li>
                     <li class="breadcrumb-item active"><a href="index.php">Back</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="d-flex flex-row-reverse">
                     <div class="page_action">
                        <!-- <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button> -->
                        <a href="all-pages.php"><button type="button" class="btn btn-secondary" data-toggle="modal" >All-pages</button></a>
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
                     <h2>Insta Page Basic Information</h2>
                  </div>
                  <div class="body">
                     <div class="row clearfix">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label>Meta Title</label>
                              <input type="text" id="meta_title" name="meta_title" maxlength="300" placeholder="Enter SEO title (max 20 characters)" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;" required><br>
                              <small style="color:#777;">Example: Best Insta video Downloader | Instavideo</small><br><br>
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
                                       <input type="text" class="form-control" placeholder="Enter Meta Description" name="meta_description">
                                    </div>
                                 </div>
                     <div class="col-sm-12">
                        <div class="form-group">
                           <label for="meta_script" style="font-weight:600;">Meta Script (Head / Footer)</label>
                           <textarea 
                              id="meta_script" 
                              name="meta_script" 
                              class="form-control" 
                              rows="8" 
                              placeholder="Paste your custom script here"
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
                     <div class="col-sm-12">
                        <div class="form-group">
                           <label>Keywords(To Be separated By commas)</label>
                           <input type="text" name="keywords"  class="form-control " placeholder="Keywords(To Be separated By commas)">
                        </div>
                     </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label>Title</label>
                              <input type="text" name="title"  class="form-control " placeholder="Enter title">
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
      <!--area suggestions-->
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
   date_default_timezone_set('Asia/Kolkata');
      if(isset($_POST['submit_form'])){
          // Generate booking ID
          $get_insta_id = $tekofy->prepare("SELECT max(id) FROM insta_tbl");
          $get_insta_id->execute();
          $insta_id = $get_insta_id->fetch(PDO::FETCH_ASSOC);
          if($insta_id['max(id)'] > 0){
              $n = $insta_id['max(id)'] + 1;
              $insta_id = 'INV00' . $n;
          } else {
              $insta_id = 'INV001';
          }
      
          $meta_description=htmlspecialchars(trim($_POST['meta_description']));
       $meta_script = trim($_POST['meta_script']);
      $title = htmlspecialchars(trim($_POST['title']));
          $keywords = htmlspecialchars(trim($_POST['keywords']));
          
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
              $sql = "SELECT COUNT(*) FROM insta_tbl WHERE slug = :slug" . ($id ? " AND id != :id" : "");
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
      
      // Insert into database
          $insert = $tekofy->prepare("INSERT INTO insta_tbl (
      
              insta_id,
              slug,
              meta_description,
           meta_script,
              meta_title,
              title,
              
              keywords,
            
              added_date,
              added_time
          ) VALUES (
           
              :insta_id,
              
              
              :slug,
              :meta_description,
              :meta_script,
              :meta_title,
              :title,
             
              :keywords,
              :added_date,
              :added_time
          )");
      
          // Bind parameters
          $insert->bindParam(':insta_id', $insta_id);
          $insert->bindParam(':slug', $slug);
          $insert->bindparam(':meta_description',$meta_description);
       $insert->bindparam(':meta_script',$meta_script);
          
          $insert->bindparam(':meta_title',$meta_title);
          $insert->bindparam(':title',$title);
          $insert->bindParam(':keywords', $keywords);
          $insert->bindParam(':added_date', $added_date);
          $insert->bindParam(':added_time', $added_time);
          if($insert->execute()){
              echo '<script>window.location.href="?success"</script>';
          } else {
              echo '<script>window.location.href="?failed"</script>';
          }
      }
      ?>
