<?php
ob_start();
session_name('calcspeed_session');
session_start();
include "private/shadow.php";  
include "private/tables.php";

// This line sets the name of the session 

if ($_SESSION['calcspeed_session']=='') {
  // echo '<script>window.location.href="../"</script>';
}
$userinfo = $anjan->prepare("SELECT * FROM client_tbl WHERE id = :id");
$userinfo->bindParam(':id', $_SESSION['calcspeed_session']);
$userinfo->execute();

if ($userinfo->rowCount() > 0) {
    $userRow = $userinfo->fetch(PDO::FETCH_ASSOC);
    $auser_id = $userRow['auser_id'];
$added_by = $userRow['user_name'];
} else {
    // Redirect or handle invalid session
    // echo '<script>window.location.href="../"</script>';
}
$userinfo=null;
?>


