<?php
$id = $_GET['key'];
include "connection.php";
$sql = "DELETE  from requirement where id = $id";
$link -> query($sql);
header('location:req.php');
?>