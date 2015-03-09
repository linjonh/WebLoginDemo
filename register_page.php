<?php
    require_once "footer.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="home_page.css">
</head>

<body>
    <div id="header">
        <header>
            Register Account.
        </header>
    </div>
    <div id="form">
        <form action="register.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" />
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" />
            <br>
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd" />
            <br>
            <label for="confirm_pwd">Comfirm password:</label>
            <input type="password" id="confirm_pwd" name="confirm_pwd" />
            <br>
            <input type="submit" name="register" id="register" value="Register" />
        </form>
    </div>
    <?php
    		showFooter();
    ?>

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript">
        $.ajax({
            url:"register.php",
            success:function (result) {
                if(result){
                <?php
                echo "success regiter";
                ?>
                }
            }
        });
    </script>
</body>

</html>
