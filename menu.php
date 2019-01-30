<!DOCTYPE html>
<html>

<head>
  <title>MENU</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--Cascading Stylesheet File-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--Bootstrap 4 Link-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="icon" href="./img/siteicon.png">
</head>

<body class="menu-font">
  <div class="menu text-center">
    <div class="text-center">
      <span class="menu-icon"><img src="./img/logo.png" alt="logo" width="150em"></span>
      <p class="display-3 menu-heading">OUR MENU</p>
      <span class="menu-nev"><a class="menu-nev-a" href="./index.php">HOME</a> &nbsp;&nbsp;<span class="">MENU</span></span>
    </div>
  </div>


  <div class="container text-center">
    <!-- Nav pills -->
    <br><br>
    <ul class="nav nav-pills justify-content-center" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">MAIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1">DESSERTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu2">DRINKS</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
        <h3>MAIN</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
        <div class="row">
          <div class="col-md-4">
            <ul class="menu-dish">
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/rb.PNG" alt="dish-image">
                <div>
                  <h6>ROAST BREAKFAST</h6>
                  <h5>400/-</h5>
                </div>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/jcs.PNG" alt="dish-image">
                <h6>JERK CHICKEN SANDWICH</h6>
                <h5>320/-</h5>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/hr.PNG" alt="dish-image">
                <h6>HUEVOS RANCHEROS</h6>
                <h5>350/-</h5>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="menu-dish">
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/ss.png" alt="dish-image">
                <h6>SEAFOOD STEW</h6>
                <h5>400/-</h5>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/ppb.png" alt="dish-image">
                <h6>PULLED PORK BURGER</h6>
                <h5>320/-</h5>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/srfc.png" alt="dish-image">
                <h6>SLOW ROASTED FRIED CHICKEN</h6>
                <h5>480/-</h5>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="menu-dish">
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/scc.jpg" alt="dish-image">
                <h6>SMOKED CHICKEN CROQUETTE</h6>
                <h5>300/-</h5>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/sr.png" alt="dish-image">
                <h6>SEAFOOD RISOTTO</h6>
                <h5>420/-</h5>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/cm.png" alt="dish-image">
                <h6>CROQUE MONSIEUR</h6>
                <h5>350/-</h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="menu1" class="container tab-pane fade"><br>
        <h3>DESSERTS</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
        <ul class="menu-dish">
          <div class="row">
            <li class="dish-head col-md-3"><img class="img-thumbnail" width="250" src="./img/cnt.PNG" alt="dish-image">
              <h5>CHOCOLATE NUTELLA TART</h5>
              <h6>280/-</h6>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="dish-head col-md-3"><img class="img-thumbnail" width="250" src="./img/bp.PNG" alt="dish-image">
              <h5>BANANA PANCAKES</h5>
              <h6>320/-</h6>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="dish-head col-md-3"><img class="img-thumbnail" width="250" src="./img/scc.PNG" alt="dish-image">
              <h5>S'MORES CUSTARD CAKE</h5>
              <h6>270/-</h6>
            </li>
          </div>
        </ul>
      </div>
      <div id="menu2" class="container tab-pane fade"><br>
        <h3>DRINKS</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
          rem
          aperiam.</p>
        <div class="row">
          <div class="col-md-4">
            <ul class="menu-dish">
              <li class="dish-head"><img class="img-thumbnail" width="240" src="./img/rit.jpg" alt="dish-image">
                <h5>ROASTED ICE TEA</h5>
                <h6>120/-</h6>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="240" src="./img/cs.jpg" alt="dish-image">
                <h5>CHOCOLATE SHAKE</h5>
                <h6>190/-</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="menu-dish">
              <li class="dish-head"><img class="img-thumbnail" width="240" src="./img/pl.jpg" alt="dish-image">
                <h5>PINK LEMONADE</h5>
                <h6>120/-</h6>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="240" src="./img/amc.jpg" alt="dish-image">
                <h5>AVOCADO MANGO CHIA</h5>
                <h6>220/-</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="menu-dish">
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/foj.jpg" alt="dish-image">
                <h5>FRESH ORANGE JUICE</h5>
                <h6>120/-</h6>
              </li>
              <li class="dish-head"><img class="img-thumbnail" width="250" src="./img/mw.jpg" alt="dish-image">
                <h5>MINERAL WATER</h5>
                <h6>40/-</h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
      <hr size="10px">
      <div class="menu-order-btn">
        <p class="display-5">Why Wait?&nbsp;<br><a href="order.php" class="btn btn-warning">ORDER NOW</a>
      </div>
    </div>
  </div>

</body>

</html>