<?php
    include "connection.php";
    $conn = connection();

    session_start();
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email    = $_POST['email'];
        $password = $_POST['password'];

        $loginQuery = "SELECT * FROM `users` WHERE email = '".$email."' AND password = '".$password."'";

        $result = mysqli_query($conn, $loginQuery);
        $row    = mysqli_fetch_array($result);
        $count  = mysqli_num_rows($result);

        if($count == 1){
            $_SESSION['email'] = $email;
            header('Location:../index.php');
        }
        else {
            $message = "Email or password are incorect!";
            header('Location:../login.php?message=' . $message);
        }
    }
    else {
        $message = "You have to fill both fields!";
        header('Location:../login.php?message=' . $message);
        }
?>