<?php
    include "connection.php";
    $conn = connection();

    if(isset($_POST['email']) && isset($_POST['name'])
    && isset($_POST['password']) && isset($_POST['confirmPassword'])){
        $email           = $_POST['email'];
        $name            = $_POST['name'];
        $password        = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        var_dump($email, $name, $password, $confirmPassword);
        if($password == $confirmPassword){
            $registerQuery = "INSERT INTO users(email, name, password, confirmPassword)
            VALUES ('".$email."','".$name."','".$password."','".$confirmPassword."')";
            $result = mysqli_query($conn, $registerQuery);
            
            $message = "Successful record!";
            header('Location:../login.php');
        }
        else{
            $message = "Passwords are don't match!";
            header('Location:../registration.php');
        }
    }
    else{
        $message = "You have to fill all fields!";
        header('Location:../registration.php');
    }
?>