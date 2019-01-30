<!DOCTYPE html>
<html>

<head>
    <title>CONTECT US</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Cascading Stylesheet File-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--Bootstrap 4 CDN Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Fontawesome icons link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="icon" href="./img/siteicon.png">
</head>

<body class="menu-font">
    <div class="CONTECT text-center">
        <div class="text-center">
            <span class="menu-icon"><img src="./img/logo.png" alt="logo" width="150em"></span>
            <p class="display-4 menu-heading">CONTACT US</p>
            <span class="menu-nev"><a class="menu-nev-a" href="./index.php">HOME</a> &nbsp;&nbsp;<span class="">CONTACT
                    US</span></span>
            <br><br>
            <h5>WE'D <i class="con-icon fa fa-heart fa-1x"></i>&nbsp;TO HELP !</h5>
            <p>We Like To Create Things With Fun, Open Minded People. Fell Free To Say Hello.</p>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6">
                <h3 class="text-center">Write Us</h3>
                <hr>
                <form action="contect.php" method="POST">
                    <div class="form-group form-inline">
                        <input type="name" class="form-control" name="first_name" required placeholder="First-Name">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="name" class="form-control" required name="last_name" placeholder="Last-Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" pattern="[1-9]{1}[0-9]{9}" max-length="10" class="form-control" required
                            placeholder="Phone-No.">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="discription" placeholder="Discription.." required rows="7"></textarea>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="col-sm-6 map">
                <div class="container text-center">
                    <h3>Call Us Now</h3>
                    <hr>
                    <h5><b>Our Customer Care Is Avilable FOR 24/7 To help You.</b></h5>
                    <p>Toll-Free:- 1800-3800-3800,&nbsp 1234-1234-876.</p>
                </div>
                <div>
                    <br>
                    <h3 class="text-center">Visit Us Personally</h3>
                    <hr>
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="514" height="220" id="gmap_canvas" src="https://maps.google.com/maps?q=Government%20polytechnic%20Panjim%20%20&t=k&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pureblack.de</a></div>
                        <style>
                            .mapouter {
                                text-align: right;
                                height: 220px;
                                width: 514px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 220px;
                                width: 514px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="font-weight-light ">
            &copy; 2018 maxyum.com | All Rights Reserved.
        </footer>
       
<!-- php -->
<?php 
if(isset($_POST['submit'])){
    $to = "gauravkerkar1999@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!-- /php -->

</body>

</html>