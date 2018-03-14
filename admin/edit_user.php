<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit user</title>

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
$sql = "SELECT * from user where id = $id ";
$kq = $link->query($sql);
$row = $kq->fetch_array();

?>

<form  enctype="multipart/form-data"  method="post" role="form">

<div class="form-group">
    <h1 class="them">
        EDIT PROFILE
    </h1>

    <div class="form-group">
    <label>Username:</label>
    <input name="username" type="text" placeholder="Nhập Username" class="form-control" placeholder="Enter user" value="<?php echo $row['username']?>">
    </div> 
    <div class="form-group">
    <label> Password:</label>
    <input name="password" type="text"  placeholder="Nhập Password" class="form-control" placeholder="********" value="<?php echo $row['password']?>">
    </div>   
    <br>
    <div class="form-group">
    <label>Email:</label>
    <input name="email"   placeholder="Nhập email" class="form-control" placeholder="Enter email" value="<?php echo $row['email']?>">
    </div>   
    <br>
    
     <div class="form-group">
     <label> Role:</label>
     <div class="radio">
         <label>
             <input type="radio" name="role" id="optionsRadios1" value="member" <?php if( $row['role'] == "member") {echo 'checked';} ?>  >Member

         </label>
         <div class="radio">
         <label>
               <input type="radio" name="role" id="optionsRadios2" value="admin" <?php if( $row['role'] == "admin") {echo 'checked';} ?> > Admin
         </label>
     </div>
     </div>
     <br>
       
    
    Chọn ảnh:
    <image style="margin-bottom: 20px;" src="images/<?php echo $row['image'];?>" width="50px" />
     <input style="margin-bottom: 20px;" type="file" name="ava" class="ava" ></input>

     <input style="margin-bottom: 20px;" type="submit" class="form-control btn btn-default" name="update"  value="Thêm"></input>
    <input type="reset" class="form-control btn btn-default"  name="huy" class="huy" value="Hủy"></input>


</div>
</form>
<?php
if (isset($_POST['update'])) {
    

$username = $_POST["username"];

$password = $_POST["password"];
$email = $_POST["email"];
$role = $_POST["role"];
$image=$_FILES['ava']['name'];

include "connection.php";

//Connection 
$sql2 = "UPDATE  user SET username = '$username',password = '$password',  email = '$email' , role = '$role',image = '$image' where id = $id"  ;
// echo $sql2;
$link -> query($sql2);

echo '<script> location.href="manager.php";</script>';
 
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
