<?php
  $fname=$email=$mbno=$day=$add=$usern=$passw='';
  $flag=true;
  $fnameerr=$lnameerr=$emailerr=$mbnoerr=$dayerr=$generr=$adderr=$userr=$passerr=" ";
  if(isset($_POST['submit']))
  {
    $fname= $_POST['name'];
    $email= $_POST['mail'];
    $mbno= $_POST['mno'];
    $day= $_POST['bday'];
    $add=$_POST['address'];
    $usern=$_POST['usname'];
    $passw=$_POST['pass'];

    if(empty($fname))
    {
      $fnameerr="Firstname required";
      $flag=false;
    }
    if(empty($email))
    {
      $emailerr="Email required";
      $flag=false;
    }
    if(empty($mbno))
    {
      $mbnoerr="Mobile required";
      $flag=false;
    }
    if(empty($day))
    {
      $dayerr="Birthdate required";
      $flag=false;
    }
    if(empty($add))
    {
      $adderr="Address required";
      $flag=false;
    }
    if(empty($usern))
    {
      $userr="User Name required";
      $flag=false;
    }
    if(empty($passw))
    {
      $passerr="Password required";
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

      $sql = "INSERT INTO information (name, email, mobile, birth_date, address, username, password)
          VALUES ('$fname', '$email', '$mbno', '$day', '$add', '$usern', '$passw')";
  
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
  <title>Signup</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <title>Welcome to Books & Us Store</title>
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
  <div class="container m-auto">
    <br><br>
    <h1 style="color:black;">Sign In</h1>
  <form method="post">
   <div class="form-group row">
    <label class="col-sm-2 col-form-label" style="font-size: 20px; color: white;"><b>Name</b></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="name" name="name" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px; color: white;"><b>Email</b></label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="mail" >
    </div>
  </div>
  <br>
   <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 20px; color: white;"><b>Mobile No.</b></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="mobile" name="mno" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 20px; color: white;"><b>Birth Date</b></label>
    <div class="col-sm-5">
      <input type="date" class="form-control" placeholder="birthdate" name="bday" >
    </div>
  </div>
  <br>
   <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 20px; color: white;"><b>Address</b></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="address" name="address" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 20px; color: white;"><b>User name</b></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="User name" name="usname" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label" style="font-size: 20px;color: white;"><b>Password</b></label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass" >
    </div>
  </div>
  <br>
    <div class="col-sm-5">
      <button type="submit" name="submit" class="btn btn-primary"  style="text-align: center;">Register</button>
  
      <button  class="btn btn-primary" style="text-align: center;" formaction="index.php">Login</button>
    </div>
  </div>
</div>
</form>
</body>
</html>
