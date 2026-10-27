<?php

include '../config.php';

if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = intval($_POST['id']);
    $status = intval($_POST['status']);

    $update = $anjan->prepare("UPDATE business_tbl SET status = :status WHERE id = :id");
    $update->bindParam(':status', $status);
    $update->bindParam(':id', $id);

    if ($update->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'invalid';
}
