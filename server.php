<?php
session_start();
// define variables and set to empty values
$name = $email = $mobno = $address = $username = $password = "";
$nameErr = $emailErr = $mobnoErr = $addressErr = $usernameErr = $passwordErr = $loginErr = "";

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'maxyum');

// If the register button is clicked
if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobno = mysqli_real_escape_string($db, $_POST['mobno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

// Display error if the fields are empty   
  if (empty($_POST["name"])) {
    $nameErr = "Name is required!";
  } 

  if (empty($_POST["email"])) {
    $emailErr = "Email is required!";
  }

  if (empty($_POST["mobno"])) {
    $mobnoErr = "Mobile number is required!";
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required!";
  }

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required!";
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required!";
  }

  // If no errors, save the user's data to the database
  if ($name != "" && $email != "" && $mobno != "" && $address != "" && $username != "" && $password != "") {
    $password_encrypt = md5($password); // Password encryption before storing in the database [Message Digest 5]
    $query = "INSERT INTO user_login (name, email, mobile, address, username, password) VALUES ('$name', '$email', '$mobno', '$address', '$username', '$password_encrypt')";
    mysqli_query($db, $query);
    header('location: login.php'); //redirect to login page
    exit();	
  }
}

// Login user
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required!";
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required!";
  }

  if ($username != "" && $password != "") {
    $password_encrypt = md5($password); // Password encryption before comparing with the database [Message Digest 5]
    $query = "SELECT * FROM user_login WHERE username='$username' AND password='$password_encrypt'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result)==1) {
        $_SESSION['user'] = $username;
        header('location: order.php'); //redirect to order page
        exit();	
    } else {
        $loginErr = "Incorrect username and password!";
    }
  }
}

?>