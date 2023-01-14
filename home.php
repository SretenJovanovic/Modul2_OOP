<?php
include('./loadData.php');

if (isset($_SESSION['loggedUser']) && !empty($_SESSION['loggedUser'])) {

    $loggedUser = Controller::getLoggedUser($allUsers, $_SESSION['loggedUser']);
    $loggedUserType = $loggedUser->getType();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body class="bg-light">
    <?php
    if ($loggedUserType == 'administrator') {
        include_once('view/administrator.view.php');
    } else if ($loggedUserType == 'operater') {
        include_once('view/operator.view.php');
    } else if ($loggedUserType == 'tehnicar') {
        include_once('view/technician.view.php');
    } else {
        header('Location: index.php?msg=InvalidUser');
    }
    ?>

    <div id="alerts" class="mb-5">
        <?php if (isset($_GET['msg'])) {
            $msgType = $_GET['msg'];
            $obj->$msgType();
        } ?>
    </div>
    <footer class="fixed-bottom bg-dark pt-3 mt-3">
        <div class="text-white text-center">
            <p>Copyright &copy; 2023 by ProjectX </p>
        </div>
    </footer>
    
    <script src="js/administrator.js"></script>
    <script src="js/operator.js"></script>
    <script src="js/tehnician.js"></script>
    <script src="js/main.js"></script>
    <script src="js/equipement.js"></script>
    <script src="js/users.js"></script>
</body>

</html>