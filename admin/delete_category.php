<?php
$id = $_GET['key'];
include "connection.php";
$sql = "DELETE  from category where id = $id";
$link -> query($sql);
header('location:category.php');
?>