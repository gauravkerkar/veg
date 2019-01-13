<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Cascading Stylesheet File-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--Bootstrap 4 CDN Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script>
        function showpass() {
            var pass = document.getElementById('pass');
            if (document.getElementById('check').checked) {
                pass.setAttribute('type', 'text');
            } else {
                pass.setAttribute('type', 'password');
            }
        }
    </script>

</head>

<body class="loginform">

    <div class="container">
        <form method="POST" action="login.php">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><img src="img/user.png" alt="usericon" style="height: 24px;width: 24px;"></span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="error">
                <strong><?php echo $usernameErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><img src="img/lock.png" alt="passwordicon" style="height: 24px;width: 24px;"></span>
                </div>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
            </div>
            <input type="checkbox" onclick="showpass();" id="check"> Show Password
            <div class="error">
                <strong><?php echo $passwordErr; ?><?php echo $loginErr; ?></strong>
            </div>
            <br>
            <input type="Submit" class="btn btn-primary loginbtn" name="login" value="Login">
            &nbsp;<a href="register.php">Don't have an account?&nbsp;Register now</a>
        </form>
    </div>

</body>

</html>