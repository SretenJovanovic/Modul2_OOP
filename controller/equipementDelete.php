<?php
include_once('../loadData.php');
if (isset($_POST["submitDelete"])) {
    $eqId = $_POST["equipementId"];

    foreach ($allEquipement as  $key => $object) {
        if ($object->getId() == $eqId) {
            unset($allEquipement[$key]);
        }
    }
    $_SESSION['addedEq'] = $allEquipement;
    header("location:../home.php?msg=equipementDeleted");
}
