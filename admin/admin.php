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
    <link rel="stylesheet" href="../CSS/admin_style.css">
</head>
<body>  





<div class="hero">


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
                      <a class="nav-link" href="add_admin.php">Admin include</a>
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

        <div class="home">
          <div class="container">
            <h1>Welcome to <br> Admin Panel</h1>
          </div>
        </div>

        <div class="side-bar">
          <img src="../image/menu.png" class="menu">

          <div class="social-links">
            <img src="../image/fb.png" >
            
            <img src="../image/ig.png" >
            <img src="../image/tw.png" >
          </div>

          <div class="useful-links">
            <img src="../image/share.png" >
            <img src="../image/info.png" >

          </div>

        </div>

        <div class="bubbles">

            <img src="../image/bubble.png">
            <img src="../image/bubble.png">
            <img src="../image/bubble.png">
            <img src="../image/bubble.png">
            <img src="../image/bubble.png">
            <img src="../image/bubble.png">
            <img src="../image/bubble.png">

        </div>

</div>


</body>
</html>