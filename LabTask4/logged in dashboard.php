<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
}
.right{
	float: right;
	margin-right: 50px;
}
.left{
	float: left;
    
	
}
</style>
</head>
<body>
<header class="grid-container," style="
margin-top: 50px;">
<div class="center">
    <h1 style="margin: center;">Urgent ePharma System</h1>
    <h2><b>Dashboard</b></h2>
</div>  
<div class="right">
<?php echo "Logged in as ".$_SESSION['user_name']."||"; ?>
<a href="logout.php">logout</a>
</div>
</header>
<br>
<br>
<br>
<ul>
<h4><a href="welcome.php"><li>Home</li></a></h4>
<h4><a href="view Profile.php"><li>View Profile</li></a></h4>
<h4><a href="edit Profile.php"><li>Edit Profile</li></a></h4>
<h4><a href="change profile picture.php"><li>Change Profile Picture</li></a></h4>
<h4><a href="change password.php"><li>Change Password</li></a></h4>
</ul>
</body>
</html>