<!DOCTYPE html>
<html>
    <head>
        <title>UNIT CONVERTER</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>UNIT CONVERTER</h2>
            <form action="calc.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label for="">Weight:</label>
                        </td>
                        <td>
                            <input type="text" name="weight" id="" placeholder="Enter Weight in kg">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Distance:</label>
                        </td>
                        <td>
                            <input type="text" name="distance" placeholder="Enter Distance in km">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit"  id="submit" value="CONVERT">
                        </td>
                    </tr>
                    <tr>
                        <?php
                            session_start();
                            if(empty($_SESSION['POUND'])){
                                $pound = 0;
                            } else {
                                $pound = $_SESSION['POUND'];
                            }
                            if(empty($_SESSION['MILE'])){
                                $miles = 0;
                            } else {
                                $miles = $_SESSION['MILE'];
                            }           
                            session_destroy();                 
                        ?>
                        <td>
                            <?php
                                
                                echo '<label>Weight in Pounds: ' . $pound . ' lb</label>';
                            ?>
                        </td>
                        <td>
                            <?php
                                echo '<label>Distance in Miles: ' . $miles . ' mi</label>';
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>