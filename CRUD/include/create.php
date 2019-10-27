<?php
    include_once 'include.php';
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];
    if(isset($_POST['add'])) {
        $sql = "INSERT INTO cruddetails(email, name, mobile, pass) VALUES ('$email', '$name', '$mobile', '$pass');";
        mysqli_query($conn, $sql);
        header('Location: ../index.html');
    } elseif(isset($_POST['read'])) {
        header('Location: ../reading.php');
    } elseif(isset($_POST['delete'])) {
        $sql = "DELETE FROM cruddetails WHERE email = '$email';";
        mysqli_query($conn, $sql);
        header('Location: ../index.html?Record&deleted');
    } elseif(isset($_POST['update'])) {
        $sql = "UPDATE cruddetails SET 
                name = '$name',
                mobile = '$mobile',
                pass = '$pass'
                WHERE email = '$email';";
        mysqli_query($conn, $sql);
        header('Location: ../index.html?Record&updated');
    }
?>