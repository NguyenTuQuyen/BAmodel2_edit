<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>BA process model </title>
	<meta name="description" content="BA process model">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/contactstyle.css">
</head>

<body>
<!-- Header -->
<div>
	
	<?php
	include 'top.php';
	?>
	<?php
	include 'admin/connection.php';
	$result = mysqli_query($link, "SELECT * FROM ba_process_model where title = 'Considering Perspective'");
	$row = $result->fetch_assoc();
	?>
	<div style="margin: 0px 450px 0px 250px">
		<h2 style="text-transform: uppercase; color:#00001a; margin: 50px 0px"><b><?php echo $row['title']; ?></b></h2>
		<p style="opacity: 0.5"><b>Author: <?php echo $row['author']; ?></b></p>
		<image style="margin:0px auto;" src="image/<?php echo $row['ava'];?>" width="800px" />
		<p><?php echo $row['content']; ?></p>
		<p style="margin: 10px 100px;"><?php echo $row['video']; ?></p>

	</div>

</div>

	<?php
	include 'footer.php';
	?>

</body>
</html>