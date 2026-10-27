<?php
error_reporting(E_ERROR | E_PARSE);
include "../config.php";
?>
<!doctype html>
<html lang="en">
<head>
   <title>ADD USER | Calcspeed</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
   <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
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

 

   <!-- Navbar & Menu -->
   <?php include 'top-bar.php'; ?>
   <?php include 'left-menu.php'; ?>

   <!-- Main Content -->
   <div id="main-content">
      <form method="POST" enctype="multipart/form-data">
         <div class="container-fluid">

            <!-- Header -->
            <div class="block-header">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <h2>Add User</h2>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item"><a href="all-user.php">All Users</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                     </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="d-flex flex-row-reverse">
                        <div class="page_action">
                          <a href="all-user.php"> <button type="button" class="btn btn-primary"><i class="fa fa-download"></i>All Users</button></a>
                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- User Information -->
            <div class="row clearfix">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="header">
                        <h2>User Information</h2>
                     </div>
                     <div class="body">

                        <div class="row clearfix mb-2">
                           <div class="col-lg-4">
                              <h5>Upload User Image</h5>
                              <input class="dropify" id="1_image" name="user_image" type="file" multiple accept="image/*">
                              <img id="preview_1_image" width="50%" height="50%" style="display:none;">
                           </div>
                        </div>

                        <div class="row clearfix">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="text" name="user_name" class="form-control" placeholder="User Name">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="tel" name="mobile" class="form-control" placeholder="Enter Mobile Number">
                              </div>
                           </div>
                        </div>

                        <div class="row clearfix">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <select class="form-control" name="role">
                                    <option value="">Select User Designation</option>
                                    <option value="Admin">Admin</option>
                                    <option value="cto">CTO</option>
                                    <option value="ceo">CEO</option>
                                    <option value="Employee">Employee</option>
                                 </select>
                              </div>
                           </div>
                        </div>

                        <!-- Permissions -->
                        <div class="card mt-4">
                           <div class="header">
                              <h2>Admin Permissions</h2>
                           </div>
                           <div class="body">
                              <div class="row">
                                 <?php
                                 $permissions = [
   "dashboard" => "Dashboard",
   "blogs" => "Blogs",
   "contacts" => "Contacts",
   "city_seo" => "City SEO",
   "pages_seo" => "Pages SEO",
   "manage_users" => "Manage Users"
];
                                 foreach ($permissions as $name => $label) {
                                    echo '
                                       <div class="col-md-6 mb-3">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="' . $name . '" value="1" id="' . $name . '">
                                             <label class="form-check-label" for="' . $name . '">' . $label . '</label>
                                          </div>
                                       </div>';
                                 }
                                 ?>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>

            <!-- Business Location Info -->
            <div class="row clearfix">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="header">
                        <h2>Business Location Info</h2>
                     </div>
                     <div class="body">
                        <div class="row clearfix">

                           <div class="col-sm-6">
                              <div class="mb-3">
                                 <label class="col-form-label">Password <span class="text-danger">*</span></label>
                                 <div class="icon-form-end position-relative">
                                    <span class="form-icon position-absolute" onclick="togglePassword('password', 'icon1')" style="cursor:pointer; right:10px; top:10px;">
                                       <i id="icon1" class="ti ti-eye-off"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label>User Active Status</label>
                                 <select class="form-control" name="status" required>
                                    <option>Select User Status</option>
                                    <option value="1">ON</option>
                                    <option value="0">OFF</option>
                                 </select>
                              </div>
                           </div>

                        </div>

                        <div class="text-center mt-4">
                           <button type="submit" name="submit_form" class="btn btn-primary">Submit</button>
                           <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </form>
   </div>
</div>

<!-- Scripts -->
<script src="../assets/bundles/libscripts.bundle.js"></script>
<script src="../assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/vendor/dropify/js/dropify.min.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../js/pages/forms/dropify.js"></script>
<script src="../assets/js/sweetalert.min.js"></script>

<!-- Image Preview -->
<script>
function previewImage(input, previewId) {
   let file = input.files[0];
   if (file) {
      let reader = new FileReader();
      reader.onload = function(e) {
         let preview = document.getElementById(previewId);
         preview.src = e.target.result;
         preview.style.display = "block";
      };
      reader.readAsDataURL(file);
   }
}
document.getElementById("1_image").addEventListener("change", function() {
   previewImage(this, "preview_1_image");
});

function togglePassword(inputId, iconId) {
   const input = document.getElementById(inputId);
   const icon = document.getElementById(iconId);
   if (input.type === "password") {
      input.type = "text";
      icon.classList.remove("ti-eye-off");
      icon.classList.add("ti-eye");
   } else {
      input.type = "password";
      icon.classList.remove("ti-eye");
      icon.classList.add("ti-eye-off");
   }
}
</script>

