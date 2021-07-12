<?php

require_once 'model/model.php';

if (isset($_POST['search'])) 
{
    $medicines = searchMedicine($_POST['name']);
    require 'displayMedicine.php';
}
?>