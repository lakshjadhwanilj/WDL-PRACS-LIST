<?php
    include_once 'include.php';
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $pass = $_POST['pass'];

    if(isset($_POST['add'])) {
        $sql = "INSERT INTO customerdetals(email, name, mobile, pass, address) VALUES ('$email', '$name', '$mobile', '$pass', '$address');";
        mysqli_query($conn, $sql);
        header('Location: ../index.html');
    } elseif(isset($_POST['read'])) {
        header('Location: ../reading.php');
    }
?>