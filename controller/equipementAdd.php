<?php
include_once('./controller.php');
include_once('../loadData.php');

if (isset($_POST['addEquipement'])) {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['model']) &&
        !empty($_POST['manufactureDate']) &&
        !empty($_POST['serialNumber']) &&
        !empty($_POST['process'])
    ) {
        $name = $_POST['name'];
        $model = $_POST['model'];
        $manufactureDate = $_POST['manufactureDate'];
        $serialNumber = $_POST['serialNumber'];
        $process = $_POST['process'];

        $id = Controller::generateRandomUniqueId();


        $eq = new Equipement($id, $name, $model, $manufactureDate, $serialNumber, $process);
        $_SESSION[$id . 'eq'] = $eq;
        $_SESSION['addedEq'][] = $_SESSION[$id . 'eq'];

        header('Location:../home.php?msg=equipementAddedSuccessfully');
    } else {
        header('Location:../home.php?msg=equipementEmptyFields');
    }
} else {
    header('Location:../home.php');
}
