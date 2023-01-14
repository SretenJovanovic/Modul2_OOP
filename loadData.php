<?php
include_once('model/report.interface.php');
include_once('model/user.class.php');
include_once('model/administrator.class.php');
include_once('model/operator.class.php');
include_once('model/technician.class.php');
include_once('model/equipement.class.php');
include_once('alert.trait.php');
include_once('model/alert.class.php');
include_once('model/failureReport.class.php');
include_once('controller/controller.php');

session_start();
$administrator1 = new Administrator(1,'adminUsername','adminIme', 'adminPrezime', 26, '0605425255', 'admin123', 'admin@test', 'administrator');
// $operator1 = new Operator(2, 'petar', 'petrovic', 29, '0603431424', 'petar123', 'petar@test', 'operater');
// $operator2 = new Operator(3, 'Jovana', 'jovanovic', 29, '0603431424', 'jovana123', 'jovana@test', 'operater');
// $technician1 = new Technician(6, 'mario', 'yyy', 29, '0603431424', 'mario123', 'mario@test', 'tehnicar');
// $technician2 = new Technician(7, 'luigi', 'yyy', 29, '0603431424', 'luigi123', 'luigi@test', 'tehnicar');

// $eq1 = new Equipement(1, 'Mlin', 'MPE', '2022', '140/2022', 'przenje');
// $eq2 = new Equipement(2, 'Mlin', 'MPE', '2022', '140/2022', 'mlevenje');
// $eq3 = new Equipement(3, 'Mlin', 'MPE', '2022', '140/2022', 'mlevenje');
// $eq4 = new Equipement(4, 'Mlin', 'MPE', '20as22', '140/2022', 'sirova');
// $eq5 = new Equipement(5, 'Mlin', 'MPE', '2022', '140/202422', 'sirova');
// $eq6 = new Equipement(6, 'Mlin', 'MPE', '2022', '140/20222', 'viljuskari');
// $eq7 = new Equipement(7, 'Mlin', 'MPE', '2022', '140/2022', 'klimatizacija');
// $eq8 = new Equipement(8, 'Mlin', '32MPE', '202242', '1420/2022', 'viljuskari');
// $eq9 = new Equipement(9, 'Mlin', 'MPE', '20122', '140/2022', 'sirova');
// $eq10 = new Equipement(10, 'Mlin', 'MPE', '202224', '140/2022', 'klimatizacija');


// SESSION USERS
$arrayOfRegisteredUsers = [$administrator1];

// // SESIJA RUCNO ISPISANIH USERA
$_SESSION['listOfUsers'] = $arrayOfRegisteredUsers;


// POKRETANJE SESIJE ZA USERE KOJI SE DODAJU PREKO FORME
if (!isset($_SESSION['addedUsers'])) {
    $_SESSION['addedUsers'] = [];
}

// VARIJABLA ALL USERS = RUCNO UNETI USERI + USERI UNETI PREKO FORME
if (isset($_SESSION['addedUsers']) && !empty($_SESSION['addedUsers'])) {
    $allUsers = $_SESSION['addedUsers'];
    foreach ($_SESSION['listOfUsers'] as $defaultUsers) {
        $allUsers[] = $defaultUsers;
    }
} else {
    $allUsers = $_SESSION['listOfUsers'];
}


//SESSION EQUIPEMENT

$arrayOfEquipement = [];
// SESIJA RUCNO ISPISANIH MASINA
$_SESSION['listOfEquipement'] = $arrayOfEquipement;

// POKRETANJE SESIJE ZA MASINE KOJI SE DODAJU PREKO FORME
if (!isset($_SESSION['addedEq'])) {
    $_SESSION['addedEq'] = [];
}

// VARIJABLA ALL EQUIPEMENT = RUCNO UNETE MASINE + MASINE UNETE PREKO FORME
if (isset($_SESSION['addedEq']) && !empty($_SESSION['addedEq'])) {
    $allEquipement = $_SESSION['addedEq'];
    foreach ($_SESSION['listOfEquipement'] as $defaultEquipement) {
        $allEquipement[] = $defaultEquipement;
    }
    
} else {
    $allEquipement = $_SESSION['listOfEquipement'];
}



//SESSION FAILURE

if (!isset($_SESSION['addedReport'])) {
    $_SESSION['addedReport'] = [];
}


