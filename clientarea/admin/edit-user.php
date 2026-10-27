<?php
// Turn off error reporting
error_reporting(0);
ini_set('display_errors', 0);

include '../config.php';
$id = htmlspecialchars($_GET['id']);
$fetch = $anjan->prepare("SELECT * FROM `client_tbl` WHERE id=:id");
$fetch->bindparam(':id', $id);
$fetch->execute();
$val2 = $fetch->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
   <title>EDIT USER | SEARCH INTERIOR DESIGNER</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/02d5a99266.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">
   <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
   <link rel="stylesheet" href="../assets/css/main.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
   <style>
      /* 🔹 Position the icon inside the input field */
.password-wrapper {
  position: relative;
}

.password-wrapper input {
  padding-right: 40px; /* space for the icon */
}

.password-wrapper .toggle-icon {
  position: absolute;
  top: 50%;
  right: 12px;
  transform: translateY(-50%);
  cursor: pointer;
  color: #888;
}

.password-wrapper .toggle-icon:hover {
  color: #000;
}
   </style>

</head>
<body data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-cyan">
   <?php include'top-bar.php';?>
   <?php include'left-menu.php';?>
   <div id="main-content">
      <form method="POST" enctype="multipart/form-data">
         <div class="container-fluid">
            <div class="block-header">
               <div class="row">
                  <div class="col-lg-6">
                     <h2>Edit User</h2>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item"><a href="all-user.php">All user</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="row clearfix">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="header"><h2>User Information</h2></div>
                     <div class="body">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($val2['id']) ?>">
                        <input type="hidden" name="auser_id" value="<?= htmlspecialchars($val2['auser_id']) ?>">

                        <input id="1_image" type="file" name="user_image" accept="image/*" class="form-control mb-3">
                        <input type="hidden" name="existing_image_1" value="<?= htmlspecialchars($val2['user_image']) ?>">
                        <img id="preview_1_image" 
                             src="<?= $val2['user_image'] ? 'documents-uploads/user-images/' . htmlspecialchars($val2['user_image']) : 'https://via.placeholder.com/100x100?text=No+Image' ?>" 
                             alt="Preview" style="max-width: 100px; margin-top: 10px;">

                        <div class="row clearfix mt-3">
                           <div class="col-sm-6">
                              <input type="text" name="user_name" value="<?= $val2['user_name'] ?>" class="form-control" placeholder="User Name">
                           </div>
                           <div class="col-sm-6">
                              <input type="tel" name="mobile" value="<?= $val2['mobile'] ?>" class="form-control" placeholder="Mobile Number">
                           </div>
                        </div>

                        <div class="row clearfix mt-3">
                           <div class="col-sm-6">
                              <input type="email" name="email" value="<?= $val2['email'] ?>" class="form-control" placeholder="Email">
                           </div>
                           <div class="col-sm-6">
                              <?php
                              $selectedCategory = $val2['role'];
                              $categories = ["Select user role", "Admin", "CTO", "CEO", "Employee"];
                              echo '<select class="form-control" name="role">';
                              foreach ($categories as $role) {
                                 $selected = ($selectedCategory == $role) ? 'selected' : '';
                                 echo "<option value='$role' $selected>$role</option>";
                              }
                              echo '</select>';
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Permissions Section -->
            <div class="row clearfix">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="header"><h2>Edit Dashboard User Permissions</h2></div>
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
foreach ($permissions as $key => $label) {
                              $checked = ($val2[$key] == 1) ? 'checked' : '';
                              echo "
                              <div class='col-md-6 mb-3'>
                                 <div class='form-check'>
                                    <input class='form-check-input' type='checkbox' name='$key' value='1' id='$key' $checked>
                                    <label class='form-check-label' for='$key'>$label</label>
                                 </div>
                              </div>";
                           }
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Password + Status -->
            <div class="row clearfix">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="header"><h2>Business Location Info</h2></div>
                     <div class="body">
                        <div class="row clearfix">
               <div class="col-sm-6">
  <label class="col-form-label">Password</label>
  <div class="password-wrapper">
    <input 
      type="password" 
      class="form-control" 
      id="password" 
      name="password" 
      value="" 
      placeholder="Leave blank to keep current password">
    <i id="icon1" class="ti ti-eye-off toggle-icon" onclick="togglePassword('password', 'icon1')"></i>
  </div>
