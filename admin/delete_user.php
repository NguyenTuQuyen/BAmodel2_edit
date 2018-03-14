<?php
$id = $_GET['key'];
include "connection.php";
$sql = "DELETE  from user where id = $id";
$link -> query($sql);
header('location:manager.php');
?>