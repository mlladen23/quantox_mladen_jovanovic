<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Homepage</TITLE>
        <link rel="stylesheet" type='text/css' href='style/style.css'>
    </HEAD>
    <BODY>
        <div class='navigation'>
            <ul>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div class='container'>
            <form action='php/searchPhp.php' method='POST' class='searchForm'>
                <table>
                    <tr>
                        <td><input class='inputSrc' type="text" name="tbSearch" value=""></td>
                        <td><input class='btnSrc' type="submit" name="btnSearch" value="Search"></td>
                    </tr>
                </table>
            </form>
        </div>
    </BODY>
</HTML>