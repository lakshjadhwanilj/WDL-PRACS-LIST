<!DOCTYPE html>
<html>
    <head>
        <title>CHECK OUT</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>CHECK OUT</h2>
            <?php
                session_start();
                
                $q1 = $_SESSION['quantity1'];
                $q2 = $_SESSION['quantity2'];
                $q3 = $_SESSION['quantity3'];
                $q4 = $_SESSION['quantity4'];
                $q5 = $_SESSION['quantity5'];
                $q6 = $_SESSION['quantity6'];
            ?>
            <table border="1">
                <tr>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>Product 1</td>
                    <td>$10</td>
                    <?php
                        echo '<td>' . $q1 . '</td>';
                    ?>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>$10</td>
                    <?php
                        echo '<td>' . $q2 . '</td>';
                    ?>
                </tr>
                <tr>
                    <td>Product 3</td>
                    <td>$10</td>
                    <?php
                        echo '<td>' . $q3 . '</td>';
                    ?>
                </tr>
                <tr>
                    <td>Product 4</td>
                    <td>$10</td>
                    <?php
                        echo '<td>' . $q4 . '</td>';
                    ?>
                </tr>
                <tr>
                    <td>Product 5</td>
                    <td>$10</td>
                    <?php
                        echo '<td>' . $q5 . '</td>';
                    ?>
                </tr>
                <tr>
                    <td>Product 6</td>
                    <td>$10</td>
                    <?php
                        echo '<td>' . $q6 . '</td>';
                    ?>
                </tr>
            </table>
            <?php
                $price = $_SESSION['billAmount'];
                echo '<h3>Your Total Bill: $' . $price . '</h3>';
                session_destroy();
            ?>
        </div>
    </body>
</html>