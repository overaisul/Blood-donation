<?php
include("../HTML/connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>  



    <nav class="navbar">
        <div class="container">
                <div class="max">
                    <a class="nav-link active" aria-current="page" href="#">ROKTO.</a>
                </div>
                <ul class="nav justify-content-end">
                   
                    <li class="nav-item">
                      <a class="nav-link" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="add_admin.php">Add Admin</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="donor.php">Donor List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Logout.php">Logout</a>
                      </li>
                  </ul>
         </div>
        </nav>

<center>
<form name="Search" method="post" action="">
<div class="form20">
<table>



 <tr>
    <tr>
        <td>Name:</td>
        <td><input type="text"name="name" placeholder="Enter your name"></td>
    </tr>
    <td>Password:</td>
       <td> <input type="password" name="password"placeholder="Enter Password"></td>
    <tr>
        <td>Phone No:</td>
        <td><input type="text"name="phone_no" placeholder="Enter your Number"></td>
    </tr>
    <tr>
        <td>Address :</td>
        <td><input type="text"name="address" placeholder="Enter your Address"></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Add Admin" class="btn">

        </td>
    </tr>
                    
                    
 </tr>

</table>
</div>
</form>
</center>

<?php

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $password=$_POST['password'];
  $phone_no=$_POST['phone_no'];
  $address=$_POST['address'];
  $sql="INSERT INTO `admin`(`id`, `name`, `password`, `phone_no`, `address`) VALUES ('','$name','$password','$phone_no','$address')";
  $res=mysqli_query($con,$sql)or die(mysqli_error());
  header('location: admin.php');
}

?>