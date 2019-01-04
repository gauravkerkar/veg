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

<body class="registerform">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = "";
$name = $email = $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required!";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required!";
  } else {
    $username = $_POST["username"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space is allowed"; 
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required!";
  } else {
    $password = $_POST["password"];
    // check if name only contains letters and whitespace
    if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",$password)) {
      $passwordErr = "Password must contain an uppercase alphabet, a lowercase alphabet and a digit and it should be minimum 8 characters!"; 
    }
  }
}
?>

    <div class="container">
        <h1 class="text-center text-success">Register</h1>
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/name.png" alt="nameicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="error">
                <strong><?php echo $nameErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/mail.png" alt="mailicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email Address">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/phone.png" alt="phoneicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="text" class="form-control" name="mobno" placeholder="Mobile number">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/address.png" alt="addressicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <textarea class="form-control" rows="2" placeholder="Address"></textarea>
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
                <strong><?php echo $usernameErr; ?></strong>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/key.png" alt="keyicon" style="height: 24px;width: 24px;">
                    </span>
                </div>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
            </div>
            <input type="checkbox" onclick="showpass();" id="check"> Show Password
            <div class="error">
                <strong><?php echo $passwordErr; ?></strong>
            </div>
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Register">
        </form>
    </div>

</body>

</html>