<?php

session_start();
include("connection.php");

?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
   </head>
<body>
    <br>
    <br>
    <br>
    <br>
    <center>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action=""method="POST">
      <div class="input-box">
      <input type="text" placeholder="Enter your name" name="name">
      </div>
      <div class="input-box">
      <input type="text" placeholder="Enter your Address"name="address">
      </div>
      <div class="input-box">
      <input type="text" placeholder="Enter your Email" name="Email">
      </div>
      <div class="input-box">
      <input type="text" placeholder="Enter your Phone No"name="phone_no">
      </div>
      <div class="input-box">
      <h4>Blood-type: <select name="blood_type" id="blood"required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br></h4>
      </div>
      <input class="btn" type="submit"name="submit"value="Register Now">
      <br> 

      <div class="input-box button">
          <a href="index.php">
        <input type="text" value="Go back to Home"></a>
      </div>
    </form>
  </div>
  </center>


  <?php
 if(isset($_POST['submit'])){ 

  $Name=$_POST['name'];
  $Address=$_POST['address'];
  $Email=$_POST['Email'];
  $phone_no=$_POST['phone_no'];
  $Blood_type=$_POST['blood_type'];
  $sql22="select max(id) as id from register";
     if($res22=mysqli_query($con,$sql22)){
      $row=mysqli_fetch_assoc($res22);
      $sno=$row['id']+1;

  }
  else "error ";
  $sql3="INSERT INTO `register`(`id`, `Name`, `Address`, `Email`, `phone_no`, `Blood_type`) VALUES ('$sno','$Name','$Address','$Email','$phone_no','$Blood_type')";
$res=mysqli_query($con,$sql3);


 }

?>


</body>
</html>
