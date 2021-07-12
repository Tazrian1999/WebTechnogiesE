<?php
if (isset($_POST['updateMedicine'])) 
{
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	if (isset($_POST['display'])) 
	{
		$data['display'] = "YES";
	}
	else
		$data['display'] = "NO";

  if (updateMedicine($_GET['id'], $data)) 
  {
  	echo 'Successfully updated!!';
  	header('Location: displayMedicine.php');
  }
}
?>