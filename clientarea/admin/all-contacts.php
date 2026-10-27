<!doctype html>
<html lang="en">
<head>
<title>ALL Contacts | Calcspeed</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/02d5a99266.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/css/main.css">
<style type="text/css">
    .btn-b{
        color: white !important;
        margin-right: 10px;
    }
</style>
</head>
<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="" width="48" height="48" alt="Calcspeed"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
    <?php include'top-bar.php';?>

    <!-- main left menu -->
    <?php include'left-menu.php';?>

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>user Booking</h2>
                        <ul class="breadcrumb">
                                                       
                            <li class="breadcrumb-item">All user</li>
                            <li class="breadcrumb-item active">
                                <a href="manage-user.php">Add user</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                               <a href="manage-user.php">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add user</button>
                               </a>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>user</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead>
    <tr>
    <th>ID</th>
    <th>Contact ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Business Name</th>
    <th>Inquiry Type</th>
    <th>Quotation</th>
    <th>Created At</th>
    <th class="text-end">Action</th>
</tr>



</thead>
                                    <tbody>
                                        <?php
$fetch = $anjan->prepare("SELECT * FROM contact_us ORDER BY id DESC");
$fetch->execute();

if ($fetch->rowCount() == 0) {
    echo '<tr><td colspan="9"><center> ---- No data found ---- </center></td></tr>';
} else {

    $c = 1;

    foreach ($fetch->fetchAll(PDO::FETCH_ASSOC) as $key) {

        echo '
        <tr>
    <td>'.$c.'</td>
    <td>'.$key['contact_id'].'</td>
    <td>'.$key['first_name'].' '.$key['last_name'].'</td>
    <td>'.$key['email'].'</td>
    <td>'.$key['mobile'].'</td>
    <td>'.$key['business_name'].'</td>
    <td>'.$key['inquiry_type'].'</td>
    <td>'.substr(strip_tags($key['quotation']),0,50).'</td>
    <td>'.$key['added_date'].', '.$key['added_time'].'</td>
    <td>
        <div class="d-flex">
            <a href="view-contact.php?id='.$key['id'].'">
                <button type="button" class="btn btn-sm btn-primary">
                    <i class="fa fa-eye"></i>
                </button>
            </a>

            <a href="?id='.$key['id'].'&show_delete_modal">
                <button type="button" class="btn btn-sm btn-danger ml-2">
                    <i class="fa fa-trash"></i>
                </button>
            </a>
        </div>
    </td>
</tr>
        ';

        $c++;
    }
}
?>
                                        <style>
                                       .switch {
                                       position: relative;
                                       display: inline-block;
                                       width: 46px;
                                       height: 24px;
                                       }
                                       .switch input {
                                       opacity: 0;
                                       width: 0;
                                       height: 0;
                                       }
                                       .slider {
                                       position: absolute;
                                       cursor: pointer;
                                       background-color: #ccc;
                                       top: 0; left: 0; right: 0; bottom: 0;
                                       transition: .4s;
                                       border-radius: 24px;
                                       }
                                       .slider:before {
                                       position: absolute;
                                       content: "";
                                       height: 18px;
                                       width: 18px;
                                       left: 3px;
                                       bottom: 3px;
                                       background-color: white;
                                       transition: .4s;
                                       border-radius: 50%;
                                       }
                                       input:checked + .slider {
                                       background-color: #28a745;
                                       }
                                       input:checked + .slider:before {
                                       transform: translateX(22px);
                                       }
                                    </style>


                                    </tbody>
                                </table>
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

<script src="../assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="blog-status.js"></script>
<!-- page js file -->
<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/js/pages/tables/jquery-datatable.js"></script>
<script type="text/javascript" src="blog-status.js"></script>
<script src="sweetalert.min.js"></script>
      <?php
         if (isset($_GET['show_delete_modal'])) {
         ?>
      <script type="text/javascript">
         document.addEventListener("DOMContentLoaded", function() {
             var modal = document.getElementById('deleteModel');
             if (modal) {
                 var modalInstance = new bootstrap.Modal(modal);
                 modalInstance.show();
             }
         });
      </script>
      <?php
         }
         if (isset($_GET['show_delete_modal'])) {
             $id = htmlspecialchars(trim($_GET['id']));
         ?>
      <div id="deleteModel" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="mt-2 text-center">
                     <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure?</h4>
                        <h5 style="color:#303030 !important">
                           Are you sure you want to remove this item? Data related to this will be deleted as well.
                        </h5>
                     </div>
                  </div>
                  <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                     <!-- ✅ Fixed Close button -->
                     <button type="button" class="btn btn-b" style="background:#303030;border-color:#303030" data-bs-dismiss="modal">Cancel</button>
                     <!-- ✅ Delete action -->
                     <a href="?delete&id=<?= $id ?>" class="btn w-sm btn-danger">Yes, Delete It!</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
         }
         if (isset($_GET['delete'])) {
             $id = htmlspecialchars(trim($_GET['id']));
             $delete_head = $anjan->prepare("DELETE FROM client_tbl WHERE id=:id ");
             $delete_head->bindparam(':id', $id);
             $delete_head->execute();
             if ($delete_head) {
                 echo '<script>window.location.href="?success"</script>';
             } else {
                 echo '<script>window.location.href="?failed"</script>';
             }
         }
         ?>
      <?php
         if (isset($_GET['success'])) {
         ?>
      <script type="text/javascript">
         swal({
             title: "Deleted Successfully!",
             text: "You clicked the button!",
             icon: "success",
         });
      </script>
      <?php
         }
         ?>
      <?php
         if (isset($_GET['failed'])) {
         ?>
      <script type="text/javascript">
         swal({
             title: "Failed!",
             text: "You clicked the button!",
             icon: "error",
         });
      </script>
      <?php
         }
         ?>
      <!-- end of delete logic -->
      <!-- jQuery and AJAX  toggle button-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         $(document).on('change', '.status-toggle', function () {
             var checkbox = $(this);
             var id = checkbox.data('id');
             var newStatus = checkbox.is(':checked') ? 1 : 0;
         
             $.ajax({
                 url: 'ajax-toggle-astatus.php',
                 method: 'POST',
                 data: { id: id, status: newStatus },
                 success: function (response) {
                     let trimmed = response.trim();
         
                     if (trimmed === 'success') {
                         checkbox.closest('td').find('.status-label').text(newStatus === 1 ? 'ON' : 'OFF');
                         Swal.fire({
                             icon: 'success',
                             title: 'Updated!',
                             text: 'Status has been changed to ' + (newStatus === 1 ? 'ON' : 'OFF'),
                             timer: 2000,
                             showConfirmButton: false
                         });
                     } else {
                         checkbox.prop('checked', !checkbox.is(':checked')); // revert
                         Swal.fire({
                             icon: 'error',
                             title: 'Oops...',
                             text: 'Failed to update status: ' + trimmed
                         });
                     }
                 },
                 error: function (xhr, status, error) {
                     checkbox.prop('checked', !checkbox.is(':checked'));
                     Swal.fire({
                         icon: 'error',
                         title: 'AJAX Error',
                         text: error
                     });
                 }
             });
         });
      </script>
      <!-- end of toggle button on off -->
   </body>
</html>
