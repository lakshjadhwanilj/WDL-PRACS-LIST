<?php
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];

    session_start();
    
    if(empty($_SESSION['billAmount'])) {
        $_SESSION['billAmount'] = 0;
        $_SESSION['quantity1'] = 0;
        $_SESSION['quantity2'] = 0;
        $_SESSION['quantity3'] = 0;
        $_SESSION['quantity4'] = 0;
        $_SESSION['quantity5'] = 0;
        $_SESSION['quantity6'] = 0;
    }

    if(isset($_POST['addproduct1'])) {

        $_SESSION['billAmount'] = $_SESSION['billAmount'] + $p1;
        $_SESSION['quantity1'] = $_SESSION['quantity1'] + 1;
        header('Location: index.html');

    } elseif(isset($_POST['addproduct2'])) {
        
        $_SESSION['billAmount'] = $_SESSION['billAmount'] + $p2;
        $_SESSION['quantity2'] = $_SESSION['quantity2'] + 1;
        header('Location: index.html');

    } elseif(isset($_POST['addproduct3'])) {
        
        $_SESSION['billAmount'] = $_SESSION['billAmount'] + $p3;
        $_SESSION['quantity3'] = $_SESSION['quantity3'] + 1;
        header('Location: index.html');

    } elseif(isset($_POST['addproduct4'])) {

        $_SESSION['billAmount'] = $_SESSION['billAmount'] + $p4;
        $_SESSION['quantity4'] = $_SESSION['quantity4'] + 1;
        header('Location: index.html');

    } elseif(isset($_POST['addproduct5'])) {
        
        $_SESSION['billAmount'] = $_SESSION['billAmount'] + $p5;
        $_SESSION['quantity5'] = $_SESSION['quantity5'] + 1;
        header('Location: index.html');
        
    } elseif(isset($_POST['addproduct6'])) {

        $_SESSION['billAmount'] = $_SESSION['billAmount'] + $p6;
        $_SESSION['quantity6'] = $_SESSION['quantity6'] + 1;
        header('Location: index.html');

    }
    
    if(isset($_POST['bill'])) {        
        header('Location: billing.php');
    }
?>