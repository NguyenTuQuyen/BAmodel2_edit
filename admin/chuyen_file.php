<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form enctype="multipart/form-data" action="" method="post">
<input type="file" name="choosefile" />
<input type="submit" name="send" value="Gửi" />
</form>
<?php  
if(isset($_POST['send']))//khi nhan vao nut upload
{
	//lay duowng dan cua fie
	$duongdan = $_FILES['choosefile']['tmp_name'];
	$tenfile = $_FILES['choosefile']['name'];
	$chuyen = "images/";
	move_uploaded_file($duongdan, $chuyen.$tenfile);
	echo $duongdan;
}
?>

</body>
</html>

