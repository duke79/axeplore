		<link rel="stylesheet" type="text/css" href="style/logged_user_global.css">
		<link rel="stylesheet" type="text/css" href="style/logged_user_music.css">

		<link rel="stylesheet" type="text/css" href="include/flaticons/flaticon.css">
		
		<script src="https://apis.google.com/js/platform.js"></script>
		<script src="http://www.youtube.com/player_api"></script>
		<script type="text/javascript" src="jscript/logged_user_music.js"></script>
		<script type="text/javascript" src="jscript/logged_user_global.js"></script>

	</head>

	<body>
		
		<div id="testW" style="
		display:none;
    top: 15%;
    left: 40%;
    padding:0 15px;      
    position: fixed;
    min-width: 80px;
    font-weight: 900;
    height: 32px;
    z-index: 999;
    color: rgb(13, 13, 13);
    line-height: 32px;
    text-align: center;
    border: 5px solid rgb(32, 32, 32);
    border-radius: 30%;
    border-bottom-left-radius: 35px;
    background: rgba(0, 158, 255, 0.8);      
"></div>
		
		<?php require("logged_user_global.php"); ?>	
		<?php require("parts/header.php"); ?>
		
		<div class="sidebar sizeable verticalBars" id="leftbar">
			<div id="axealong" class="parentofVC multitask axColor">
				<div class="verticalCenter">
					<i class="fa fa-user"></i>
				</div>

			</div>
			
			<div id="facebook" class="parentofVC multitask fbColor">
				<div class="verticalCenter">
					<i class="fa fa-facebook"></i>
				</div>
				
			</div>
			
			<div id="twitter" class="parentofVC multitask twColor">
				<div class="verticalCenter">
					<i class="fa fa-twitter"></i>
				</div>
				
			</div>
			
			<div id="player" class="parentofVC multitask scColor">
				<div class="verticalCenter">
					<i class="fa fa-music"></i>
				</div>
			</div>

  		</div>

  		
  		<div id="content" class="sizeable verticalBars">

  			<div id="mainWindow">
				
	  			<div class="videoWrapper">
				
					<div id="vframe" src="" style="position:absolute;width:100%;height:100%;left:0;right:0;border: 0;
		    			transition:all .3s linear;"></div>

		    		<div id="shareThis">
  					<ul class="inul" style="display: table-caption;">
					<li class="barcon"><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=http%3A%2F%2Fwww.axeplorer.co&pubid=ra-542d05537cc1ff7b&ct=1&title=Share&pco=tbxnj-1.0" target="_blank"><i class="fa fa-facebook"></i></a>
					<li class="barcon"><a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fwww.axeplorer.co&pubid=ra-542d05537cc1ff7b&ct=1&title=Share&pco=tbxnj-1.0" target="_blank"><i class="fa fa-twitter"></i></a>
					<li class="barcon"><a href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=http%3A%2F%2Fwww.axeplorer.co&pubid=ra-542d05537cc1ff7b&ct=1&title=Share&pco=tbxnj-1.0" target="_blank"><i class="fa fa-google-plus"></i></a>
					<li class="barcon"><a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=http%3A%2F%2Fwww.axeplorer.co&pubid=ra-542d05537cc1ff7b&ct=1&title=Share&pco=tbxnj-1.0" target="_blank"><i class="fa fa-linkedin"></i></a>
					<li class="barcon"><a href="https://api.addthis.com/oexchange/0.8/forward/vk/offer?url=http%3A%2F%2Fwww.axeplorer.co&pubid=ra-542d05537cc1ff7b&ct=1&title=Share&pco=tbxnj-1.0" target="_blank"><i class="fa fa-vk"></i></a>
					<li class="barcon"><a href="https://api.addthis.com/oexchange/0.8/forward/reddit/offer?url=http%3A%2F%2Fwww.axeplorer.co&pubid=ra-542d05537cc1ff7b&ct=1&title=Share&pco=tbxnj-1.0" target="_blank"><i class="fa fa-reddit"></i></a>
	  				</ul>
  					</div>
					

		    		<div id="contentloadanim"><i class="fa fa-spinner fa-spin"></i></div>

		    	
				    <div id="videoEndOpsCover" class="videoEndOps">
				    	<div id="videoEndOpsContent" class="videoEndOps">
  							<ul class="inul">
								<li class="barcon">Next video in <span id="countDownTime" style="color: rgb(255, 0, 39);"></span> sec</li>
							  	<li class="barcon wait"><i class="fa fa-stop imp"></i> Wait</li>
								<li class="barcon next"><i class="fa fa-chevron-right imp"></i> Skip</li>
							    <li class="barcon replay"><i class="fa fa-history imp"></i> Replay</li>
							</ul>
						</div>
				    </div>

		    	</div>


		    	<div id="vidBottomToolbar">
		    		<ul class="inul" style="padding: 5px 0;">
		    			
						<li class="barcon commentsToggle" id="currentTitle">
						Lorem ipsum dolar sit amet | Yo Yo Honey Singh ft. Eminem &amp; Justin Bieber | Official</li>
						<li class="barcon leftMarginAuto next" id="viewCount">20,789,987 views</li>
					
					</ul>
		    	</div>

		    </div>


	    	<div id="more" class="sublist sizeable">
				<ul id="sidePlaylist">

				</ul>
			</div>

			<div id="commentsNinfo" class="sublist sizeable">

				<ul class="inul" style="display: table;background: inherit;">
  					<li class="barcon" id="SubscribeHelper">Subscribe</li>
					<li><div id="yt-button-container-render" style="display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px;width: 172px; height: 48px; background: transparent;"></div>
    				
    				<li id="contentTitle" style="top: 12px;background: inherit;border-bottom: 2px solid rgb(63, 63, 63);font-size: 22px;font-weight: 600;font-variant: small-caps;position: relative;height: auto;"></li>
				</ul>

				<div id="disqus_thread" style="top: -65px;position: relative;z-index: -1;"></div>
    				<!--script type="text/javascript">
			    	    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				        var disqus_shortname = 'axeplorer'; // required: replace example with your forum shortname

				        /* * * DON'T EDIT BELOW THIS LINE * * */
				        (function() {
			            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				        })();
				    </script>
				    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript"></a></noscript-->
			</div>

			<div id="axealong" class="sidesub sizeable multitask"></div>
			<div id="facebook" class="sidesub  sizeable multitask"></div>
			<div id="twitter" class="sidesub  sizeable multitask"></div>
			<div id="player" class="sidesub  sizeable multitask">
				<div id="myElement">Loading the player...</div>
			</div>
		</div>

		<!--for iframe sandbox="allow-scripts allow-forms allow-top-navigation allow-same-origin"-->
		
		<div class="sizeable verticalBars sidebar" id="rightbarholder">
			<div id="next" class="parentofVC rightbar next">
	  			<div class="verticalCenter">
	  				<i class="fa fa-chevron-right"></i>
	  			</div>
	  		</div>

	  		<div id="more" class="parentofVC rightbar more playlistToggle listopen">
	  			<div class="more verticalCenter">
	  				<i class="fa fa-bars"></i>
	  			</div>
	  		</div>

	  		<div id="back" class="parentofVC rightbar back">
	  			<div class=" verticalCenter">
	  				<i class="fa fa-chevron-left"></i>
	  			</div>
	  		</div>
		</div>

		<div id="myfoot">

			<ul class="inul" style="padding: 5px 0;">
		    			<li class="barcon shadow imp sticky" id="visuals"><i class="fa fa-lightbulb-o"></i></li>
		    			<li class="barcon back shadow ho_imp" style="width: 15%;"><i class="fa fa-chevron-left" ></i> Previous</li>

						<li class="barcon shadow sticky leftMarginAuto" id="thumbs_up" ><i class="fa fa-heart"></i></li>
						<li class="barcon shadow sticky commentsToggle comments" id="comments" style="min-width:63px;"><i class="fa fa-comments"></i> (0)</li>
						<li class="barcon shadow sticky" id="share"><i class="fa fa-share-alt"></i></li>

						<!--li class="barcon sticky shadow" id="thumbs_down" style="color: rgb(255, 34, 34);"><i class="flaticon-heart70"></i></li-->

						<li class="barcon leftMarginAuto sticky next shadow ho_imp" style="width: 20%;">Next Video <i class="fa fa-chevron-right"></i></li>
						<li class="barcon shadow commentsToggle" id="bout_page"><i class="fa fa-info-circle"></i></li>
			</ul>

			<!--ul class="inul" style="padding: 10px 0px;">
				<li class="barcon sticky leftMarginAuto" style="background: rgb(255, 50, 0);min-width: 80px;">Follow Us: 
				<li class="barcon shadow sticky"><i class="fa fa-android"></i>
				<li class="barcon shadow sticky"><i class="fa fa-apple"></i>
				<li class="barcon shadow sticky"><i class="fa fa-youtube"></i>
				<li class="barcon shadow sticky"><i class="fa fa-facebook"></i>
				<li class="barcon shadow sticky"><i class="fa fa-twitter"></i>
				<li class="barcon shadow"><i class="fa fa-google-plus"></i>
			</li></ul-->
		</div>