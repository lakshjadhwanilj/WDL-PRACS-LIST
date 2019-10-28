<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <form action="count.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <input type="submit" value="OPEN WEBPAGE" class="submit">
                        </td>
                        <td>
                            <?php
                                session_start();
                                if(empty($_SESSION['count'])) {
                                    $_SESSION['count'] = 0;                                
                                }
                                $counter = $_SESSION['count'];
                                echo '<label for="">Counter: ' . $counter . '</label>';
                                
                            ?>                            
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>