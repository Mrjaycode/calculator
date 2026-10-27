<?php
error_reporting(E_ERROR | E_PARSE);
ob_start();
session_name('calcspeed_session');
session_start();
include "../config.php";    

// Check if the session variable is set, not just empty
if (!isset($_SESSION['calcspeed_session']) || $_SESSION['calcspeed_session'] == '') {
    echo '<script>window.location.href="../"</script>';
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
        echo '<script>window.location.href="admin/"</script>';
        exit;
    }
} catch (PDOException $e) {
    // Handle database errors
    echo "Error: " . $e->getMessage();
}

// Clear the statement after use
$userinfo = null;
?>

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                <a href="index.php">Calcspeed</a> 
            </div>
            
            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        
                        <li>
                            <a href="logout.php" class="icon-menu"><i class="fa fa-power-off"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>