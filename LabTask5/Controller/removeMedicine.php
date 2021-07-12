<?php 

require_once '../model/model.php';
if (deleteMedicine($_GET['id']))
{
    header('Location: ../displayMedicine.php');
}

?>