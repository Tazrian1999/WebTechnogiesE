<!DOCTYPE html>  
<html>  
<head>  
<title>INSERT MEDICINES</title>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
</head>  
<body class="banner">
<?php 

session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:login.php");}

require 'Controller/storeMedicines.php';

?>

<div class="div">
<fieldset style="width: 400px">
<legend>INSERT NEW MEDICINES</legend>                 
<form name="form" method="post"> 
  <label for="name">Medicine Name :</label>
  <input type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()" onclick="checkName()">
  <span class="error" id="nameErr"> <?php echo $nameErr;?></span><hr>

  <label for="price">Medicine Price:</label>
  <input type="text" id="price" name="price" onkeyup="checkPrice()" onblur="checkPrice()" onclick="checkPrice()">
  <span class="error" id="priceErr"> <?php echo $priceErr;?></span><hr>
<input type="submit" name="submit" value="Insert">
<input type="reset" name="reset" value="Reset">
</form>
</fieldset>  
</div>
<?php
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
</div> 
<?php require 'footer.php';?>
</body>  
</html>  