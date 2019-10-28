<!DOCTYPE html>
<html>
    <head>
        <title>GUESTS | READ</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            
            <table cellspacing="10px" cellpadding="5px"  style="border:1px solid black;" border="1">
                <tr>                    
                    <th>
                        Name
                    </th>
                    <th>
                        Mobile
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Gender
                    </th>
                </tr>
                
                <?php
                    include_once 'include/include.php';
                    $sql = "SELECT * FROM guestdetails;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)) {                            
                            $name = $row['name'];
                            $mobile = $row['mobile'];
                            $address = $row['address'];
                            $gender = $row['gender'];

                            echo '<tr>                                        
                                        <td>' . 
                                            $name . '
                                        </td>
                                        <td>' . 
                                            $mobile . '
                                        </td>
                                        <td>' . 
                                            $address . '
                                        </td>
                                        <td>' . 
                                            $gender . '
                                        </td>
                                </tr>';
                        }
                    }
                ?>                
            </table>
        </div>
    </body>
</html>
