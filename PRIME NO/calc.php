<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $soln = " ";
    for($i = $num1; $i <= $num2; $i += 1) {
		$count = 0;
		for($j = 1; $j <= $i; $j += 1) {
			if($i % $j == 0) {
				$count += 1;
			}
		}
		if($count == 2) {
			$soln = $soln . $i . ", ";
        }
    }
    session_start();
    $_SESSION['soln'] = $soln;
    header('Location: index.php');
?>