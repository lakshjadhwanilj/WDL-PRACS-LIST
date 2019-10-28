<?php
    $number = $_POST['number'];
    $temp = $number;
    $soln = 0;
    $count = strlen($number);
    
    while($temp != 0) {
        $digit = $temp % 10;
        $num = pow($digit,$count);
        $soln = $soln + $num; 
        $temp = $temp / 10;
    }
    if($soln == $number) {
        $msg = $number . " is an Armstrong Number.";
    } else {
        $msg = $number . " is not an Armstrong Number.";
    }

    session_start();
    $_SESSION['msg'] = $msg;
    header('Location: index.php');
?>