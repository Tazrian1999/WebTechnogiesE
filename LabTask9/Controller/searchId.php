<?php
$searchByID = "";
require '../Model/model.php';
$data=showInfo($_GET['id']);
//echo $_GET['id'];
If($data!=null)
{

$id = $data["ID"];
$medicine = $data["Medicine Name"];
$price = $data["Medicine Price"];




echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>Medicine ID</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Medicine Name</th>";
echo "<td  scope='row'>" . $medicine . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Medicine Price</th>";
echo "<td  scope='row'>" . $price . "</td>";
echo "<tr>";

echo "</table>";
}
else if($data==null)
{
	$searchByID="ID not Found";
	echo $searchByID;
}

?>