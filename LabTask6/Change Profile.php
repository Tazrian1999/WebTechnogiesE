<!DOCTYPE html>
<html>  
<head>  
<title>Change Profile Picture</title>
<style>
.div{
  display: flex;
  justify-content: center;
}
.proPic
{
	width:50%;
}


</style>
</head> 
<body>
 <?php 
session_start();
if (isset($_SESSION['name'])){ require 'header2.php';}
else {header("location:login.php");}
require 'Controller/UploadPhoto.php';
?>

<div class="div">
<fieldset>
<legend>PROFILE PICTURE</legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
  <img class="proPic" 
  src="Uploads/picture.png"<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "picture.png";}
  ?>" alt="Profile Picture"> 
  <input type="file" name="fileToUpload" id="fileToUpload">
  <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>
</div> 
<?php require 'footer.php';?>
</body>
</html>