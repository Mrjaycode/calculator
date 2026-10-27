
<?php
   error_reporting(E_ERROR | E_PARSE);
   
   include "../config.php";    
   
   // Check if the session variable is set, not just empty
   if (!isset($_SESSION['calcspeed_session']) || $_SESSION['calcspeed_session'] == '') {
       // echo '<script>window.location.href="../"</script>';
       exit; // Exit to prevent further script execution
   }
   
   try {
       // Prepare the SQL query
       $userinfo = $anjan->prepare("SELECT * FROM client_tbl WHERE id = :id");
       // Bind the session ID to the query
       $userinfo->bindParam(':id', $_SESSION['calcspeed_session'], PDO::PARAM_INT);
       $userinfo->execute();
       
       // Check if a user was found
       if ($userinfo->rowCount() > 0) {
           $userRow = $userinfo->fetch(PDO::FETCH_ASSOC);
       } else {
           // Redirect to admin if no user found
           // echo '<script>window.location.href="admin/"</script>';
           exit;
       }
   } catch (PDOException $e) {
       // Handle database errors
       echo "Error: " . $e->getMessage();
   }
   
   // Clear the statement after use
   $userinfo = null;

   
   ?>
<div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class=" user-name" data-toggle="dropdown"><strong><?=$userRow['user_name']?></strong></a>
                    
                </div>                
                <hr>
                
            </div>
            <!-- Nav tabs -->
            
                
            <!-- Tab panes -->
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <?php
// ✅ Fetch user permissions
$permissions = [
    'dashboard' => $userRow['dashboard'],
'blogs' => $userRow['blogs'],
'contacts' => $userRow['contacts'],
'city_seo' => $userRow['city_seo'],
'pages_seo' => $userRow['pages_seo'],
'manage_users' => $userRow['manage_users'],
];
?>

<ul class="metismenu li_animation_delay">

    <!-- Dashboard (Always Visible) -->
    <?php if ($permissions['dashboard'] == 1) { ?>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
        <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
    </li>
    <?php } ?>
    
    <!-- Blogs -->
    <?php if ($permissions['blogs'] == 1) { ?>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'all-blogs.php' ? 'active' : ''; ?>">
        <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-globe"></i><span>Blog</span></a>
        <ul>
            <li><a href="all-blogs.php">Blog List</a></li>
            <li><a href="add-blog.php">New Post</a></li>
        </ul>
    </li>
   <?php } ?>

     <!-- conatcts -->
    <?php if ($permissions['contacts'] == 1) { ?>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'all-contacts.php' ? 'active' : ''; ?>">
        <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-address-book"></i><span>Contacted</span></a>
        <ul>
            <li><a href="all-contacts.php">Contacted</a></li>
        </ul>
    </li>
    <?php } ?>

    <!-- city seo -->
    <?php if ($permissions['city_seo'] == 1) { ?>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'all-city.php' ? 'active' : ''; ?>">
        <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-building"></i><span>City Seo</span></a>
        <ul>
            <li><a href="add-city.php">Add City</a></li>
            <li><a href="all-city.php">All City</a></li>
        </ul>
    </li>
    <?php } ?>
    
   <!-- pages Seo -->
    <?php if ($permissions['pages_seo'] == 1) { ?>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'all-pages.php' ? 'active' : ''; ?>">
        <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-address-book"></i><span>Pages Seo</span></a>
        <ul>
            <li><a href="add-pages.php">Add Pages</a></li>
            <li><a href="all-pages.php">All Pages</a></li>
        </ul>
    </li>
    <?php } ?>
    

   <?php if ($permissions['manage_users'] == 1) { ?>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'manage-user.php' ? 'active' : ''; ?>">
        <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i><span>Manage Users</span></a>
        <ul>
            <li><a href="manage-user.php">New User</a></li>          
            <li><a href="all-user.php">Users List</a></li>
        </ul>
    </li>
    <?php } ?>

   

</ul>

                    </nav>
                </div>
               
               
                <div class="tab-pane" id="question">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    
                </div>    
            </div>          
        </div>
    </div>
    
    