<?php
  $name='';
  $flag=true;
  if(isset($_POST['submit']))
  {
    $name= $_POST['name1'];
  }
  if($flag)
{
// Create connection
  $conn = mysqli_connect("localhost","root","","bookstore");

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "DELETE FROM products WHERE name1=$name";
  
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully.";
      } 
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
  }