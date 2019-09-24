<?php
 session_start(); 
 if(empty($_SESSION['email']))
 {
     echo("You are not logged in!");
 }
?>
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Login</TITLE>
        <link rel="stylesheet" type='text/css' href='style/style.css'>
    </HEAD>
    <BODY>
        <div class='navigation'>
            <ul>
                <li><a href="php/logout.php">Logout</a></li>
            </ul>
        </div>
        <div class='container-login'>
           <h1>HI <?php echo $_SESSION['email'] ?></h1>
        </div>
    </BODY>
</HTML>