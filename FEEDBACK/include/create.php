<?php
    include_once 'include.php';

    $rating = $_POST['rate'];
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(isset($_POST['add'])) {
        $sql = "INSERT INTO feedbackdetails(rating, comment, name, email) VALUES ('$rating', '$comment', '$name', '$email');";
        mysqli_query($conn, $sql);
        header('Location: ../index.html');
    } elseif(isset($_POST['read'])) {
        header('Location: ../reading.php');
    }
?>