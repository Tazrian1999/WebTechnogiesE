<?php 

require_once 'model/model.php';
if(isset($_GET['id']))
{
  $medicine = showMedicine($_GET['id']);  
}
else
{
  header('Location: displayMedicine.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>DELETE MEDICINE</title>
</head>
<body>
<form method="POST">
<fieldset style="width: 25%;">
<legend>DELETE MEDICINE</legend>

  Name : <?php echo $medicine['Name'] ?><br>

  Buying Price : <?php echo $medicine['Buying Price'] ?><br>

  Selling Price : <?php echo $medicine['Selling Price'] ?><br>

  Displayable :<?php echo $medicine['Display'] ?><br>

  <hr>
  <a href="Controller/removeMedicine.php?id=<?php echo $medicine['ID'] ?>">Delete</a>

 </fieldset>
</form>
</body>
</html>