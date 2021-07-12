<!DOCTYPE html>
<html>
<head>
<title>Add Medicine</title>
</head>
<body>
<form action="controller/saveMedicine.php" method="POST" enctype="multipart/form-data">
 <fieldset style="width: 25%;">
  <legend>ADD MEDICINE</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>

  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice"><br>

  <hr>

  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "saveMedicine" value="Save">

 </fieldset>
</form>
</body>
</html>