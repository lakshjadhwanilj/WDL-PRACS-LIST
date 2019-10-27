<?php
    $weight = $_POST['weight'];
    $distance = $_POST['distance'];
    $pound = $weight * 2.205;
    $mile = $distance * 0.6214;
    session_start();
    $_SESSION['POUND'] = $pound;
    $_SESSION['MILE'] = $mile;
    header("location: index.php");
?>