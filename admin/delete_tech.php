<?php
$id = $_GET['key'];
include "connection.php";
$sql = "DELETE  from technique where id = $id";
$link -> query($sql);
header('location:tech.php');
?>