<?php

include_once('../loadData.php');
if (isset($_POST["submitFix"])) {
    $failureId = $_POST['failureId'];
    foreach ($_SESSION['addedReport'] as $report) {
        if ($report->getId() == $failureId) {
            $report->setStatus();
            $report->setFixedDate();
            break;
        }
    }
    header('Location:../home.php?msg=reportCompleted');
}