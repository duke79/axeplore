		<link rel="stylesheet" type="text/css" href="style/logged_user_global.css">
		<link rel="stylesheet" type="text/css" href="style/logged_user_feed.css">
		<link rel="stylesheet" type="text/css" href="style/logged_user_videos.css">

		<link rel="stylesheet" type="text/css" href="include/flaticons/flaticon.css">
		
		<script type="text/javascript" src="jscript/logged_user_audio.js"></script>
		<script type="text/javascript" src="jscript/logged_user_global.js"></script>

	</head>

	<body>
		
	<?php require("logged_user_global.php"); ?>	
		
	<?php require("parts/header.php"); ?>

	<div id="main-bars-container" class="verticalBars">
		<?php require("parts/sideToolbar.php"); ?>

		<?php require("parts/middleFeed.php"); ?>	
	  	
		<?php require("parts/trendAndTiles.php"); ?>
	</div>

	<span class="fa fa-plus quick-post"></span>
</body>