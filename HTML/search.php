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
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<html>
<body bg color="white">
<title>Blood Bank System</title>
<nav class="navbar">
        <div class="container">
                <div class="max">
                    <a class="nav-link active" aria-current="page" href="#">ROKTO.</a>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="step.php">Steps</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="search.php">Search Donor</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../admin/admin.php">Admin login</a>
                      </li>
                  </ul>
         </div>
        </nav>
<center>
<form action=""method="POST">
<table>
<div class="form">
        <ul>
        <li>
            <h3>Search Donor.</h3>
        </li>
</ul>
 <tr>
                    <td><font size="5">District:</font></td>
                    <td><select name="city">
                                <option >None</option>
                                <option>Chittagong</option>
                                <option>Dhaka</option>
                                <option>Khulna</option>
                                <option>Sylhet</option>
                                <option>Rajshahi</option>
                                <option>Rangpur</option>
                                <option>Mymensingh</option>
                        </select></td>
                </tr>
				
                <tr>
                    <td><font size="5">Blood Group:</font></td>
                    <td><select name="bgroup">
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                        </select></td>
                </tr>

				<tr>
                    <td></td>
                    <td><input type="submit" value="Search" name="submit" class="btn"></td>
                    
                </tr>
</div>

</table>
</form>
</center>

<?php
 if(isset($_POST['submit'])){ 
$add=$_POST['city'];
$bgrp=$_POST['bgroup'];
$sql="SELECT * FROM `register` WHERE Address='$add' and Blood_type='$bgrp'";
    $res=mysqli_query($con,$sql);
      $count=mysqli_num_rows($res);
       if($count>0){
      while($rows=mysqli_fetch_assoc($res))
      {
          $id=$rows['id'];
          $name=$rows['Name'];
          $Address=$rows['Address'];
          $Email=$rows['Email'];
          $phone_no=$rows['phone_no'];
          $Blood_type=$rows['Blood_type'];
          ?>
          
              <br>
              <br>
           </tr> 


           <div class="col">
                                            <div class="card h-100">
                                                
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                        <img src="../image/people.webp" alt=""height=170 width=170>
                                                        </div>
                                                        <div class="col-md-9">
                                                        <h6 class="card-title">Name : <?php echo $name;?></h4>
                                                      
                                                      <h6>Address : <?php echo $Address;?></p>
                      
                                                      <h6>Blood Type: <?php echo $Blood_type;?></h5>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                          
                                                    </div>
                                                  </div>
                                               </div>









           <?php
          }
        }
        }
          ?>




















<div class="contact">
  <div class="con">
    <h4>Contact Us</h4>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <ul>
          <li>
            <a href=""><img src="https://img.icons8.com/ios-filled/50/000000/facebook-new.png"/></a>
            <a href=""><img src="https://img.icons8.com/ios-filled/50/000000/instagram-new--v1.png"/></a>
            <a href=""><img src="https://img.icons8.com/ios-filled/50/000000/twitter.png"/></a>
            </li>
        </ul>
        <div class="footer2">
          <img src="https://img.icons8.com/ios-filled/50/000000/marker.png"/>
          <p>Dhaka,Bangladesh</p>
          <img src="https://img.icons8.com/ios-filled/50/000000/ringer-volume.png"/>
          <p>+8801629104730</p>
          <img src="https://img.icons8.com/ios-filled/50/000000/gmail-new.png"/>
          <p>BloodInfo.gmail</p>
      </div>
      </div>
    <div class="col-md-6">
    <form action="https://formspree.io/f/mqknlkpa"method="POST">
    <div class="form">
        <ul>
            <li>
                <input type="text" name="name"placeholder="name"><br></li>
        <li>
              <input type="text" name="email"placeholder="Email"><br>
        </li>
        <li>
             <input type="text" name="phone"placeholder="Phone No"><br>
        </li>
       <li> <textarea name="message"cols="23"rows="3"></textarea></li>
       <li>
       <input class="btn1 btn-dark" type="submit"name="submit"value="Submit">
       </li>    
    </div>
    </form>
    </div>
  </div>
</div>
<div class="container">
  <footer>
    <small><img src="https://img.icons8.com/ios-glyphs/30/000000/email.png"/>All right reserved. Created by Group 12.</small>
</footer>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>


</html>