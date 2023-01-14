<?php
include_once('./controller.php');
include_once('../loadData.php');

if (isset($_POST['submitReport'])) {
    if (!empty($_POST['equipement']) &&
        !empty($_POST['failureDesc'])
    ) {
        $operatorID = $_POST['operatorID'];
        $equipementID = $_POST['equipement'];
        foreach($allEquipement as $eq){
            if($eq->getId() == $equipementID){
                $equipement = $eq;
            }
        }
        foreach($allUsers as $user){
            if($user->getId() == $operatorID){
                $operator = $user;
            }
        }
        $failureDesc = $_POST['failureDesc'];

        $id = Controller::generateRandomUniqueId();

        $failureReport = new FailureReport($id,$operator,$equipement,$failureDesc);
        
        $_SESSION[$id . 'eq'] = $failureReport;
        $_SESSION['addedReport'][] = $_SESSION[$id . 'eq'];
        header('Location:../home.php?msg=reportAdded');
    } else {
        header('Location:../home.php');
    }
} else {
    header('Location:../home.php');
}


