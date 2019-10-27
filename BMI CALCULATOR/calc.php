<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $soln = $weight/($height*$height);
    session_start();
    $_SESSION['SOLN'] = $soln;
    header("location: index.php");
?>