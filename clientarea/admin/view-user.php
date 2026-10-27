<?php
error_reporting(E_ERROR | E_PARSE);
include 'clientarea/config.php';
include '../config.php';
$id = htmlspecialchars($_GET['id']);
$fetch = $anjan->prepare("SELECT * FROM client_tbl WHERE id=:id");
$fetch->bindparam(':id', $id);
$fetch->execute();
$val2 = $fetch->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
  <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>VIEW USER | Calcspeed</title>
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/02d5a99266.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="../assets/css/main.css">
  <style>
    .h5, h5 {
  font-size: 2rem;

}
    .business-image {
      max-width: 200px;
      max-height: 200px;
      object-fit: cover;
    }
    .gallery-image {
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin: 5px;
      border-radius: 5px;
    }
    .social-icon {
      font-size: 24px;
      margin-right: 10px;
    }
    .working-hours {
      background-color: #f8f9fa;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Top navbar div start -->
    <?php include 'top-bar.php'; ?>
    <!-- main left menu -->
    <?php include 'left-menu.php'; ?>

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>View AdminUser Details</h2>
                        <ul class="breadcrumb">                           
                            <li class="breadcrumb-item">Manage User</li>
                            <li class="breadcrumb-item active">View User</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="all-user.php"><button type="button" class="btn btn-primary">All Users</button></a>
                                <a href="index.php" class="btn btn-secondary" title="new post">Cancel</a>
                            </div>
                            <div class="p-2 d-flex"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="card shadow">
                    <!-- Company Images -->
                        <div class="row mb-4">
                            <!-- Logo Image -->
                            <div class="col-md-6 text-center">
                                <h6>User Image</h6>
                                <?php if (!empty($val2['user_image'])): ?>
                                    <img src="documents-uploads/user-images/<?= htmlspecialchars($val2['user_image']) ?>" class="business-image img-thumbnail" alt="Company Logo">
                                <?php else: ?>
                                    <div class="text-muted">No Image uploaded</div>
                                <?php endif; ?>
                            </div>
                        </div>
                            
                    <div class="card-body">
                        
                        <!-- Business ID and Status -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><strong>Auser ID:</strong> <?= htmlspecialchars($val2['auser_id']) ?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Status:</strong> 
                                    <span class="badge badge-<?= $val2['status'] == '1' ? 'success' : 'danger' ?>">
                                        <?= $val2['status'] == '1' ? 'Active' : 'Inactive' ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    <div class="row">
            
                <div class="col-md-6 mb-3">
                    <span class="label-title">Username:</span>
                    <?= $val2['user_name'] ?? 'N/A' ?>
                </div>
                <div class="col-md-6 mb-3">
                    <span class="label-title">Email:</span>
                    <?= $val2['email'] ?? 'N/A' ?>
                </div>
                <div class="col-md-6 mb-3">
                    <span class="label-title">Role:</span>
                    <?= $val2['role'] ?? 'N/A' ?>
                </div>
                <div class="col-md-6 mb-3">
                    <span class="label-title">Mobile:</span>
                    <?= $val2['mobile'] ?? 'N/A' ?>
                </div>
                <div class="col-md-6 mb-3">
                    <span class="label-title">Status:</span>
                    <?= $val2['status'] ?? 'N/A' ?>
                </div>
                <div class="col-md-6 mb-3">
                    <span class="label-title">Added Date:</span>
                    <?= $val2['added_date'] ?? 'N/A' ?>
                </div>
                <div class="col-md-6 mb-3">
                    <span class="label-title">Added Time:</span>
                    <?= $val2['added_time'] ?? 'N/A' ?>
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
    <script src="../assets/bundles/mainscripts.bundle.js"></script>

</body>
</html>