<?php
error_reporting(E_ERROR | E_PARSE);
include '../config.php';

$id = htmlspecialchars($_GET['id']);

$fetch = $anjan->prepare("SELECT * FROM contact_us WHERE id=:id");
$fetch->bindParam(':id', $id);
$fetch->execute();
$val2 = $fetch->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VIEW CONTACT | Calcspeed</title>

<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <?php include 'top-bar.php'; ?>
    <?php include 'left-menu.php'; ?>

    <div id="main-content">
        <div class="container-fluid">

            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>View Contact Details</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">Contact Enquiries</li>
                            <li class="breadcrumb-item active">View Contact</li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="all-contacts.php">
                                    <button type="button" class="btn btn-primary">
                                        All Contacts
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-body">

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p>
                                <strong>Contact ID:</strong>
                                <?= htmlspecialchars($val2['contact_id']) ?>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <p>
                                <strong>Added Date:</strong>
                                <?= htmlspecialchars($val2['added_date']) ?>,
                                <?= htmlspecialchars($val2['added_time']) ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <strong>First Name:</strong><br>
                            <?= htmlspecialchars($val2['first_name']) ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Last Name:</strong><br>
                            <?= htmlspecialchars($val2['last_name']) ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Email:</strong><br>
                            <?= htmlspecialchars($val2['email']) ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Mobile:</strong><br>
                            <?= htmlspecialchars($val2['mobile']) ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Business Name:</strong><br>
                            <?= htmlspecialchars($val2['business_name']) ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Business Type:</strong><br>
                            <?= htmlspecialchars($val2['business_type']) ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Website URL:</strong><br>
                            <?= htmlspecialchars($val2['weburl']) ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Inquiry Type:</strong><br>
                            <?= htmlspecialchars($val2['inquiry_type']) ?>
                        </div>

                        <div class="col-md-12 mb-3">
                            <strong>Message:</strong><br>
                            <div class="border p-3 rounded bg-light">
                                <?= nl2br(htmlspecialchars($val2['message'])) ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<script src="../assets/bundles/libscripts.bundle.js"></script>
<script src="../assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/bundles/mainscripts.bundle.js"></script>

</body>
</html>