<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>BUSINESS ANALYTICS</title>
	<meta name="description" content="BA process model">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/coin-slider-styles.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/coin-slider.js"></script>
	<script type="text/javascript" src="js/coin-slider.min.js"></script>
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

					<div class="box">
					  <div class="container-1">
					  	<form action="search.php" method="get">
					      <button  id="search2" type="submit" name="ok" value="search" ><i class="fa fa-search"></i></button>
					 
					      <input class="fa fa-search" type="search" id="search" placeholder="Search..." name="search" />
					     </form> 
					  </div>

					</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div style="margin: 10px 140px" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<?php  
		include "admin/connection.php";
		$sql1 = "SELECT * from ba_process_model ";

		$result1 = $link->query($sql1);

		while($row1 = $result1->fetch_array())
		{

		$id = $row1['id'];
		
		?>

		
	
		<div class="<?php  if($id == 22) echo 'item active' ; else echo 'item';   ?>">
				<a href="<?php echo $row1['title'] ;  ?>.php">
					<img src="image/<?php echo $row1['ava'] ;  ?>" ></a>
				<div class="header-outext hidden-xs">
				<div class="col-md-12 text-center">
					<h2><?php echo $row1['title'] ; ?></h2>
					<br>
					<h5><?php echo substr($row1["description"],0,100);  ?></h5>
					
				</div>
				</div>
		</div>
	

		<?php } ?>

	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
	
	
</div>
<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>R E C E N T<span class="carstxt">P O S T S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
			<?php  
			include "admin/connection.php";
			$sql = "SELECT * from technique where author = 'Bao' ";

			$result = $link->query($sql);

			while($row = $result->fetch_array())
			{

			$id = $row['id'];
			
			?>
		<a href="<?php echo $row['title'] ;  ?>.php">
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="image/<?php echo $row['image'] ;  ?>" alt="technique">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1><?php echo $row['title'] ;  ?></h1>
							<p><?php echo $row['description'] ;  ?></p>
			 				<h2>Author:<?php echo $row['author'] ;  ?> </h2>
			 				<button id="btnRM" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1><?php echo $row['title'] ;  ?></h1>
			 						<p><?php echo substr($row["content"],0,300);  ?><br>
			 						</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
		</a>
			<?php } ?>
			
		</div>
	</div>
<!-- ________________________LATEST CARS SECTION _______________________-->
<div class="latestcars">
	<h1 class="text-center"><span class="bdots">&bullet;</span>R E A D<span class="carstxt">M O S T</span>&bullet;</h1>
	<ul  class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
		<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
		<li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
		<li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
		
		<li id="hideonmobile">
	</ul>
</div>
<br>
<br>
<!-- ________________________Latest Cars Image Thumbnail________________-->
	<div style="margin: 50px 10px" class="grid">
		<div  class="row">

			<?php  
			include "admin/connection.php";
			$sql2 = "SELECT * from ba_process_model where author ='VyVy'  ";

			$result2 = $link->query($sql2);

			while($row2 = $result2->fetch_array())
			{

			$id = $row2['id'];
			
			?>

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="image/<?php echo $row2['image'] ;  ?>" alt="img">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name"><?php echo $row2['title'] ;  ?></h3>
								<p>"<?php echo $row2['description'] ;  ?>" </p>
	 							<h4 class="price">Author:<?php echo $row2['author'] ;  ?> </h4>
	 							<button ><a href="<?php echo $row2['title'] ;  ?>.php">READ MORE</a></button><br>
	 							
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<?php } ?>	

		</div>
	</div>
<!-- _______________________________News Letter ____________________-->
	<div class="newslettercontent">
		<div class="leftside">
			<img src="image/border.png" alt="border">
			<h1>RECEIVE OUR NEWS</h1>
			<p>Subscribe to the BUSINESS ANALYTICS mailing list to 
				receive updates on latest news
				and other information from ours webpage, thank you!.</p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="image/newsletter.jpg" alt="newsletter">
			<input type="text" class="form-control" id="subemail" placeholder="EMAIL">
			<button><a href="admin/add_user.php">SUBSCRIBE</a></button>
		</div>
	</div>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<?php
		include 'footer.php';
	?>
</body>
</html>