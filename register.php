<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>REGISTER</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Cascading Stylesheet File-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--Bootstrap 4 CDN Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="./img/siteicon.png">
</head>

<body class="registerform">

    <div class="container">
        <h1 class="text-center text-primary">Register</h1>
        <br>
        <form method="post" action="register.php">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/name.png" alt="nameicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="error">
                <strong>
                    <?php echo $nameErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/mail.png" alt="mailicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email Address">
            </div>
            <div class="error">
                <strong>
                    <?php echo $emailErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/phone.png" alt="phoneicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="text" class="form-control" name="mobno" placeholder="Mobile number">
            </div>
            <div class="error">
                <strong>
                    <?php echo $mobnoErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/address.png" alt="addressicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <textarea class="form-control" rows="2" name="add" placeholder="Address"></textarea>
            </div>
            <div class="error">
                <strong>
                    <?php echo $addErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/user.png" alt="usericon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="error">
                <strong>
                    <?php echo $usernameErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/key.png" alt="keyicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
            </div>
            <div class="error">
                <strong>
                    <?php echo $passwordErr; ?></strong>
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-block" name="register" value="Register">
        </form>
    </div>

</body>

</html>