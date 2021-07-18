<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<style>
.div{
  display: flex;
  justify-content: center;
}
.justLeft
{
	float: left;
}
.justRight
{
	float: right;
}
.textCenter
{
	text-align: center;
}
.proPic
{
	width:1%;
}



</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>

<legend><b>PROFILE</b></legend>

<div class="justLeft">
  <p>Name           :   <?php echo $name ?></p><hr>
  <p>ID             :   <?php echo $id ?></p><hr>
  <p>Email          :   <?php echo $email ?></p><hr>
  <p>Gender         :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday:  <?php echo $dob ?></p>
</div> 

<div class="justRight">
<b><img style=" width:100%" src="picture.png" alt="Profile Picture"></b>
<div class="textCenter;"> <a href="Change Profile.php" ><b>Change Profile Picture</b></a>
  </div>
</div>

<br>
<br>
<a href="Edit Profile.php"><b>Edit Profile</b></a>
<br>
<a href="changePassword.php"><b>Change Password</b></a>
</fieldset> 
</div>


<?php require 'footer.php';?>
</body>  
</html> 