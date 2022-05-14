<?php include_once 'php/form.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://img.icons8.com/ios/344/login-rounded-right--v1.png">
</head>

<body>

    <form method="post">
        <div>
            <h2> Login </h2>
        </div>
        <input type="text" name="login" id='login' value="<?php echo $login ?>"> <br> <br>
        <div class='error_login'> </div>
        <div>
            <h2>Password</h2>
        </div>
        <input type="password" name="password" id="password" value="<?php echo $password ?>">
        <div class='error_password'> </div> <br><br>
        <div class='success_login'> </div>
        </div>
        <input type="submit" name="submit" value="Login in" id="submit">
    </form>








    <script>
        <?php require_once("ts_js/form.js"); ?>
    </script>
    <script src="ts_js/form.js"> </script>


</body>

</html>