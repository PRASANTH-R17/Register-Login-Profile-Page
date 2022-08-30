<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   
   

   $select = " SELECT * FROM website_04 WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      
         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');
         $_SESSION['user_email'] = $row['email'];
         header('location:user_page.php');
         $_SESSION['user_gender'] = $row['gender'];
         header('location:user_page.php');
         $_SESSION['user_age'] = $row['age'];
         header('location:user_page.php');
         $_SESSION['user_phone'] = $row['phone'];
         header('location:user_page.php');
         $_SESSION['user_door'] = $row['door'];
         header('location:user_page.php');
         $_SESSION['user_address'] = $row['address'];
         header('location:user_page.php');
         $_SESSION['user_landmark'] = $row['landmark'];
         header('location:user_page.php');
         $_SESSION['user_state'] = $row['state'];
         header('location:user_page.php');
         $_SESSION['user_district'] = $row['district'];
         header('location:user_page.php');
         $_SESSION['user_pincode'] = $row['pincode'];
         header('location:user_page.php');
      
      
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- css file  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>