<?php
include_once('../loadData.php');
if (isset($_POST["submitEdit"])) {
    if (!empty($_POST['equipementId']) &&
        !empty($_POST['name']) &&
        !empty($_POST['model']) &&
        !empty($_POST['manufactureDate']) &&
        !empty($_POST['serialNumber']) &&
        !empty($_POST['process'])
    ) {
        $eqId = $_POST['equipementId'];
        $name = $_POST['name'];
        $model = $_POST['model'];
        $manufactureDate = $_POST['manufactureDate'];
        $serialNumber = $_POST['serialNumber'];
        $process = $_POST['process'];
    }
    foreach ($allEquipement as  $equipement) {
        if ($equipement->getId() == $eqId) {
            
            $equipement->setName($name);
            $equipement->setModel($model);
            $equipement->setManufactureDate($manufactureDate);
            $equipement->setSerialNumber($serialNumber);
            $equipement->setProcess($process);
        }
    }
    header("location:../home.php?msg=equipementUpdated");
}
