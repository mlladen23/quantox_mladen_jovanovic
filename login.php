<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Login</TITLE>
        <link rel="stylesheet" type='text/css' href='style/style.css'>
        <script src="js/Validator.js"></script>
    </HEAD>
    <BODY>
        <div class='navigation'>
            <ul>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="home.php">Home</a></li>
            </ul>
        </div>
        <div class='container-login'>
            <div class='error'>
                <?php

                    if (isset($_GET['message']) && strlen($_GET['message'])) {
                        $message = $_GET['message'];
                        echo $message;
                    }
                ?>
            </div>
            <form action='php/loginPhp.php' method='POST' class=''>
                <table>
                    <tr>
                        <td colspan="2"><h3>Login</h3></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input class='required email input-logReg' type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input class='required input-logReg' type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input class='btnFormSubmit' type="submit" name="btnLogin" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </BODY>
</HTML>