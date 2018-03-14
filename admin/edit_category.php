<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit category</title>

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

<div class="row">
 <div class="col-lg-12">
<?php 
$id = $_GET['key'];
include "connection.php";
$sql = "SELECT * from category where id = $id ";
$kq = $link->query($sql);
$row = $kq->fetch_array();

?>

<form  enctype="multipart/form-data"  method="post" role="form">

<div class="form-group">
    <h1 class="them">
        EDIT CATEGORY
    </h1>

    <div class="form-group">
    <label>Name:</label>
    <input name="name" type="text" placeholder="Nhập Tên chuyên mục mới" class="form-control"  value="<?php echo $row['name']?>">
    </div> 
    <div class="form-group">
    <label>Root category:</label>
    <select class="form-control" name="parent_id">
        <?php
        $p=$row["parent_id"];

                                if($p == 0){
                                 $p2 = "Root category";
                                    }
                                else{
                                $sql2 = "SELECT * FROM category where id = $p";

                            // Thực thi câu truy vấn và gán vào $result
                                $result2 = $link->query($sql2);
                                $row2= $result2->fetch_array();
                                $p2=$row2["name"];
                                }
         ?>
        <option value="<?php echo $p; ?>"><?php echo $p2; ?></option>

        <?php

            include 'connection.php';
            $result2 = mysqli_query($link, "SELECT * FROM category
            WHERE parent_id=0 ");
            while ($row2 = $result2->fetch_assoc()) {
                $id2 = $row2['id'];
                $name2 = $row2['name'];
            echo "<option value='".$id2."'>".$name2."</option>";
            }
        ?>

    </select>
    </div>   
    <br>
    <div class="form-group">
    <label>Position:</label>
    <input name="position"   placeholder="Nhập vị trí" class="form-control"  value="<?php echo $row['position']?>">
    </div>   
    <br>
    <div class="form-group">
    <label>Keyword:</label>
    <input name="keyword"   placeholder="Nhập keyword" class="form-control"  value="<?php echo $row['keyword']?>">
    </div>   
    <br>
    
     

     <input style="margin-bottom: 20px;" type="submit" class="form-control btn btn-default" name="update"  value="Thêm"></input>
    <input type="reset" class="form-control btn btn-default"  name="huy" class="huy" value="Hủy"></input>


</div>
</form>
<?php
if (isset($_POST['update'])) {
    

$name = $_POST["name"];

$parent_id = $_POST["parent_id"];
$position = $_POST["position"];
$keyword = $_POST["keyword"];


include "connection.php";

//Connection 
$sql4 = "UPDATE  category SET name = '$name',parent_id = '$parent_id',  position = '$position' , keyword = '$keyword' where id = $id"  ;
// echo $sql2;
$link -> query($sql4);

echo '<script> location.href="category.php";</script>';
 
}
 ?>
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
