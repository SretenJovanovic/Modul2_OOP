<?php
include_once('../loadData.php');
if (isset($_POST["submitDelete"])) {
    $userId = $_POST["userId"];

    foreach ($allUsers as  $key => $object) {
        if ($object->getId() == $userId) {
            unset($allUsers[$key]);
        }
    }
    $_SESSION['addedUsers'] = $allUsers;
    header("location:../home.php?msg=userDeleted");
}