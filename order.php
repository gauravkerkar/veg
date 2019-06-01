<?php 
    session_start();
    if ($_SESSION['user'] == "") {
        header('location: login.php');
        exit();
    }
?>
<?php include('process.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>ORDER</title>
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

<body>

    <div class="container">
        <div class="table-contain">
            <h2 class="text-center">PLACE YOUR ORDER</h2><br>
            <table class="table table-dark table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
            $query = "SELECT * FROM place_order ORDER BY id ASC";  
            $result = mysqli_query($db, $query);  
            if(mysqli_num_rows($result) > 0)  {  
                 while($row = mysqli_fetch_array($result))  {  
            ?>
                    <form method="post" action="order.php?action=add&id=<?php echo $row["id"]; ?>">
                        <tr>
                            <td width="30%">
                                <?php echo $row["name"]; ?>
                            </td>
                            <td width="10%">₹
                                <?php echo $row["price"]; ?>
                            </td>
                            <td width="10%"><input type="text" name="quantity" class="form-control" value="1"></td>
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <td width="5%"><input type="submit" name="order" class="btn btn-success btn-sm" value="Order"></td>
                        </tr>
                    </form>
                    <?php }
            }
            ?>
                </tbody>
            </table>
            <br>
            <h3>Order Details</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Item Name</th>
                        <th width="10%">Quantity</th>
                        <th width="10%">Price</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php   
                    if(!empty($_SESSION["shopping_cart"]))  {  
                         $total = 0;  
                         foreach($_SESSION["shopping_cart"] as $keys => $values) {  
                    ?>
                    <tr>
                        <td>
                            <?php echo $values["item_name"]; ?>
                        </td>
                        <td>
                            <?php echo $values["item_quantity"]; ?>
                        </td>
                        <td>₹
                            <?php echo $values["item_price"]; ?>
                        </td>
                        <td>₹
                            <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>
                        </td>
                        <td><a href="order.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php  
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                        }  
                    ?>
                    <tr>
                        <td colspan="3" class="text-right"><b>Grand Total</b></td>
                        <td><b>₹
                                <?php echo number_format($total, 2); ?></b></td>
                        <td></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>