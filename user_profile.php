		<link rel="stylesheet" type="text/css" href="style/logged_user_global.css">
		<link rel="stylesheet" type="text/css" href="style/logged_user_feed.css">
		<link rel="stylesheet" type="text/css" href="style/user_profile.css">
		
		<link rel="stylesheet" type="text/css" href="include/flaticons/flaticon.css">
		
		<script type="text/javascript" src="jscript/logged_user_global.js"></script>
		<script type="text/javascript" src="jscript/user_profile.js"></script>

		<script src="include/audiojs/audio.min.js"></script>

		<script>
			audiojs.events.ready(function() {
    			var as = audiojs.createAll();
  			});
		</script>

	</head>

	<body>
		
	<?php require("logged_user_global.php"); ?>	
		
	<?php require("parts/header.php"); ?>

	<div class="verticalBars dashboard-display">

		<div id="cover-back-shadow"></div>
		<div class="verticalBars" id="profile-header">
			<div id="profile-header-canvas">
				<span id="profile-user-name">Ankit Singh Balyan</span>
				<audio src="http://localhost/data/Audio/Singles/Linkin%20Park%20-%20Top%20Dubstep%20Remixes%20-%20YouTube_2.M4A" />
			</div>
			
			<div id="profile-header-face"></div>

			<div class="verticalBars" id="head-karma-meter">
				<ul class="basic-header-info">
                	<li>
                  		<span class="fa fa-calendar left-bhi-box"></span>
                  		<span class="right-bhi-box">Nov-01-1993 </span>
					<li>
						<span class="fa fa-suitcase left-bhi-box"></span>
						<span class="right-bhi-box">CEO, Idannamam Inc.</span>
    				<li>
    					<span class="fa fa-link left-bhi-box"></span>
    					<a class="right-bhi-box" href="//whitehouse.gov" target="_blank">WhiteHouse.gov</a>
					<li>
						<span class="fa fa-map-marker left-bhi-box"></span>
						<span class="right-bhi-box">Washington, D.C.</span>
    				<li>
    					<span class="right-bhi-box user-head-status" limit="100chars">Dad, husband, and 44th President of the United States. Tweets may be archived: <a class="" href="http://wh.gov/privacy">http://wh.gov/privacy</a></span>
				</li>
				</ul>
			</div>
  			
		</div>

		<ul class="prof-hor-navbar">
  				<li class="phn-blocks">
  					<span class="op-text social-big-count "> 694</span>
  					<span class="op-text forced-aln-txt"> Following</span>
            	<li class="phn-blocks">
            		<span class="op-text social-big-count"> 30,475</span>
					<span class="op-text forced-aln-txt"> Followers</span>
				<li class="phn-blocks current-chapter"><span class="op-text"> Launches</span>
            	<li class="phn-blocks"> <span class="op-text"> Photos</span>
				<li class="phn-blocks"> <span class="op-text"> Audios</span>
            	<li class="phn-blocks"> <span class="op-text"> Videos</span>
            	<li class="phn-blocks"> <span class="op-text"> Store</span>
            	<li class="phn-blocks"> <span class="op-text"> More</span>
            	<li class="social-relation-ops leftMarginAuto" style="margin-right: 8px;">
            		<span class="fa fa-user-plus"></span> 
            		<span class="op-text"> Follow</span>
            	<li class="social-relation-ops">
            		<span class="fa fa-envelope"></span>
            		<span class="op-text"> Message</span>
        </ul>

	</div>

	<div id="main-bars-container" class="verticalBars" style="margin-top: 25px;">

		<?php require("parts/sideToolbar.php"); ?>

		<?php require("parts/middleFeed.php"); ?>	
	  	
		<?php require("parts/trendAndTiles.php"); ?>

	</div>
	<span class="fa fa-plus quick-post"></span>
</body>