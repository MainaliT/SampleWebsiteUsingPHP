
<!--login section for users-->
<html>
<head><title>Login</title>
    <?php include "header.html";?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center><table class="tableProperty">
    <tr>
        <form name="form1", method="post" action="loginSuccess.php" ">
            <td>
                <table cellspacing="1", class="secondTableforUserLogin">
                    <tr>
                        <td colspan="3"><strong>&nbsp;&nbsp;&nbsp;User Login</strong></td>
                    </tr>
                    <tr>
                        <td width="80">Username</td>
                        <td width="6">:</td>
                        <td width="300"> <input name="myusername" type="text" id="myusername"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="mypassword" type="password" id="mypassword"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                </table>
            </td>
        </form>
    </tr>
</table>
</center>
</body>
</html>
