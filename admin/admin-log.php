<?php
include("../HTML/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center>
    <div class="login">
        <h1>ADMIN <br> Login</h1>
        <br>
        <p>Created By Group 9.</p>
    <br>
    <br>
    <form action=""method="POST">
        Username :
        <input type="text"name="name"placeholder="Enter Username">
        <br>
        <br>
        Password :
        <input type="password"name="password"placeholder="Enter password">
        <br>
        <input type="Submit"name="submit"value="Enter"class="btn">
    </form>
</div>
<br>
<br>

<a href="../html/index.php">

<button type="button" class="btn btn-success">Go back to Home</button></a>
</body></center>
</html>

<?php
if(isset($_POST['submit'])){
    $username=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `admin` WHERE name='$username' and password='$password' ";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count==1){
        header('location: admin.php');

    }else{
        $_SESSION['admin-log']="<div class='error'>Invalid password or username. </div>";
        header('location: admin-log.php');
    }
}



?>