<!doctype html>
<html lang="en">
   <head>
      <title>REGISTERED USERS | SEARC INTERIOR DESIGNER</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
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
         <!-- rightbar icon div -->
         <div class="right_icon_bar">
         </div>
         <!-- mani page content body part -->
         <div id="main-content">
            <div class="container-fluid">
               <div class="block-header">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>User</h2>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item">
                              <a href=index.php>Dashboard</a>
                           </li>
                           <li class="breadcrumb-item active">Users</li>
                        </ul>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                           <div class="page_action">
                              <a href="add-blog.php">
                              <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Blog</button>
                              </a>
                              <!-- <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
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
                           <h2>Blogs</h2>
                        </div>
                        <div class="body">
                           <div class="table-responsive">
                              <table class="table table-hover js-basic-example dataTable table-custom">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>User ID</th>
                                       <th>User Name</th>
                                       <th>User Email</th>
                                       <th> Date</th>
                                       <th> Time</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       $fetch = $anjan->prepare("SELECT * FROM user_tbl");
                                       $fetch->execute();
                                       
                                       if ($fetch->rowCount() == 0) {
                                           echo '<tr><td colspan="9"><center> ---- No data found ---- </center></td></tr>';
                                       } else {
                                           $c = 1;
                                           foreach ($fetch->fetchAll(PDO::FETCH_ASSOC) as $key) {
                                               if ($key['status'] == '1') {
                                                   $status = '
                                                   <label class="toggle">
                                                       <input onchange="status_changed(\'' . $key['id'] . '\', 1, \'user_tbl\')" class="toggle-checkbox" type="checkbox" checked>
                                                       <div class="toggle-switch"></div>
                                                   </label>';
                                               } else if ($key['status'] == 0) {
                                                   $status = '
                                                   <label class="toggle">
                                                       <input onchange="status_changed(\'' . $key['id'] . '\', 0, \'user_tbl\')" class="toggle-checkbox" type="checkbox">
                                                       <div class="toggle-switch"></div>
                                                   </label>';
                                               }
                                              // Formatting the added_time to '9:30pm'
                                               $formattedTime = date('g:ia', strtotime($key['added_time']));
                                       
                                               echo '
                                               <tr>
                                                   <td>' . $c . '</td>
                                                   <td>' . $key['user_id'] . '</td>
                                                   <td>' . $key['first_name'] . ' ' . $key['last_name'] . '</td>
                                                   <td>' . $key['email'] . '</td>
                                                   <td>' . $key['added_date'] . '</td>
                                                   <td>' . $formattedTime . '</td>
                                                   
                                               </tr>
                                               ';
                                               $c++;
                                           }
                                       }
                                       ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Default Size -->
         <div class="modal fade" id="EditRoom" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h6 class="title" id="defaultModalLabel">Edit Room Alloted</h6>
                  </div>
                  <div class="modal-body">
                     <div class="row clearfix">
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">                                    
                              <input type="text" class="form-control" placeholder="Room No." value="A-102">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">                                   
                              <input type="text" class="form-control" placeholder="Patient Name" value="Juan Freeman">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">                                    
                              <input type="text" class="form-control" placeholder="Room type" value="Delux">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Sex" value="Male">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">
                              <input data-provide="datepicker" data-date-autoclose="true" class="form-control" value="06/11/2020">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">
                              <input data-provide="datepicker" data-date-autoclose="true" class="form-control" value="06/18/2020">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary">Save</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
      <!-- page js file -->
      <script src="../assets/bundles/mainscripts.bundle.js"></script>
      <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
      <script type="text/javascript" src="blog-status.js"></script>
      <script src="sweetalert.min.js"></script>
      <?php
         if(isset($_GET['show_delete_modal'])){
             ?>
      <script type="text/javascript">
         $(document).ready(function(){
             $('#deleteModel').modal('show');
             $('#deleteModel').modal('show');
         });
      </script>
      <?php
         }
         if(isset($_GET['show_delete_modal'])){
             $id=htmlspecialchars(trim($_GET['id']));
             ?>
      <div id="deleteModel" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="mt-2 text-center">
                     <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ? </h4>
                        <h5 style="color:#303030 !important">Are you sure you want to remove this item ? Data related to this will be deleted as well. </h5>
                     </div>
                  </div>
                  <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                     <button data-dismiss="modal" class="btn btn-b" type="button" style="background:#303030;border-color:#303030">Close</button>
                     <a href="?delete&id=<?=$id?>"  class="btn w-sm btn-danger" id="remove-fileitem">Yes, Delete It!</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
         }
           if(isset($_GET['delete'])){
           $id=htmlspecialchars(trim($_GET['id']));
           $delete_head=$anjan->prepare("DELETE FROM blog_tbl WHERE id=:id ");
           $delete_head->bindparam(':id',$id);
           $delete_head->execute();
           if($delete_head){
               echo '<script>window.location.href="?success"</script>';
           }else{
              echo '<script>window.location.href="?failed"</script>';
           }
         }
         ?>
      <?php
         if(isset($_GET['success'])){
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
         if(isset($_GET['failed'])){
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
   </body>
</html>