<!-- Sweet Alerts -->
<?php if (isset($_GET['success'])) { ?>
<script>
swal({
   title: "Successfully Added",
   text: "User has been added successfully!",
   icon: "success",
});
</script>
<?php } ?>

<?php if (isset($_GET['failed'])) { ?>
<script>
swal({
   title: "Not Submitted",
   text: "Please check your input or try again!",
   icon: "error",
});
</script>
<?php } ?>
</body>
</html>

<?php
// ------------------- PHP FORM HANDLER -------------------
if (isset($_POST['submit_form'])) {

   // Generate auser_id
   $get_auser_id = $anjan->prepare("SELECT MAX(id) FROM client_tbl");
   $get_auser_id->execute();
   $auser_id_row = $get_auser_id->fetch(PDO::FETCH_ASSOC);
   if ($auser_id_row['MAX(id)'] > 0) {
      $n = $auser_id_row['MAX(id)'] + 1;
      $auser_id = 'AUSR00' . $n;
   } else {
      $auser_id = 'AUSR001';
   }

   // Upload image
   function uploadDocument($fileInputName, $upload_dir = "documents-uploads/user-images/", $prefix = 'doc') {
      if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]["error"] == UPLOAD_ERR_OK) {
         if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
         }

         $filename = $_FILES[$fileInputName]["name"];
         $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
         $clean_name = preg_replace("/[^a-zA-Z0-9]/", "_", pathinfo($filename, PATHINFO_FILENAME));
         $random_number = mt_rand(100000, 999999);
         $unique_name = $prefix . '_' . $clean_name . '_' . $random_number . '.' . $extension;
         $newfilename = $upload_dir . $unique_name;

         if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $newfilename)) {
            return $unique_name;
         } else {
            die("Error moving uploaded file: $fileInputName");
         }
      }
      return "";
   }

   $user_image = uploadDocument("user_image", "documents-uploads/user-images/", "");

   // Fields
   $user_name = htmlspecialchars(trim($_POST['user_name']));
   $mobile = htmlspecialchars(trim($_POST['mobile']));
   $email = htmlspecialchars(trim($_POST['email']));
   $role = htmlspecialchars(trim($_POST['role']));

   $dashboard = isset($_POST['dashboard']) ? 1 : 0;
$blogs = isset($_POST['blogs']) ? 1 : 0;
$contacts = isset($_POST['contacts']) ? 1 : 0;
$city_seo = isset($_POST['city_seo']) ? 1 : 0;
$pages_seo = isset($_POST['pages_seo']) ? 1 : 0;
$manage_users = isset($_POST['manage_users']) ? 1 : 0;

   $password_input = trim($_POST['password']);
   $password = password_hash($password_input, PASSWORD_DEFAULT);

   $status = htmlspecialchars(trim($_POST['status']));
   $added_by = htmlspecialchars(trim($_POST['added_by']));
   $added_date = date('d/m/Y');
   $added_time = date('H:i:s');

   // Insert query
   $insert = $anjan->prepare("
INSERT INTO client_tbl (
    auser_id,
    user_image,
    user_name,
    mobile,
    email,
    role,
    dashboard,
    blogs,
    contacts,
    city_seo,
    pages_seo,
    manage_users,
    password,
    status,
    added_by,
    added_date,
    added_time
) VALUES (
    :auser_id,
    :user_image,
    :user_name,
    :mobile,
    :email,
    :role,
    :dashboard,
    :blogs,
    :contacts,
    :city_seo,
    :pages_seo,
    :manage_users,
    :password,
    :status,
    :added_by,
    :added_date,
    :added_time
)");

   $insert->bindParam(':auser_id', $auser_id);
   $insert->bindParam(':user_image', $user_image);
   $insert->bindParam(':user_name', $user_name);
   $insert->bindParam(':mobile', $mobile);
   $insert->bindParam(':email', $email);
   $insert->bindParam(':role', $role);
   $insert->bindParam(':dashboard', $dashboard);
$insert->bindParam(':dashboard', $dashboard);
$insert->bindParam(':blogs', $blogs);
$insert->bindParam(':contacts', $contacts);
$insert->bindParam(':city_seo', $city_seo);
$insert->bindParam(':pages_seo', $pages_seo);
$insert->bindParam(':manage_users', $manage_users);
   $insert->bindParam(':password', $password);
   $insert->bindParam(':status', $status);
   $insert->bindParam(':added_by', $added_by);
   $insert->bindParam(':added_date', $added_date);
   $insert->bindParam(':added_time', $added_time);

   if ($insert->execute()) {
      echo '<script>window.location.href="?success"</script>';
   } else {
      echo '<script>window.location.href="?failed"</script>';
   }
}
?>
