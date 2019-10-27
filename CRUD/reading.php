<!DOCTYPE html>
<html>
    <head>
        <title>CRUD FUNCTIONS | READ</title>
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
                </tr>
                
                <?php
                    include_once 'include/include.php';
                    $sql = "SELECT * FROM cruddetails;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $email = $row['email'];
                            $name = $row['name'];
                            $mobile = $row['mobile'];
                            $password = $row['pass'];

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
                                </tr>';
                        }
                    }
                ?>                
            </table>
        </div>
    </body>
</html>