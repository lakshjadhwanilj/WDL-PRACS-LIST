<!DOCTYPE html>
<html>
    <head>
        <title>FEEDBACK DETAILS</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container" style="width: 50%; margin-left:300px; text-align: center;">
            <h2>FEEDBACK DETAILS</h2>
            <table cellspacing="10px" cellpadding="5px"  style="border:1px solid black;" border="1">
                <tr>                    
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Rating
                    </th>
                    <th>
                        Comment
                    </th>
                </tr>
                
                <?php
                    include_once 'include/include.php';
                    $sql = "SELECT * FROM feedbackdetails;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)) {   
                            $rating = $row['rating'];
                            $comment = $row['comment'];
                            $name = $row['name'];                            
                            $email = $row['email'];

                            echo '<tr>                                        
                                        <td>' . 
                                            $name . '
                                        </td>
                                        <td>' . 
                                            $email . '
                                        </td>
                                        <td>' . 
                                            $rating . '
                                        </td>
                                        <td>' . 
                                            $comment . '
                                        </td>
                                </tr>';
                        }
                    }
                ?>                
            </table>
        </div>
    </body>
</html>