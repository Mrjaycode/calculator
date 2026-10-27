<?php
error_reporting(E_ERROR | E_PARSE);
ob_start();
session_name('calcspeed_session');
session_start();
include "private/shadow.php";   
include "private/tables.php";


if ($_SESSION['calcspeed_session']!='') {
     // echo '<script>window.location.href="admin/"</script>';
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Calcspeed Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content=" Shall we Admin Panel">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<style type="text/css">
    [class="theme-cyan"] {
  --primary-color: #000000;
  --primary-color2: #33BAB0;
  --primary-color3: #8BCEC9;
  --secondary-color: #637AAE;
  --secondary-color2: #00ACEE;
  --link-color: #E76886;
  --primary-gradient: linear-gradient(45deg, #59C4BC, #637AAE);
}
</style>
</head>

<body data-theme="light" class="font-nunito">
    <!-- WRAPPER -->
    <div id="wrapper" class="theme-cyan" >
        <div class="vertical-align-wrap" >
            <div class="vertical-align-middle auth-main hospital" >
                <div class="auth-box" >
                    <div class="top">
                        <img src="https://Calcspeed.in/assets/logos/Calcspeed-logo.png" alt="Calcspeed">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="" method="post">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="text" placeholder="Enter Email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="control-label sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                               <!--  <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>                                
                                </div> -->
                                <button  type="submit" name="submit-form" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <!-- <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="page-register.html">Register</a></span>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>
<?php
if (isset($_POST['submit-form'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);
    
    $check = $anjan->prepare("SELECT id, password FROM client_tbl WHERE email = :p1 AND status = 1");
    $check->bindParam(':p1', $email);
    $check->execute();

    if ($check->rowCount() == 1) {
        $fetch = $check->fetch(PDO::FETCH_ASSOC);
        $storedPassword = $fetch['password'];

        // ✅ CHECK BOTH PASSWORD FORMATS:
        $loginSuccess = false;
        
        // Method 1: Check bcrypt (new users + edited users)
        if (password_verify($password, $storedPassword)) {
            $loginSuccess = true;
        } 
        // Method 2: Check SHA256 (old admin-created users)
        else if (hash('sha256', $password) === $storedPassword) {
            $loginSuccess = true;
            
            // Optional: Upgrade to bcrypt for future logins
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            $update = $anjan->prepare("UPDATE client_tbl SET password = :password WHERE id = :id");
            $update->bindParam(':password', $newHash);
            $update->bindParam(':id', $fetch['id']);
            $update->execute();
        }

        if ($loginSuccess) {
            $_SESSION['calcspeed_session'] = $fetch['id'];
            echo '<script>window.location.href="admin/"</script>';
            exit; 
        } else {
            echo '<script>window.location.href="?invalid-password"</script>';
            exit; 
        }
    } else {
        echo '<script>window.location.href="?invalid-id"</script>';
        exit; 
    }
}
?>