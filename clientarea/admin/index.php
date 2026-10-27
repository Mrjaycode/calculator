<?php
   include '../config.php';
   
   // TOTAL CONTACTS
   $contactCount = $anjan->query("SELECT COUNT(*) FROM contact_us")->fetchColumn();
   ?>
<!doctype html>
<html lang="en">
   <head>
      <title>Admin Panel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Shall We Transfer Admin Template">
      <meta name="author" content="Shall we Transfer">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <!-- VENDOR CSS -->
      <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
      <script src="https://kit.fontawesome.com/02d5a99266.js" crossorigin="anonymous"></script>
      <!-- MAIN Project CSS file -->
      <link rel="stylesheet" href="../assets/css/main.css">
   </head>
   <body data-theme="light" class="font-nunito">
      <div id="wrapper" class="theme-cyan">
         <!-- Page Loader -->
         <?php include'top-bar.php';?>
         <!-- main left menu -->
         <?php include'left-menu.php';?>
         <!-- rightbar icon div -->
         <!-- mani page content body part -->
         <!-- mani page content body part -->
         <div id="main-content">
            <div class="container-fluid">
               <div class="block-header">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Analytical</h2>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                           <li class="breadcrumb-item">Dashboard</li>
                           <li class="breadcrumb-item active">Analytical</li>
                        </ul>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                           <div class="page_action">
                              <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                              <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                           </div>
                           <div class="p-2 d-flex">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row clearfix row-deck">
                  <div class="col-xl-12 col-lg-12 col-md-12">
                     <div class="card">
                        <div class="header">
                           <h2>Total Revenue</h2>
                           <ul class="header-dropdown">
                              <li><a class="tab_btn" href="javascript:void(0);" title="Weekly">W</a></li>
                              <li><a class="tab_btn" href="javascript:void(0);" title="Monthly">M</a></li>
                              <li><a class="tab_btn active" href="javascript:void(0);" title="Yearly">Y</a></li>
                              <li class="dropdown">
                                 <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                 <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                        <div class="body">
                           <div class="row clearfix">
                              <!-- Categories -->
                              <div class="col-md-4">
                                 <div class="body primary-bg text-light">
                                    <h4><i class="fa-solid fa-layer-group"></i> <?php echo $catCount; ?></h4>
                                    <span>Total Categories</span>
                                 </div>
                              </div>
                              <!-- Listings -->
                              <div class="col-md-4">
                                 <div class="body secondary-bg text-light">
                                    <h4><i class="fa-solid fa-list"></i> <?php echo $adsCount; ?></h4>
                                    <span>Total Listings</span>
                                 </div>
                              </div>
                              <!-- Contacts -->
                              <div class="col-md-4">
   <div class="body primary-bg text-light">
      <h4><i class="fa-solid fa-check-circle"></i> <?php echo $soldCount; ?></h4>
      <span>Total Sold</span>
   </div>
</div>
                           </div>
                           <div id="apex-chart-line-column"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="header">
                           <h2>Recent Ads Listings</h2>
                           <!-- <ul class="header-dropdown">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                      <li><a href="javascript:void(0);">Action</a></li>
                                      <li><a href="javascript:void(0);">Another Action</a></li>
                                      <li><a href="javascript:void(0);">Something else</a></li>
                                  </ul>
                              </li>
                              </ul> -->
                        </div>
                        <div class="body">
                           <!--  <p class="float-md-right">
                              <span class="badge badge-success">3 Admit</span>
                              <span class="badge badge-default">2 Discharge</span>
                              </p> -->
                           <div class="table-responsive table_middel">
                              <table class="table m-b-0">
                                 <thead class="thead-dark">
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
      <!-- page vendor js file -->
      <script src="../assets/bundles/apexcharts.bundle.js"></script>
      <!-- page js file -->
      <script src="../assets/bundles/mainscripts.bundle.js"></script>
      <script src="../../js/hospital/index.js"></script>
   </body>
</html>