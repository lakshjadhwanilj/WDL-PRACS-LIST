<!DOCTYPE html>
<html>
    <head>
        <title>ARMSTRONG NUMBER</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>ARMSTRONG NUMBER</h2>
            <form action="calc.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label for="">Enter A Number</label>
                        </td>
                        <td>
                            <input type="text" name="number" id="number" placeholder="eg: 153">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" id="submit" value="SUBMIT">
                        </td>
                        <td>
                            <?php
                                session_start();
                                if(empty($_SESSION['msg'])) {
                                    $msg = "";
                                } else {
                                    $msg = $_SESSION['msg'];
                                }
                                
                                echo '<label>' . $msg . '</label>';
                                session_destroy();
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>