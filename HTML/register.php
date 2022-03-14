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
<body>  
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
                      <a class="nav-link" href="../admin/admin-log.php">Admin login</a>
                      </li>
                  </ul>
         </div>
        </nav>


<div class="container">
<form action=""method="POST">
    <div class="form">
        <ul>
          <center>
        <li>
            <h3>BE A DONOR. HELP THE PEOPLE</h3>
        </li></center>
            <li>
        <h6>Name: <input type="text" name="name"placeholder="name"><br><br></h6></li>
        <li>
        <h6>Address: <input type="text" name="address"placeholder="address"><br><br></h6></li>
        <li>
             <h6>Email: <input type="text" name="Email"placeholder="Email"><br><br></h6>
        </li>
        <li>
             <h6>Phone: <input type="text" name="phone_no"placeholder="Phone No"><br><br></h6>
        </li>
       <li>
           <h6>Blood-type: <select name="blood_type" id="blood">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br></h6>
       </li>
       <li>
       <input class="btn" type="submit"name="submit"value="Submit">
       </li>    
    </ul>
    </div>
</form>
</div>
</html>
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
    
<html>

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