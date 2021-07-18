<!DOCTYPE html>
<html>
<head>
<style>
.right{
	float: right;
	margin-right: 50px;
}
</style>
</head>

<body style="border: 5px solid blue;">

<h1><img src="logo.png" width="100" height="100">Urgent e-Pharma System </h1>	
<br><br>
<div class="right">
	<?php echo "Logged in as Medicine Supplier- ".$_SESSION['name'].""; ?>
	

</div>

<hr>
<br>
<br>
<ul>
<h4><a href="welcome.php"><li>Home</li></a></h4>
<h4><a href="View Profile.php"><li>View Profile</li></a></h4>
<h4><a href="Edit Profile.php"><li>Edit Profile</li></a></h4>
<h4><a href="Change Profile.php"><li>Change Profile Picture</li></a></h4>
<h4><a href="ChangePassword.php"><li>Change Password</li></a></h4>
<h4><a href="Controller/logout.php"><li>Logout</a></li></a></h4>

</ul>
 
<br><br>


</body>
</html>