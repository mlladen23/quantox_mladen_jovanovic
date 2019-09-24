<?php
function connection()
{
    $conn = mysqli_connect("localhost", "root", "", "quantox");
    if(mysqli_connect_error()){
        echo "Connection to SQL failed: " . mysqli_connect_error();
        die();
    }
    return $conn;
}
?>