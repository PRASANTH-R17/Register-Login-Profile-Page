<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
    
      <h3><span>User Details</span></h3>
      
      <h2>Name : <span><?php echo $_SESSION['user_name'] ?></span></h2>
      <h2>Age : <span><?php echo $_SESSION['user_age'] ?></span></h2>
      <h2>Gender : <span><?php echo $_SESSION['user_gender'] ?></span></h2>
      <h2>Email : <span><?php echo $_SESSION['user_email'] ?></span></h2>
      <h2>Phone no : <span><?php echo $_SESSION['user_phone'] ?></span></h2>
      <p >‎ </p>
      <h3><span>Address Details</span></h3>
      <h2>Door No : <span><?php echo $_SESSION['user_door'] ?></span></h2>
      <h2>Address : <span><?php echo $_SESSION['user_address'] ?></span></h2>
      <h2>Landmark : <span><?php echo $_SESSION['user_landmark'] ?></span></h2>
      <h2>State : <span><?php echo $_SESSION['user_state'] ?></span></h2>
      <h2>District : <span><?php echo $_SESSION['user_district'] ?></span></h2>
      <h2>Pincode : <span><?php echo $_SESSION['user_pincode'] ?></span></h2>
      <h2 >‎ </h2>
      
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>