<?php
session_start();
if(!isset($_SESSION['check_session']))
{
    header('location:login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin page - BA process model</title>

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

        <?php 
        include "top.php";
        ?>
        <?php
         include "left.php";
        ?>

           

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
               <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">Manager users</h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" ">
                            
                            List users
                            <div style="float: right;"><a href="add_user.php">Add</a></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                <?php

                                include "connection.php";
                                 
                                // Câu SQL lấy danh sách
                                $sql = "SELECT * FROM user";

                                // Thực thi câu truy vấn và gán vào $result
                                $result = $link->query($sql);

                                    // Sử dụng vòng lặp while để lặp kết quả
                                    while($row = $result->fetch_array()) 
                                    {
                                    $id=$row["id"]  ;
                                    $u=$row["username"];
                                    $p=$row["password"];
                                    $e=$row["email"];
                                    $r=$row["role"];
                                    $i =$row["image"];
                                    echo'<tr class="odd gradeX">
                                            <td> '.$u.'</td>
                                            <td>'.$p.'</td>
                                            <td>'.$e.'</td>
                                            <td>'.$r.'</td>
                                            <td > <image width="30px" src="images/'.$i.'"/></td>
                                            <td><a href="edit_user.php?key='.$id.'">Sửa</a> |   <a href="delete_user.php?key='.$id.'">Xóa</a></td>
                                        </tr> ' ;

                                  }//end while

                                ?>
                                    
                                </tbody>
                            </table>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
