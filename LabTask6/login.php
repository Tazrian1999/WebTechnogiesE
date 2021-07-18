<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name'])){header("location:welcome.php");}
else{require 'header.php';}
require 'Controller/loginCheck.php';
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

 <fieldset style="width: 600px" >
  <legend>LOGIN</legend>

  <label for="name">Name :</label>
  <input type="text" id="name" name="name" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br>

  <input type="submit" value="Submit"><a href="forgotPassword.php">Forgot Password?</a>

 </fieldset>
 <br>

 <?php require 'footer.php';?>
</form>
</body>
</html>