</div>

                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Ads Status</label>
                                 <?php
                                 $selectedCategory = $val2['status'];
                                 $categories = ["Select Ads Status", "1", "0"];
                                 echo '<select class="form-control" name="status">';
                                 foreach ($categories as $category) {
                                    $selected = ($selectedCategory == $category) ? 'selected' : '';
                                    echo "<option value='$category' $selected>$category</option>";
                                 }
                                 echo '</select>';
                                 ?>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-12 mt-3">
                           <button type="submit" name="submit_form" class="btn btn-primary">Update</button>
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

<script src="../assets/bundles/libscripts.bundle.js"></script>
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<script>
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
<!-- Alert Message -->
<script src="../assets/js/sweetalert.min.js"></script>
<?php
   if(isset($_GET['success'])){
       ?>
<script type="text/javascript">
   swal({
    title: "Successfully Updated",
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
if (isset($_POST['submit_form'])) {
    $id = (int) $_POST['id'];
    $user_name = trim($_POST['user_name']);
    $email = trim($_POST['email']);
    $role = trim($_POST['role']);
    $mobile = trim($_POST['mobile']);
    $status = trim($_POST['status']);
    $password = trim($_POST['password']);
$dashboard = isset($_POST['dashboard']) ? 1 : 0;
$blogs = isset($_POST['blogs']) ? 1 : 0;
$contacts = isset($_POST['contacts']) ? 1 : 0;
$city_seo = isset($_POST['city_seo']) ? 1 : 0;
$pages_seo = isset($_POST['pages_seo']) ? 1 : 0;
$manage_users = isset($_POST['manage_users']) ? 1 : 0;
    $added_date = date('d/m/Y');
    $added_time = date('H:i:s');

    // Handle image upload
    function handleImageUpload($fieldName, $existingName, $uploadDir = "documents-uploads/user-images/") {
        if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES[$fieldName]['tmp_name'];
            $fileName = $_FILES[$fieldName]['name'];
            $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $allowed = ['jpg','jpeg','png','gif','webp'];
            if (!in_array($ext, $allowed)) return $existingName;

            if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

            $newFilename = 'user_' . uniqid() . '.' . $ext;
            $destination = $uploadDir . $newFilename;

            if (!empty($existingName) && file_exists($uploadDir . $existingName)) {
                unlink($uploadDir . $existingName);
            }

            if (move_uploaded_file($tmpName, $destination)) {
                return $newFilename;
            }
        }
        return $existingName;
    }

    $user_image = handleImageUpload("user_image", $_POST['existing_image_1'] ?? '');

    // ✅ Fetch existing password FIRST
    $stmt = $anjan->prepare("SELECT password FROM client_tbl WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $existingData = $stmt->fetch(PDO::FETCH_ASSOC);
    $existingPassword = $existingData ? $existingData['password'] : null;

    // ✅ CORRECT PASSWORD HANDLING:
    // If password field is NOT empty, use the new password
    // If password field IS empty, keep the existing password
    if (!empty($password)) {
        // User entered a new password - hash it
        $passwordToSave = password_hash($password, PASSWORD_DEFAULT);
    } else {
        // User left password empty - keep existing password
        $passwordToSave = $existingPassword;
    }

    // ✅ Update query
    $update = $anjan->prepare("UPDATE client_tbl SET
    user_name = :user_name,
    user_image = :user_image,
    mobile = :mobile,
    email = :email,
    role = :role,
    dashboard = :dashboard,
    blogs = :blogs,
    contacts = :contacts,
    city_seo = :city_seo,
    pages_seo = :pages_seo,
    manage_users = :manage_users,
    password = :password,
    status = :status,
    added_date = :added_date,
    added_time = :added_time

WHERE id = :id");

    $update->bindParam(':user_name', $user_name);
    $update->bindParam(':user_image', $user_image);
    $update->bindParam(':mobile', $mobile);
    $update->bindParam(':email', $email);
    $update->bindParam(':role', $role);
$update->bindParam(':dashboard', $dashboard);
$update->bindParam(':blogs', $blogs);
$update->bindParam(':contacts', $contacts);
$update->bindParam(':city_seo', $city_seo);
$update->bindParam(':pages_seo', $pages_seo);
$update->bindParam(':manage_users', $manage_users);
    $update->bindParam(':password', $passwordToSave);
    $update->bindParam(':status', $status);
    $update->bindParam(':added_date', $added_date);
    $update->bindParam(':added_time', $added_time);
    $update->bindParam(':id', $id, PDO::PARAM_INT);

    if ($update->execute()) {
        echo '<script>window.location.href="?success&id='.$id.'"</script>';
    } else {
        // Add error info for debugging
        $errorInfo = $update->errorInfo();
        error_log("Database error: " . print_r($errorInfo, true));
        echo '<script>window.location.href="?failed&id='.$id.'"</script>';
    }
}
?>