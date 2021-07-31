<?php
  $name=$code=$price=$image=$image1=$cat='';
  $flag=true;
  $nameerr=$codeerr=$priceerr=$imageerr=" ";
  if(isset($_POST['submit']))
  {
    $name= $_POST['name'];
    $cat=$_POST['cat'];
    $code= $_POST['code'];
    $price= $_POST['price'];
    $image1="product-images/";
    $image = $_FILES['image']['name']; 
    $image1.=$image;
    
  
    if(empty($name))
    {
      $nameerr="Bookname required";
      $flag=false;
    }
    if(empty($code))
    {
      $codeerr="Code required";
      $flag=false;
    }
    if(empty($price))
    {
      $mbnoerr="Price required";
      $flag=false;
    }
    if(empty($image))
    {
      $dayerr="Image required";
      $flag=false;
    }
    
if($flag)
{
// Create connection
  $conn = mysqli_connect("localhost","root","","bookstore");

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "INSERT INTO products (name, category,code, price, image)
          VALUES ('$name','$cat',$code', '$price','$image1')";
  
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully.";
      } 
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
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
	<style>
        
		body{
		 background-image: url(product-images/back3.jpg);
		 background-repeat: no-repeat;
		 background-size: 100% 100%;
		 background-attachment: fixed;
		}
		.container {
            top:50%;
            left: 50%;
            transform: translate3d(-50%,-50%, 0);
            position: absolute;
            width: 50%;
         }
	  
		
	   
	   </style>
  

</head>

<body>
<nav class="navbar navbar-expand-sm ">
  <div class="container-fluid">
    <span class="navbar-brand mt-3 mb-0 h1" style="font-size: 30px;color:red;">Welcome Admin</span>
	
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link" href="Delete.php" style="color:red;"> 
          Delete book
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="index.php" style="color:red;">
          Logout
          </a>
      </li> 
      
      
  </div>
</nav>
<div class="container m-auto">
<h4 style=" color:red; padding-left: 200px"><b>Add New Books here</b></h4><br><br>
<form method="post" enctype="multipart/form-data">
   <div class="form-group row">
    <label class="col-sm-4 col-form-label" style="font-size: 20px; color:white;">Book Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name="name" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" style="font-size: 20px; color: white;">Category</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="cat" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" style="font-size: 20px; color: white;">Code</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="code" >
    </div>
  </div>
  <br>
   <div class="form-group row">
    <label  class="col-sm-4 col-form-label" style="font-size: 20px; color: white;">Price</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="price" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label  class="col-sm-4 col-form-label" style="font-size: 20px; color: white;">Book Image</label>
    <div class="col-sm-6">
	<input class="form-control" type="file" name="image">
    </div>
	<div class="col-sm-5">
      <button type="submit" name="submit" class="btn btn-primary"  style="text-align: center;">Add</button>
  
    </div>
  </div>
</div>  
</body>
</html>