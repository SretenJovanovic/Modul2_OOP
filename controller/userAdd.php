<?php
include_once('./controller.php');
include_once('../loadData.php');
if (isset($_POST['registerSubmit'])) {
    if ((!empty($_POST['username']) &&
            !empty($_POST['password']) &&
            !empty($_POST['firstName']) &&
            !empty($_POST['lastName']) &&
            !empty($_POST['age']) &&
            !empty($_POST['phone']) &&
            !empty($_POST['type']) &&
            !empty($_POST['passwordRepeat']) &&
            !empty($_POST['email'])) && 
            $_POST['password'] == $_POST['passwordRepeat']
    ) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $phoneNumber = $_POST['phone'];
        $type = $_POST['type'];
        $passwordRepeat = $_POST['passwordRepeat'];
        $email = $_POST['email'];


        // Random int
        $id = Controller::generateRandomUniqueId();


        if ($type == 'administrator') {
            $admin = new Administrator($id, $username, $firstName, $lastName, $age, $phoneNumber, $password, $email, $type);

            $_SESSION[$id . 'user'] = $admin;
            $_SESSION['addedUsers'][] = $_SESSION[$id . 'user'];
            header('Location:../home.php?msg=userAddedSuccessfully');
        } else if ($type == 'operater') {
            $operator = new Operator($id, $username, $firstName, $lastName, $age, $phoneNumber, $password, $email, $type);

            $_SESSION[$id . 'user'] = $operator;
            $_SESSION['addedUsers'][] = $_SESSION[$id . 'user'];
            header('Location:../home.php?msg=userAddedSuccessfully');
        } else if ($type == 'tehnicar') {
            $technician = new Technician($id, $username, $firstName, $lastName, $age, $phoneNumber, $password, $email, $type);

            $_SESSION[$id . 'user'] = $technician;
            $_SESSION['addedUsers'][] = $_SESSION[$id . 'user'];
            header('Location:../home.php?msg=userAddedSuccessfully');
        } else {
            header('Location:../home.php?msg=somethingWentWrong');
        }
    } else if ($_POST['password'] !== $_POST['passwordRepeat']) {
        header('Location:../home.php?msg=passwordMatchMsg');
    } else {
        header('Location:../home.php?msg=emptyInputMsg');
    }
}
