<?php

session_start();
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>
            Login-Blood-Donation;
        </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
        <div class="login text-center" id="login1">
            <h1 class="text-center">Admin Login</h1> <br>
           
            <br>
            <form action=""method="POST">
                Name :
            <input type="text"name="name" placeholder="Enter Name" class="text-center">
            <br>
            <br>
            Password:
            <input type="password" name="password" placeholder="Enter password" class="text-center">
            <br>
            <br>
            <input type="submit"name="submit"value="Login"class="btn-primary" class="text-center">
            <br><br>
            </form>
            <p class="text-center">Created By Group 12.</p>
        </div>
</html>
<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $password=md5($_POST['password']);
        $sql="SELECT * FROM office where name='$name' AND password='$password'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            $_SESSION['login']="<div class='success'>Login Successful.</div>";
            $_SESSION['user']=$name;
             
        }
     
    }

?>