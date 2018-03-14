<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=323773101436106&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="allcontain">
	<div class="header" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true">
			<ul class="socialicon">
				
				<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/share?text=<?php echo urlencode('BA-We are starting a webpage with much passion!'); ?>&url=https://www.BAmodel.com/"><i class="fa fa-twitter"></i></a></li>

				<li><a href="https://plus.google.com/share?url=https://www.inithtml.com/"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="https://www.pinterest.com/pin/create/button/?url=&media=image&description=BAmodel"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>UEH-03/2018</li>
			</ul>
			<ul class="logreg">
				
				<li><a href="admin/login.php">Login </a> </li>

				<li><a href="admin/add_user.php"><span class="register">Register</span></a></li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" style="height: 50px; width: 250px; float: left; " href="index.php"><img style="height: 50px; width: 50px; float: left; margin-right:20px;" src="image/logo11.png" alt="logo"> <p style="margin-top: 10px; margin-left: 15px;" > <strong>BUSINESS ANALYTICS</strong></p></a>
			</div>	 
		</div>
		<div style="margin-left: 60px;" class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.php">HOME</a> </li>
				<li class="dropdown">
					<a href="bapm.php" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BA PROCESS MODEL <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume" style="margin-left: 15px; margin-top: -10px;" >
							
								<?php
								include 'admin/connection.php';
								$result = mysqli_query($link, "SELECT name FROM category
                        		WHERE parent_id=1 ");
								while ($row = $result->fetch_assoc()) {
  								echo "<li ><a href='".$row ['name'].".php'>".$row ['name']."</a></li>";
								}
								?>
                                
						</ul>
				</li>
				<li class="dropdown">
					<a href="technique.php" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TECHNIQUE <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume" style="margin-left: -35px; margin-top: -10px;" >
							
								<?php
								include 'admin/connection.php';
								$result = mysqli_query($link, "SELECT name FROM category
                        		WHERE parent_id=2 ");
								while ($row = $result->fetch_assoc()) {
  								echo "<li ><a href='".$row ['name'].".php'>".$row ['name']."</a></li>";
								}
								?>
                                
						</ul>
				</li>
				<li class="dropdown">
					<a href="requirement.php" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REQUIREMENT <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume" style="margin-left: 0px; margin-top: -10px;" >
							
								<?php
								include 'admin/connection.php';
								$result = mysqli_query($link, "SELECT name FROM category
                        		WHERE parent_id=3 ");
								while ($row = $result->fetch_assoc()) {
  								echo "<li ><a href='".$row ['name'].".php'>".$row ['name']."</a></li>";
								}
								?>
                                
						</ul>
				</li>
				
				
				
				
					
 
				
				
			</ul>

		</div>
	</nav>
</div>