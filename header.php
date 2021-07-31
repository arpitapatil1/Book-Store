<?php
  $name=$name1="";
  $name= $_POST['name'];
  function Sum()
{
    $GLOBALS['name1'] = $GLOBALS['name'];
    
} 

Sum();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel='stylesheet' href='css/stylenew.css' type='text/css' media='all' />
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color:#004d80;">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="kids.php">Kids</a>
          <a class="dropdown-item" href="fiction.php">Fiction</a>
          <a class="dropdown-item" href="arts.php">Arts</a>
          <a class="dropdown-item" href="sports.php">Sports</a>
          <a class="dropdown-item" href="tourism.php">Tourism</a>
          <a class="dropdown-item" href="motivation.php">Motivation</a>
        </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav ml-auto">
            <li class="nav-item  login">
                <a class="nav-link" href="index.php">Logout</a>
              </li>
                
            <div class='cart_div'>
                <a href='cart.php'><img src='cart-icon.png'/></a>
            </div>
              </li> 

          </ul>
          
  </nav>
  <form  action="search.php" method="POST">
<div class="row" style="padding-top:80px">
    
   
    <div class="col-6">
      <h3 style="color:rgb(59, 199, 235);text-align: center;"><strong>Welcome to Books & Us Store</strong></h3>
    </div>

  <div class="col-6">
    <div class="input-group mb-3">
    
        <input type="text" class="form-control" placeholder="Search By Book Title" name="name" >
        
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit"  name="Search">Search</button>
        </div>
        
    </div>
      
  </div></div>
</form>
     <div class="container bg-light">
        <div class="m-auto" style="width:700px">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner ">
            <div class="carousel-item active">
              <img src="product-images/b5.png" class="d-block w-100 " alt="slide1">
            </div>
            <div class="carousel-item">
              <img src="product-images/b2.jpg" class="d-block w-100 " alt="slide2">
            </div>
            <div class="carousel-item">
              <img src="product-images/b3.jpg" class="d-block w-100"alt="slide3">
            </div>
            <div class="carousel-item">
                <img src="product-images/b1.jpg" class="d-block w-100"alt="slide4">
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
     </div>
 </div>  
<br>
<br>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!-- Always remember to call the above files first before calling the bootstrap.min.js file -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
</body>
</html>
