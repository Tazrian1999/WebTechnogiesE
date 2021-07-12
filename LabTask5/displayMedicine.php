<?php  
if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $medicines = showAllmedicines();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>DISPLAY MEDICINE</title>
</head>
<body>
<style>
table,td,th{
border:1px solid black;
    }
</style>
<fieldset style="width:25%;">
<legend>DISPLAY</legend>
<table>
<thead>
<tr>
<th>Name</th>
<th>Profit</th>
<th colspan="2">Edit&Delete</th>
</tr>
</thead>
<body>
<?php 
foreach ($medicines as $i => $medicine): 
if ($medicine['Display'] == "YES" || isset($_POST['name'])):
?>
<tr>

<td><?php echo $medicine['Name'] ?></td>
<td><?php echo $medicine['Selling Price'] - $medicine['Buying Price'] ?></td>
<td><a href="editMedicine.php?id=<?php echo $medicine['ID'] ?>">Edit</a></td>
<td><a href="deleteMedicine.php?id=<?php echo $medicine['ID'] ?>">Delete</a></td>
</tr>
 <?php endif; endforeach; ?>
</body>
</table>
</fieldset>
</body>
</html>