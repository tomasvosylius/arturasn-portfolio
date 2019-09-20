<?php

	/* PHP config */
	ob_start("ob_gzhandler");
	session_start();
	define('MAX_ARTWORKS', 7);

?>
<!DOCTYPE html>
<html>
	<!--Design: Arturas Nauseda -->
	<!--Code: Tomas Vosylius --> 
	<!--2016 - 2018 / arturasn.com -->

	<!-- Meta -->
	<title>AN</title>
	<meta property="og:title" content="AN" />
	<meta property="og:url" content="http://www.arturasn.com/index.php?page=1" />
	<meta property="og:image" content="http://arturasn.com/style/images/og_logo.jpg" />

	<!-- Bootstrap -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">-->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Style.css -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style/style.css"/>
</html>





<?php 
	/* Header ikelimas */
	include("pages/header.php");

	/* Page ikelimas */
	$page = $_GET["page"];
	if(!isset($page)) header("Location: index.php?page=1");
	if(isset($page))
	{
		if($page == "") header("Location: index.php?page=1");
		else if(file_exists("pages/".$page.".php"))
		{
			$_SESSION["ArtworkID"] = $page;
			include("pages/".$page.".php");
		}
		else header("Location: index.php?page=1");
	}


	/* Functions */
	function AddBalls($is_video = false)
	{
		$page = $_SESSION["ArtworkID"];
		echo "<img src = 'style/images/".$page."ball.png' style = 'margin-right: 4px; margin-bottom: 1px'/>";
	}

	function AddButtons($previousclass = "previous", $nextclass = "next") {
		$current = $_SESSION["ArtworkID"];
		echo '
			<div class = "buttons">
				<div class = "'.$previousclass.'">
					<span style = "font-size:11px;font-weight:bold;font-family:Helvetica"><a href = "index.php?page='.($current == 1 ? ("1") : ($current - 1)).'" style = "text-decoration:none;color:#000;">previous</a></span>
				</div>
				<div class = "'.$nextclass.'">
					<span style = "color:#000;font-size:11px;font-weight:bold;font-family:Helvetica"><a href = "index.php?page='.($current == MAX_ARTWORKS ? ($current) : ($current + 1)).'" style = "text-decoration:none;color:#000;">next</a></span>
				</div>
			</div>
			<div class = "buttons-end"></div>
			';
	}

?>

<!-- Only on mobile -->
<div class = "col-xs-12">
	<div class = "socials-mobile">
		<a href = "https://www.facebook.com/profile.php?id=100000055571777" target = "_blank"><img src = "style/images/facebook.png" width = "20px;"/></a>
		<a href = "http://www.twitter.com/ArturasNauseda" target = "_blank"><img src = "style/images/twitter.png" width = "20px;"/></a>
		<a href = "http://www.instagram.com/arturastss" target = "_blank"><img src = "style/images/instagram.png" width = "20px;"/></a>
		<a href = "mailto:info@arturasn.com" target = "_blank"><img src = "style/images/mail.png" width = "26px;"/></a>
	</div>
</div>