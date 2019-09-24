<?php
    include "connection.php";
    $conn = connection();

    $searchText = $_POST['tbSearch'];

    $query = "SELECT * FROM `users` WHERE name = '".$searchText."' ";
    $result = mysqli_query($conn, $query);

    $count = mysqli_num_rows($result);
    if($count > 0 ){
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
                <html>
                    <head>
                        <title>List of search</title>
                        <link rel="stylesheet" type='text/css' href='style/style.css'>
                    </head>
                    <body>
                        <table>
                            <tr><td colspan='2'>Search results:</td></tr>
                            <tr>
                                <td> Email: </td>
                                <td><?= $row['email']; ?></td>
                            </tr>
                            <tr>
                                <td> Name: </td>
                                <td><?= $row['name']; ?></td>
                            </tr>
                        </table>
                    </body>
                </html>
            <?php
        }
    }
    else{
        $message = "No results!";
    }
?>