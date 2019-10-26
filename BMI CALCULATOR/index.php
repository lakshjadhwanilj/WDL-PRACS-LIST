<!DOCTYPE html>
<html>
    <head>
        <title>BODY MASS INDEX APP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>BMI CALCULATOR</h2>
            <form action="calc.php" method="POST">
                <table cellspacing="10px">
                    <tr>
                        <td>
                            <label for="weight">Weight: </label>
                        </td>
                        <td>
                            <input type="text" name="weight" placeholder="Enter Weight in kg">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="height">Height: </label>
                        </td>
                        <td>
                            <input type="text" name="height" placeholder="Enter Height in m">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit"  id="submit" value="CALCULATE">
                        </td>
                        <td>
                            <?php
                                session_start();
                                if(empty($_SESSION['SOLN'])){
                                    $bmi = 0;
                                } else {
                                    $bmi = $_SESSION['SOLN'];
                                }
                                if($bmi == 0){
                                    echo '<label>BMI: <label>';
                                } else {
                                    echo '<label>BMI: ' . $bmi . '</label>';
                                }
                                session_destroy();
                            ?>

                            
                        </td>

                        <td>
                            <?php
                                if($bmi == 0){
                                    echo '<label><label>';
                                } elseif($bmi < 18.5) {
                                    echo '<label>Underweight BMI<label>';
                                } elseif ($bmi > 24.9 && $bmi < 30) {
                                    echo '<label>Overweight BMI<label>';
                                } elseif ($bmi >= 30) {
                                    echo '<label>Obese BMI<label>';
                                } else {
                                    echo '<label>Normal BMI<label>';
                                }
                            ?>
                        </td>
                    </tr>                    
                </table>                
            </form>
        </div>
    </body>
</html>