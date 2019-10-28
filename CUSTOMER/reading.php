<!DOCTYPE html>
<html>
    <head>
        <title>CUSTOMER DETAILS | READ</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            
            <table cellspacing="10px" cellpadding="5px"  style="border:1px solid black;" border="1">
                <tr>
                    <th>
                        Email
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Mobile
                    </th>
                    <th>
                        Password
                    </th>
                    <th>
                        Address
                    </th>
                </tr>
                
                <?php
                    include_once 'include/include.php';
                    $sql = "SELECT * FROM customerdetals;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $email = $row['email'];
                            $name = $row['name'];
                            $mobile = $row['mobile'];
                            $password = $row['pass'];
                            $address = $row['address'];
                            echo '<tr>
                                        <td>' . 
                                            $email . '
                                        </td>
                                        <td>' . 
                                            $name . '
                                        </td>
                                        <td>' . 
                                            $mobile . '
                                        </td>
                                        <td>' . 
                                            $password . '
                                        </td>
                                        <td>' . 
                                            $address . '
                                        </td>
                                </tr>';
                        }
                    }
                ?>                
            </table>
        </div>
    </body>
</html>