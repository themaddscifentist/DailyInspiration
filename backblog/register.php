<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 

?>

<!DOCTYPE html>
<html lan="eng">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">

	<!------ Font Awesome -------->
	<script src="https://kit.fontawesome.com/c263f93149.js" crossorigin="anonymous"></script>


    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 

	<!--Custom Styling with CSS--->
	<link rel="stylesheet" href="assets/css/style.css">

	<title>Register</title>
</head>

<body>
	
  <?php include(ROOT_PATH . "/app/Includes/header.php"); ?>

   <div class="auth-content">

      <form action="register.php" method="post">
        <h2 class="form-title">Register</h2>

         <?php include(ROOT_PATH . "/app/Helpers/formerrors.php"); ?> 

        
        <div>
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
        </div>
        <div>
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
        </div>
        <div>
          <label>Password Confirmation</label>
          <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
        </div>
        <div>
          <button type="submit" name="register-btn" class="btn btn-big">Register</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
      </form>

   </div>

     <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>


<!-- Custom Script -->
   <script src="assets/js/scripts.js"></script>js
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>


</html>
