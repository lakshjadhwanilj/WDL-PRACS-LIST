<?php
    include_once 'include.php';
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    if(isset($_POST['add'])) {
        $sql = "INSERT INTO guestdetails(name, mobile, address, gender) VALUES ('$name', '$mobile', '$address', '$gender');";
        mysqli_query($conn, $sql);
        header('Location: ../index.html');
    } elseif(isset($_POST['read'])) {
        header('Location: ../reading.php');
    } elseif(isset($_POST['update'])) {
        $sql = "UPDATE guestdetails SET                 
                mobile = '$mobile',
                address = '$address',
                gender = '$gender'
                WHERE name = '$name';";
        mysqli_query($conn, $sql);
        header('Location: ../index.html?Record&updated');
    }
?>