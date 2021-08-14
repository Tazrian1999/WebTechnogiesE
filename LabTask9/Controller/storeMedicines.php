<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<style>
.error {color: #FF0000;}
</style>
</head>  
<body></body>
<html>
<?php

require_once 'Model/model.php';
if (isset($_SESSION['name'])){}
else
{
    $name = $price ='';
}
    
$nameErr = $priceErr = '';
$message = '';  
$error = '';
$flag=1;
$update="on"; 

if($_SERVER["REQUEST_METHOD"] == "POST")  
{

  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<1 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $name="";
      $flag=0;
      $update="off";
    }
  }

      
  if (empty($_POST["price"])) 
  {
    $priceErr = "Price is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $price = test_input($_POST["price"]);
    if($price==0)
    {
      $priceErr = "Invalid Price";
      $price ="";    
      $flag=0;
      $update="off";
    }
  }

  if ($flag==1) 
  {
    if(isset($_POST["submit"]))  
    {
        if(addData1($price))
        {
          echo 'Medicine Added';
        }
    }  
  }       
} 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
} 
?>

 
