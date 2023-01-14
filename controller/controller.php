<?php

class Controller
{
    public static function login($arrayOfRegisteredUsers, $email, $password)
    {
        foreach ($arrayOfRegisteredUsers as $registeredUser) {
            if ($registeredUser->getEmail() == $email && $registeredUser->getPassword() == $password) {
                $_SESSION['loggedUser'] = $registeredUser->getId();
                
                header('Location: ./home.php');
                break;
            } else {
                header('Location: ./index.php?msg=wrongUser');
            }
        }
    }

    public static function generateRandomUniqueId()
    {
        $id = random_int(1, 10000);
        return $id;
    }
    public static function getLoggedUser($arrayOfRegisteredUsers, $id)
    {
        foreach ($arrayOfRegisteredUsers as $registeredUser) {
            if ($registeredUser->getId() == $id) {
                return $registeredUser;
            }
        }
    }

    public static function getDateFormat($date)
    {
        return date('d/m/Y H:i:s', $date);
    }
}
