<?php
$id = $_GET['key'];
include "connection.php";
$sql = "DELETE  from ba_process_model where id = $id";
$link -> query($sql);
header('location:bapm.php');
?>