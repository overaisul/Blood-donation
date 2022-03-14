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
                      <a class="nav-link" href="add_admin.php">Admin Include</a>
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
           <div class="container">
                                         <div class="card-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                        <img src="../image/people.webp" alt=""height=170 width=170>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <h6>Name : <?php echo $name;?></h6>
                                                          <h6>Address : <?php echo $Address;?></h6>
                                                          <h6>Email: <?php echo $Email;?></h6>
                                                          <h6>Phone No: <?php echo $phone_no;?></h6>
                                                          <h6>Blood Type: <?php echo $Blood_type;?></h6>

                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                          
                                                    </div>
                                                  </div></div>


           <?php
          }
        }
        }
          ?>
