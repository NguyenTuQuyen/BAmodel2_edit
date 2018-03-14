<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit BA Process Model</title>

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
    <script src="ckeditor/ckeditor.js"></script>

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
$sql = "SELECT * from ba_process_model where id = $id ";
$kq = $link->query($sql);
$row = $kq->fetch_array();

?>

<form  enctype="multipart/form-data"  method="post" role="form">

<div class="form-group">
    <h1 class="them">
        EDIT BA PROCESS MODEL
    </h1>
<div class="form-group">
    <label>Title:</label>
    <input value="<?php echo $row['title']?>" name="title" type="text" placeholder="Nhập tiêu đề" class="form-control" >
    </div>

    <div class="form-group">
    <label>Category:</label>
    <select class="form-control" name="category">
        <?php
        $p=$row["category"];

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
            WHERE parent_id=1 ");
            while ($row2 = $result2->fetch_assoc()) {
                $id2 = $row2['id'];
                $name2 = $row2['name'];
            echo "<option value='".$id2."'>".$name2."</option>";
            }
        ?>

    </select>
    </div> 
    <div class="form-group">
    <label>Author:</label>
    <input value="<?php echo $row['author']?>" name="author" type="text" placeholder="Nhập tác giả" class="form-control" >
    </div> 
    <div class="form-group">
    <label>Content</label>
    <textarea name="content" placeholder="Nhập nội dung" class="form-control" rows="4" cols="50" id="content" class="content">
         <?php echo $row['content']?>
    </textarea>
    <script>
            CKEDITOR.replace('content');
    </script>  
    </div>   
    <br>
     
    <div class="form-group">
    <label> Description:</label>
    <input value="<?php echo $row['description']?>" name="description" type="text"  placeholder="Nhập mô tả" class="form-control" >
    </div>   
    <br>
    Chọn ảnh đại diện: 
    <image style="margin-bottom: 20px;" src="images/<?php echo $row['ava'];?>" width="50px" />
    <input  style="margin-bottom: 20px;" class="form-control" type="file" multiple name="ava" class="ava" ></input>

    Chọn ảnh trong bài:
    <image style="margin-bottom: 20px;" src="images/<?php echo $row['image'];?>" width="50px" /> 
    <input style="margin-bottom: 20px;" class="form-control" type="file" multiple name="image" class="ava" ></input>
    <div class="form-group">
    <label> Video:</label>
    <input type="text" multiple value="<?php echo $row['video']?>" name="video"   placeholder="Nhập link nhúng video" class="form-control" >
    </div>    
    <br>
     <div class="form-group">
    <label> Keyword:</label>
    <input value="<?php echo $row['keyword']?>" name="keyword" type="text"  placeholder="Nhập keyword" class="form-control" >
    </div>   
    <br>
     <div class="form-group">
    <label> Comment:</label>
    <input value="<?php echo $row['comment']?>" name="comment" type="text"  placeholder="Nhập bình luận" class="form-control" >
    </div>   
    <br>

     <input style="margin-bottom: 20px;" type="submit" class="form-control btn btn-default" name="update"  value="Thêm"></input>
    <input type="reset" class="form-control btn btn-default"  name="huy" class="huy" value="Hủy"></input>


</div>
</form>
<?php
if (isset($_POST['update'])) {
    

$title = $_POST["title"];
$category = $_POST["category"];
$author = $_POST["author"];
$content = $_POST["content"];
 //$p = md5($pasword);
 
$description = $_POST["description"];
$ava=$_FILES['ava']['name'];
$image=$_FILES['image']['name'];
$video = $_POST["video"];
$keyword = $_POST["keyword"];
$comment = $_POST["comment"];

include "connection.php";//Connection
$sql = "UPDATE ba_process_model SET title = '$title' ,category='$category',author='$author', content='$content', description='$description', ava='$ava', image='$image', video='$video', keyword='$keyword', comment='$comment' where id = $id ";
$link -> query($sql);

echo '<script> location.href="bapm.php";</script>';
 
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
