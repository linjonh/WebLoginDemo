<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forget password</title>
	 <link rel="stylesheet" href="home_page.css">
</head>
<body>
	 <div id="header">
        <header>
            Find password back.
        </header>
    </div>
    <div id="form">
        <form action="connect.php" method="post">
            <label for="origin_pwd">name:</label>
            <!-- <br> -->
            <input type="text" id="name" name="name" />
            <br>
            <label for="pwd">password:</label>
            <!-- <br> -->
            <input type="password" id="pwd" name="pwd" />
            <a href="forgotpassword.php">forget password</a>
            <br>
            <input type="submit" name="login" id="login" value="Login" />
            <br>
            <input type="button" name="register" id="register" value="Register" />
        </form>
    </div>
    <div class="footer">
        <footer>
            &copy; 2014 powered by lin jian you.<br>
            All right reserved.
            <br> Email: <a id="my_email" href="mailto://jaysen.lin@foxmail.com">jaysen.lin@foxmail.com</a>
        </footer>
    </div>
</body>
</html>