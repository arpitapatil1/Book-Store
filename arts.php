<?php include 'cartnew.php';?>
<html lang="en">
<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Welcome to Books & Us Store</title>
  <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
  <link rel='stylesheet' href='css/stylenew.css' type='text/css' media='all' />

</head>

<body>
  <?php include 'header.php';?>


<div style="width:700px; margin:auto;">
<?php
//session_start();
$con = mysqli_connect("localhost","root","","bookstore");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
    }
$status="";

$result = mysqli_query($con,"SELECT * FROM `products` WHERE `category`='Arts'");

while($row = mysqli_fetch_assoc($result)){
    
    
    echo "<div class='product_wrapper'>
        <form method='post' action=''>
        <input type='hidden' name='code' value=".$row['code']." />
        <div class='image'><img src='".$row['image']."' /></div>
        <div class='name'>".$row['name']."</div>
          <div class='price'>$".$row['price']."</div>
        <button type='submit' class='buy'>Buy Now</button>
        </form>
          </div>";
     
        }
mysqli_close($con);
?>
</div> 
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</div>
<?php include 'footer.php';?>
</body>
</html>

