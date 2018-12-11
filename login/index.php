<?php
include '../config/config.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <div class="login-card"><img src="assets/img/konshinbukai.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin" method="post" ><span class="reauth-email"> </span>
            <input class="form-control" type="text" required="" placeholder="Username" autofocus="" id="username" name="Username">
            <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="Password">
            <div class="checkbox">
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login" value="1">Sign in</button>

            <?php
            $username   = @$_POST['Username'];
            $password   = @$_POST['Password'];
            $log        = @$_POST['login'];

            if ($log == "1")
            {
                $user_qry   = mysql_query("SELECT * FROM users WHERE username = '".$username."'");
                $user_data  = mysql_fetch_assoc($user_qry);
                
                if ($user_data['pass'] == $password)
                {
                    header('location:../home.php?id='.$user_data['ID'].'');
                }
                else
                {
                    echo '<div class="alert alert-danger"> Periksa kembali username atau password anda!</div>';
                    
                }
            }


            ?>
        </form><a href="#" class="forgot-password">Forgot your password?</a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>