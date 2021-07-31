
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
<nav class="navbar" >
  <div class="container-fluid">
    <span class="navbar-brand mt-3 mb-0 h1"><a class="nav-link" href="adminpage.php" style="color:red">Back</a></span>
	</div>
</nav>
<div class="container m-auto">
<h4 style=" color:red; padding-left: 200px"><b>Delete Books here</b></h4><br><br>
<form method="post" action="" >
   <div class="form-group row">
    <label class="col-sm-4 col-form-label" style="font-size: 20px; color:white;">Book Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name="name1" >
    </div>
  </div>
  <br><br>
  <button type="submit" name="submit" class="btn btn-primary"  style="text-align: center;">Delete</button>
  </form>
</div>
</body>