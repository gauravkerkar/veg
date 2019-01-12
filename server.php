<?php
session_start();

// define variables and set to empty values
$name = $email = $mobno = $add = $username = $password = "";
$error = array();

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');

// If the register button is clicked
if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobno = mysqli_real_escape_string($db, $_POST['mobno']);
    $add = mysqli_real_escape_string($db, $_POST['add']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($_POST["name"])) {
    array_push($error, "Name is required!");
  } 

  if (empty($_POST["email"])) {
    array_push($error, "Email is required");
  }

  if (empty($_POST["mobno"])) {
    array_push($error, "Mobile number is required!");
  }

  if (empty($_POST["add"])) {
    array_push($error, "Address is required!");
  }

  if (empty($_POST["username"])) {
    array_push($error, "Username is required!");
  }

  if (empty($_POST["password"])) {
    array_push($error, "Password is required!");
  }

  // If no errors, save the user's data to the database
  if (count($error)==0) {
    $password_encrypt = md5($password); // Password encryption before storing in the database [Message Digest 5]
    $query = "INSERT INTO user (name, email, pno, adds, uname, pass) VALUES ('$name', '$email', '$mobno', '$add', '$username', '$password_encrypt')";
    mysqli_query($db, $query);
    header('location: login.php'); //redirect to login page
  }
}

// Login user
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($_POST["username"])) {
    array_push($error, "Username is required!");
  }

  if (empty($_POST["password"])) {
    array_push($error, "Password is required!");
  }

  if (count($error) == 0) {
    $password_encrypt = md5($password); // Password encryption before comparing with the database [Message Digest 5]
    $query = "SELECT * FROM user WHERE uname='$username' AND pass='$password_encrypt'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You Logged In Successfully!";
        header('location: index.html'); //redirect to
    } else {
        echo "Incorrect username and password!";
    }
  }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>