<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add category</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="bootstrap/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bootstrap/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
     

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
              



<?php
if (isset($_POST['submit'])) {
    

$name = $_POST["name"];
$parent_id = $_POST["parent_id"];
 //$p = md5($pasword);
 
$position = $_POST["position"];
$keyword = $_POST["keyword"];



include "connection.php";//Connection
$sql = "INSERT INTO category (name, parent_id, position, keyword) 
VALUES ('$name', '$parent_id', '$position', '$keyword' )";
$link -> query($sql);

echo '<script> location.href="category.php";</script>';
 
}
 ?>
<div class="row">
 <div class="col-lg-6">
<form  enctype="multipart/form-data"  method="post" role="form">

<div class="form-group">
    <H1 class="them">
        ADD CATEGORY
    </H1>

    <div class="form-group">
    <label>Name:</label>
    <input name="name" type="text" placeholder="Nhập tên chuyên mục" class="form-control" \>
    </div> 
    <div class="form-group">
    <label>Root category:</label>
    <select class="form-control" name="parent_id">
        <option value="0">Root category</option>

        <?php

            include 'connection.php';
            $result = mysqli_query($link, "SELECT * FROM category
            WHERE parent_id=0 ");
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row ['name'];
            echo "<option value='".$id."'>".$name."</option>";
            }
        ?>

    </select>
    </div>   
    <br>
    <div class="form-group">
    <label>Position:</label>
    <input name="position" type="text"  placeholder="Nhập vị trí" class="form-control" >
    </div>   
    <br>
    
     <div class="form-group">
    <label>Keyword:</label>
    <input name="keyword" type="text"  placeholder="Nhập keyword" class="form-control" >
    </div>   
    <br>
    

    <input style="margin-bottom: 20px;" type="submit" class="form-control btn btn-default" name="submit"  value="Thêm"></input>
    <input type="reset" class="form-control btn btn-default"  name="huy" class="huy" value="Hủy"></input>


</div>
</form>
</div>
</div>

            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="bootstrap/dist/js/sb-admin-2.js"></script>
    <script src="bootstrap/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="bootstrap/vendor/datatables-responsive/dataTables.responsive.js"></script>
 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
