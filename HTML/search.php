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
<body bgcolor="white">
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
                        <a class="nav-link" href="admin-log.php">Admin login</a>
                      </li>
                  </ul>
         </div>
        </nav>
<center>
<form action=""method="POST">
<table>
 <tr>
                    <td><font size="6">District:</font></td>
                    <td><select name="city">
                                <option>Chittagong</option>
                                <option>Dhaka</option>
                                <option>Khulna</option>
                                <option>Syhlet</option>
                                <option>Rajshahi</option>
                                <option>Rangpur</option>
                                <option>Mymensingh</option>
                        </select></td>
                </tr>
				
                <tr>
                    <td><font size="6">Blood Group:</font></td>
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
                    <td><font size="6">Date of Blood Donation:</font></td>
                    <td>
                        <input type="text" id="date" name="Date" value="dd/mm//yyyy"><br>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td><input type="submit" value="Search" name="submit"/></td>
                    
                </tr>

</table>
</form>
</center>
</body>

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
                                                    <h5 class="card-title"><?php echo $name;?></h5>
                                                    <p><?php echo $Address;?></p>
                                                    <h5><?php echo $Blood_type;?></h5>
                                                    
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
      <div class="form">
      <input type="text"placeholder="Name"required="required">
      </div>
      <div class="form">
        <input type="text"placeholder="Email"required="required">
      </div>
      <div class="form">
          <input type="text"placeholder="Phone"required="required">
      </div>
      <div class="form">
           <textarea name="" id="" cols="23" rows="3"placeholder="Message"></textarea>
      </div>
      <div class="form">
        <button class="btn1 btn-dark" type="button">Send</button>
      </div>
  </div>
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