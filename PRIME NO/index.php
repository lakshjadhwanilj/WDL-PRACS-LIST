<!DOCTYPE HTML>
<html>
	<head>
		<title>Prime Numbers</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<form action="calc.php" method="post">
				<table>
					<tr>
						<h1 style="text-align: center; margin:0; padding:0">Prime Numbers</h1>
					</tr>
					<tr>
						<td>
							<label>Enter First Number: </label>
						</td>
						<td>
							<input type="text" name="num1" value="">
						</td>
					</tr>
					<tr>
						<td>
							<label>Enter Second Number: </label>
						</td>
						<td>
							<input type="text" name="num2" value="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="GENERATE" id="submit">
						</td>
						<td>
							<?php
								session_start();
								if(empty($_SESSION['soln'])) {
									$ans = "";
								} else {
									$ans = $_SESSION['soln'];
								}
								echo '<label for="">PRIME NUMBERS ARE: ' . $ans . '</label>';
								session_destroy();
							?>
						</td>
					</tr>
				</table>		
			</form>
		</div>
	</body>
</html>
