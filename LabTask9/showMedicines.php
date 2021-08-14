<!DOCTYPE html>  
<html>  
<head>  
<title>SEARCH MEDICINES</title> 
<script>
	function searchId(id)
{//document.getElementById("searchByID").style.backgroundColor = "red";
	if (document.getElementById("searchByID").value == "") 
    {
    	document.getElementById("txtHint").innerHTML =  "Information will be shown here...";
		document.getElementById("searchByIDErr").innerHTML = "ID Required";
		document.getElementById("searchByIDErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
		//document.getElementById("search").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/searchId.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
		//document.getElementById("search").style.borderColor = "black";
	}
}
</script>
<link rel="stylesheet" href="style.css">
</head>  
<body class="banner">
<?php 

session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:login.php");}

require_once 'Controller/medicineinfo.php';

$medicines = fetchAllMedicines();
?> 

<div class="container-fluid">

<div class="container">
	<div class="container-fluid, textCenter">
		<h1>Search All Medicines</h1>
		<h4>Enter Serial: 
			<input type="number" name="searchByID" id="searchByID" onkeyup="searchId(this.value)">
			<span id="searchByIDErr"></span>
		</h4>
	
	</div>
</div>


	<div id="txtHint">

<h3 class="container-fluid, textCenter">Available Medicines</h3>

<table class="table">
     <thead class="table-dark">
		<tr>
			<th>Medicine Id</th>
			<th>Medicine Name</th>
			<th>Medicine Price</th>
				
		</tr>
	</thead>
	<tbody>
		<?php foreach ($medicines as $i => $medicine): ?>
			<tr>
			
				<td><?php echo $medicine['ID'] ?></td>
				<td><?php echo $medicine['Medicine Name'] ?></td>
				<td><?php echo $medicine['Medicine Price'] ?></td>

			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</div>

<?php require 'footer.php';?>
</body>  
</html>  