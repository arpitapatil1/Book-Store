
<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <title>Welcome to Books & Us Store</title>
    <style>
        .container {
            top:50%;
            left: 50%;
            transform: translate3d(-50%,-50%, 0);
            position: absolute;
            width: 50%;
            border: 3px solid black;
            border-radius: 35px;
         }
         a{
             text-decoration:none;
             text-align: end;
             
         }
         body{
             background-image: url(product-images/back3.jpg);
             background-repeat: no-repeat;
             background-size: 100% 100%;
             background-attachment: fixed;
           }
    </style>
</head>
<body>
    <div class="container m-auto">
        <h2 style="text-align: center; color: black;">Login</h2><br>
    <form action="validate.php" method="POST">
        <div class="form-group row">
          <label  class="col-sm-4 col-form-label" style="text-align: end; color: white;"><b>Username</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="username" placeholder="username" style="width:60% ">
          </div>
        </div>
        <div class="form-group row mt-5">
          <label  class="col-sm-4 col-form-label" style="text-align: end; color: white;"><b>Password</b></label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="password"  placeholder="password" style="width:60% ">
            <a href="#">Forgot Password?</a><br>
            <a href="signin.php">New User?Sign up</a><br><br>
            <button class=" btn btn-primary" name="login">Login</button>
            
            
          </div>
          
        </div>
      </form>
</body>
