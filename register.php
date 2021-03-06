﻿<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>
<!DOCTYPE html >
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale-1.0">
<meta http-equiv="X-UA-compatible" content="ie=edge">

<!-- Font awsome -->
<script src="https://kit.fontawesome.com/5052d0b929.js" crossorigin="anonymous"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

<!-- custome styling -->
<link rel="stylesheet" href="assets/css/style.css">
<title>Register</title>
</head>

<body>
<!-- include header here -->
<?php include(ROOT_PATH . "/app/includes/header.php");?>

<div class="auth-content"> <form action="register.php" method="post"> 
  <h2 class="form-title">Register</h2> 
<?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

 <div> 
 <label>Username</label> 
 <input type="text" name="username" value="<?php echo $username; ?>" class="text-input"> 
 </div> 
 <div>
 <label>email</label>
  <input type="email" name="email" value="<?php echo $email; ?>" class="text-input"> 
  </div>
  <div>
 <label>password</label>
  <input type="password" name="password" value="<?php echo $password; ?>" class="text-input"> 
  </div>
<div>
 <label>password conformation</label>
  <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input"> 
  </div><button type="submit" name="register-btn" class="btn btn-big" > Register </button>

<p>or<a href="<?php echo BASE_URL .'/login.php'?>">sign in</a></p>



   </form>



</div>

<!-- JQuery --> <!-- From JQuery website free-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Custom scripts -->
<script src="assets/js/scripts.js"></script>
</body>

</html>
