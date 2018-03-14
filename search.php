<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BA process model</title>
    <meta name="description" content="BA process model">
    <meta name="author" content="Web Domus Italia">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style/slider.css">
    <link rel="stylesheet" type="text/css" href="style/mystyle.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css">
    .box{
  margin: 0px 200px 0px 1000px;
  width: 360px;
  height: 30px;
  margin-bottom: 20px;  
    }
.container-1{
  width:360px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.container-1 input#search{
  width: 300px;
  height: 30px;
  background: #2b303b;
  border: none;
  font-size: 10pt;

  color: white;
  padding-left: 25px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
 
   
  -webkit-transition: background .55s ease;
  -moz-transition: background .55s ease;
  -ms-transition: background .55s ease;
  -o-transition: background .55s ease;
  transition: background .55s ease;

}
.container-1 button#search2{
    width: 60px;
    height: 30px;
    background: #2b303b;
  border: none;
  font-size: 10pt;
  color: white;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

</style>
<body>
<!-- Header -->
<?php
include 'top.php';
?>

<!--_______________________________________search__________________________________ -->
<?php
    include 'admin/connection.php'
?>
<?php
    $query = $_GET['search']; 
    // gets value sent over search form
     
    $min_length = 2;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        //$query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($link, "SELECT * FROM category
            WHERE (`keyword` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
       
        $num = mysqli_num_rows( $raw_results);
        if ($num > 0 && $query != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "<div style='margin-top: 40px; margin-left: 450px; width: 600px;'><p class='alert alert-info'>$num ket qua tra ve voi tu khoa <b>$query</b></p></div></br>";
                    
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<div style="margin: 40px 400px"><table class="table table-responsive" border="1" cellspacing="0" cellpadding="10">';
                    while ($row = $raw_results ->fetch_assoc()) {
                        echo '<tr id="table_search">';
                            echo "<td>{$row['id']}</td>";
                            echo "<td><a href='".$row['name'].".php'>{$row['name']}</a></td>";
                            echo "<td>{$row['keyword']}</td>";
                            
                        echo '</tr>';
                    }
                    echo '</table></div>';
                } 
                else {
                    echo "<div style='margin-top: 40px; margin-left: 450px; width: 600px;'><p class='alert alert-danger'>Khong tim thay ket qua!</p></div>";
         
    }
}
    else{ // if query length is less than minimum
        echo "<div style='margin-top: 40px; margin-left: 450px; width: 600px;'><p class='alert alert-danger'>Minimum length is ".$min_length."</p></div>";
    }
?>
    <!-- ______________________________________________________end search ______________________________-->
    <?php
        include 'footer.php';
    ?>
</body>
</html>



