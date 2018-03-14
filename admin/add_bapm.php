<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add BA Process Model</title>

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
              



<?php
if (isset($_POST['submit'])) {
    

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
$sql = "INSERT INTO ba_process_model (title,category,author, content, description, ava, image, video, keyword, comment) 
VALUES ('$title','$category','$author', '$content', '$description', '$ava', '$image', '$video', '$keyword', '$comment' )";
$link -> query($sql);

echo '<script> location.href="bapm.php";</script>';
 
}
 ?>
<div class="row">
 <div class="col-lg-10">
<form  enctype="multipart/form-data"  method="post" role="form">

    
    <H1 class="them">
        ADD BA PROCESS MODEL
    </H1>

    <div class="form-group">
    <label>Title:</label>
    <input name="title" type="text" placeholder="Nhập tiêu đề" class="form-control" >
    </div>

    <div class="form-group">
    <label>Category:</label>
    <select class="form-control" name="category">
        <option value="0">Select Category</option>

        <?php

            include 'connection.php';
            $result = mysqli_query($link, "SELECT * FROM category
            WHERE parent_id=1 ");
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row ['name'];
            echo "<option value='".$id."'>".$name."</option>";
            }
        ?>

    </select>
    </div> 
    <div class="form-group">
    <label>Author:</label>
    <input name="author" type="text" placeholder="Nhập tác giả" class="form-control" >
    </div> 
    <div class="form-group">
    <label>Content</label>
    <textarea name="content" placeholder="Nhập nội dung" class="form-control" rows="4" cols="50" id="content" class="content">
         
    </textarea>
    <script>
            CKEDITOR.replace('content');
    </script>  
    </div>   
    <br>
     
    <div class="form-group">
    <label> Description:</label>
    <input name="description" type="text"  placeholder="Nhập mô tả" class="form-control" >
    </div>   
    <br>
    Chọn ảnh đại diện: 
    <input style="margin-bottom: 20px;" class="form-control" type="file" multiple name="ava" class="ava" ></input>

    Chọn ảnh trong bài: 
    <input style="margin-bottom: 20px;" class="form-control" type="file" multiple name="image" class="ava" ></input>
    <div class="form-group">
    <label> Video:</label>
    <input name="video" type="text" multiple  placeholder="Nhập link nhúng video" class="form-control" >
    </div>   
    <br>
     <div class="form-group">
    <label> Keyword:</label>
    <input name="keyword" type="text"  placeholder="Nhập keyword" class="form-control" >
    </div>   
    <br>
     <div class="form-group">
    <label> Comment:</label>
    <input name="comment" type="text"  placeholder="Nhập bình luận" class="form-control" >
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
