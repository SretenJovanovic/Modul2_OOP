<?php
include_once('../loadData.php');
if (isset($_POST["submitEdit"])) {
    if (!empty($_POST['userId']) &&
        !empty($_POST['username']) &&
        !empty($_POST['password']) &&
        !empty($_POST['firstName']) &&
        !empty($_POST['lastName']) &&
        !empty($_POST['age']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['type']) &&
        !empty($_POST['email'])
    ) {
        $userId = $_POST['userId'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $phoneNumber = $_POST['phone'];
        $type = $_POST['type'];
        $email = $_POST['email'];
    }
    foreach ($allUsers as  $user) {
        if ($user->getId() == $userId) {
            
            $user->setUsername($username);
            $user->setPassword($password);
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setAge($age);
            $user->setPhoneNumber($phoneNumber);
            $user->setType($type);
            $user->setEmail($email);
        }
    }
    header("location:../home.php?msg=userUpdated");
}
