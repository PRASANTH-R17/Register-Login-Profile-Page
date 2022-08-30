<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $phone = $_POST['phone'];
   $door = $_POST['door'];
   $address = $_POST['address'];
   $landmark = $_POST['landmark'];
   $state = $_POST['state'];
   $district = $_POST['district'];
   $pincode = $_POST['pincode'];

   $select = " SELECT * FROM website_04 WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO website_04(email, password, name, gender, age, phone,door, address, landmark, state, district, pincode) VALUES('$email', '$pass', '$name', '$gender','$age', '$phone', '$door','$address', '$landmark', '$state','$district', '$pincode')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- css file -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
   
      <p>Register <a>Details</a></p>
      <input type="email" name="email" required placeholder="enter your email id">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
   

      <p>Personal <a>Details</a></p>
      <input type="text" name="name" required placeholder="Full Name">
      <select name="gender" required>
         <option selected>-- Select Gender --</option>
         <option >Male</option>
         <option >Female</option>
         <option>Others</option>
      </select>
      <input type="text" name="age" required placeholder="Age">
      <input type="text" name="phone" required placeholder="Phone No.">

      <p>Address <a>Details</a></p>
      <input type="text" name="door" required placeholder="Flat, House no, Building">
      <input type="text" name="address" required placeholder="Address">
      <input type="text" name="landmark" required placeholder="Landmark">

      <select name="state" required>
         <option selected>-- Select State --</option>
         <option >Tamil Nadu</option>
      </select>
      
      <select name="district" required>
         <option selected>-- Select District --</option>
         <option >Ariyalur</option>
         <option >Chennai</option> 
         <option >Coimbatore</option> 
         <option >Cuddalore</option> 
         <option >Dharmapuri</option> 
         <option >Dindigul</option> 
         <option >Erode</option> 
         <option >Kanchipuram</option> 
         <option >Kanyakumari</option> 
         <option >Karur</option> 
         <option >Krishnagiri</option> 
         <option >Madurai</option> 
         <option >Nagapattinam</option>
         <option >Namakkal</option> 
         <option >Nilgiris</option> 
         <option >Perambalur</option> 
         <option >Pudukkottai</option> 
         <option >Ramanathapuram</option> 
         <option >Salem</option> 
         <option >Sivaganga</option> 
         <option >Thanjavur</option>
         <option >Theni</option> 
         <option >Tiruchirappalli</option> 
         <option >Tirunelveli</option> 
         <option >Tiruppur</option> 
         <option >Tiruvallur</option> 
         <option >Tiruvannamalai</option> 
         <option >Tiruvarur</option> 
         <option >Tuticorin</option> 
         <option >Vellore</option> 
         <option >Villupuram</option> 
         <option >Virudhunagar</option>
      </select>


      <input type="text" name="pincode" required placeholder="Pincode">




      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>