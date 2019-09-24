<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Registration</TITLE>
        <link rel="stylesheet" type='text/css' href='style/style.css'>
        <script src="js/Validator.js"></script>
    </HEAD>
    <BODY>
        <div class='navigation'>
            <ul>
                <li><a href="login.php">Login</a></li>
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
            <form action='php/registerPhp.php' method='POST' class=''>
                <table>
                    <tr>
                        <td colspan="2"><h3>Registration</h3></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input class='required email input-logReg' type="text" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input class='required input-logReg' type="text" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input  id="pwd_field" class='required input-logReg' type="password" name="password" value="" ></td>
                    </tr>
                    <tr>
                        <td>Confirm password:</td>
                        <td><input class='required match input-logReg' type="password" name="confirmPassword" value="" data-match_id="pwd_field"></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input class='btnFormSubmit' type="submit" name="btnRegister" value="Registration"></td>
                    </tr>
                </table>
            </form>
        </div>
    </BODY>
</HTML>