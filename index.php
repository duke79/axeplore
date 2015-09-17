<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 2.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<html>
	<head>

		<base href="http://localhost/vverse/"/>
		<link rel='shortcut icon' href='favicon.ico?v=2' type='image/x-icon'>
		<link rel='icon' href='favicon.ico?v=2' type='image/x-icon'>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">


		<!-- To be used as replacement font-->
		<!--link href='http://fonts.googleapis.com/css?family=Exo:400,300,200,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Exo+2:600,800,300,400,500' rel='stylesheet' type='text/css'-->
		

		<!--link href='http://fonts.googleapis.com/css?family=Jura:500,400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Prociono' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'-->

		<!--link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"-->
		<link href="include/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="include/octicons/octicons.css" rel="stylesheet">
		<!--link href='http://fonts.googleapis.com/css?family=Racing+Sans+One|Freckle+Face' rel='stylesheet' type='text/css'-->
		
		<script type="text/javascript" src="include/jquery.js"></script> <!-- old version download new-->
		<!--script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script-->
		<!--script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<!--script type="text/javascript" src="jquery.wookmark.js"></script-->
		<script type="text/javascript" src="include/jquery-ui.min.js"></script>
		<!--script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script-->
		
		<!--script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script-->
		<!--script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script-->
		
		<?php

			error_reporting(-1); //reporting all php errors and warningsS
			foreach ($_GET as $key => $value) {
				$_GET[$key]=strtolower($value);
			}

			if(isset($_SESSION["login_state"])&&$_SESSION["login_state"]=="active"||isset($_GET["id"])&&$_GET["id"]=="home")
			require("logged_user_home.php");
			elseif (isset($_GET["id"])&&$_GET["id"]=="music") {
				require("logged_user_music.php");
			}
			elseif (isset($_GET["id"])&&$_GET["id"]=="videos") {
				require("logged_user_videos.php");
			}
			elseif (isset($_GET["id"])&&$_GET["id"]=="profile") {
				require("user_profile.php");
			}
			elseif (isset($_GET["id"])&&$_GET["id"]=="images") {
				require("logged_user_images.php");
			}
			elseif (isset($_GET["id"])&&$_GET["id"]=="audio") {
				require("logged_user_audio.php");
			}
			elseif (isset($_GET["id"])&&$_GET["id"]=="signup") {
				require("registration.php");
			}
			else
				require("guest_home.php");

		?>

	</body>

</html>