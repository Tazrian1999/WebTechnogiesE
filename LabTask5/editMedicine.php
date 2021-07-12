<?php 

require_once 'model/model.php';
require_once 'controller/updateMedicine.php';
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
<title>Edit Medicine</title>
</head>
<body>
<form method="POST">
 <fieldset style="width: 25%;">
  <legend>EDIT MEDICINE</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value="<?php echo $medicine['Name'] ?>"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice" value="<?php echo $medicine['Buying Price'] ?>">
  <br>
  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice" value="<?php echo $medicine['Selling Price'] ?>"><br>

  <hr> 

  <input type="checkbox" id="display" name="display"<?php if($medicine['Display']== "YES"){echo "checked";} ?>>
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "updateMedicine" value="Save">

 </fieldset>
</form>
</body>
</html>