<div id="ax-header">

<?php if(isset($_GET["id"])&&$_GET["id"]!="profile"){ ?>

		<div id="superset" class="ours">
			<ul class="ssul">

				<li id="supcat_highlighter" style="
    position: absolute;
    z-index: 0;
    left: 42.8571%;
"></li>

				<li id="supcat_1" <?php echo $classH['articles']; ?> style="box-shadow:none;"> <a href="articles"><i class="fa fa-file-text-o"></i><span class="supcat-text">Articles</span><span class="catWise-story-count">9+</span></a></li>
				<li id="supcat_2" <?php echo $classH['images']; ?> > <a href="images"><i class="fa fa-image"></i><span class="supcat-text">Images</span></a></li>
				<li id="supcat_3" <?php echo $classH['videos']; ?> > <a href="videos"><i class="fa fa-video-camera"></i><span class="supcat-text">Videos</span><span class="catWise-story-count">5</span></a></li>
				<li id="supcat_4" <?php echo $classH['home']; ?> > <a href="home"><i class="fa fa-home"></i><span class="supcat-text">Home</span></a> </li>
				<li id="supcat_5" <?php echo $classH['audio']; ?> > <a href="audio"><i class="flaticon-musical"></i><span class="supcat-text">Audio</span></a></li>
				<li id="supcat_6" <?php echo $classH['news']; ?> > <a href="News"><i class="fa fa-newspaper-o"></i><span class="supcat-text">News</span><span class="catWise-story-count">6</span></a></li>
				<li id="supcat_7" <?php echo $classH['events']; ?> > <a href="events"><i class="fa fa-map-marker"></i><span class="supcat-text">Events</span></a> </li>
				
				<!--      2nd Batch (If ever?)  -->
				<!--li id="supcat_2"> <a href="askx"><i class="fa fa-question-circle"></i> AskX </a> </li-->
				<!--li id="supcat_11"> <a href="games"><i class="fa fa-gamepad"></i> Games </a> </li-->
				<!--li id="supcat_3"> <a href="shopping"><i class="fa fa-shopping-cart"></i>  Shopping </a></li-->
				<!--li id="supcat_4"> <a href="apps"><i class="fa fa-tablet"></i> Apps </a> </li-->
				<!--li id="supcat_11"> <a href="Lists"><i class="fa fa-list-ul"></i> Social </a> </li-->
				<!--li id="supcat_12"> <a href="Opinions"><i class="fa fa-gavel"></i> Opinions </a> </li-->
			</ul>
		</div>

<?php } ?>

		<div id="statbar" class="ours">
			<ul class="inul" >
				
				<li class="logo barcon">
					<a class="logo" href="home">
						<i style="font-size: 30px;transform:rotate(-85deg);" class="fa fa-space-shuttle fa-rotate-270">
						</i><span style="font-size:0;">A</span><i id="logo-mid-white">xeplore</i><span id="logo-end-colored" style="text-shadow: 0px 0px;">.in</span>
					</a>
				</li>
				<li class="barcon shadow listcon leftMarginAuto" id="listCats">
					<span class="dropSwitch"><i class="fa fa-th"></i></span>
				</li>
				<li class="barcon shadow listcon" id="sorting">
					<span class="dropSwitch"><i class="fa fa-sliders"></i></span>
					<ul class="subtab downwardsSubtab" id="sorting">
						<!--span id="subtab_arrow" style="left:68%;"></span-->
						<li><i class="fa fa-random"></i>		Random</li>
						<li><i class="fa fa-star"></i>			Popular</li>
						<li><i class="fa fa-bolt"></i> 			Trending</li>
						<li><i class="fa fa-leaf"></i>			Fresh</li>
						<li><i class="fa fa-users"></i>			MyFollowings</li>
						<li><i class="fa fa-user-secret"></i>		Anonymous</li>
						<li><i class="fa fa-dot-circle-o" style="color:rgb(0, 255, 50);"></i>		Live</li>
					</ul>
				</li>
				
				<li class="barcon shadow listcon" id="interest">
					<ul id="tagsHighlight" class="inul"></ul>
					
					<ul class="subtab downwardsSubtab" id="interest">
						<!--span id="subtab_arrow"></span-->
						<li><i class="flaticon-musical"></i> Music</li>
						<li><i class="flaticon-joystick10"></i> Gaming</li>
						<li><i class="flaticon-comedy2"></i> Comedy</li>
						<li><i class="flaticon-pac"></i> Entertainment</li>
						<li><i class="flaticon-film50"></i> Movies</li>
						<li><i class="flaticon-dog50"></i> Pets-Animals</li>
						<li><i class="flaticon-soccer44"></i> Sports</li>
						<li><i class="flaticon-tv12"></i> News</li>
						<li><i class="flaticon-sport9"></i> Automobiles</li>
						<li><i class="flaticon-tools6"></i> DIY-Hacks</li>
						<li><i class="flaticon-teacher4"></i> Education</li>
						<li><i class="flaticon-thought"></i> How-To</li>
						<li><i class="flaticon-video136"></i> Tutorials</li>
						<li><i class="flaticon-apple"></i> Gadgets</li>
						<li><i class="flaticon-atomic1"></i> Science</li>
						<li><i class="flaticon-one62"></i> Technology</li>
						<li><i class="flaticon-canvas"></i> Art</li>
						<li><i class="flaticon-canvas"></i> Action-Adventure</li>
						<li><i class="flaticon-landscape7"></i> Animation</li>
						<li><i class="flaticon-architecture1"></i> Architecture</li>
						<li><i class="flaticon-architecture1"></i> Beauty</li>
						<li><i class="flaticon-architecture1"></i> Babes</li>
						<li><i class="flaticon-cartoon"></i> Cartoons</li>
						<li><i class="flaticon-business56"></i> Celebs</li>
						<li><i class="flaticon-graduation22"></i> College</li>
						<li><i class="flaticon-handshake1"></i> Causes</li>
						<li><i class="flaticon-handshake1"></i> Creativity</li>
						<li><i class="flaticon-pranava"></i> Culture</li>
						<li><i class="flaticon-website8"></i> Design</li>
						<li><i class="flaticon-html-tag"></i> Devs</li>
						<li><i class="flaticon-html-tag"></i> Dude</li>
						<li><i class="flaticon-calendar60"></i> Events</li>
						<li><i class="flaticon-plate7"></i> Food & Kitchen</li>
						<li><i class="flaticon-weightlifter3"></i> Fitness</li>
						<li><i class="flaticon-female94"></i> Fashion</li>
						<li><i class="flaticon-classic5"></i> Future</li>
						<li><i class="flaticon-heart27"></i> Health</li>
						<li><i class="flaticon-heart27"></i> Home-Garden</li>
						<li><i class="flaticon-professor8"></i> History</li>
						<li><i class="flaticon-professor8"></i> Humour</li>
						<li><i class="flaticon-world89"></i> Internet</li>
						<li><i class="flaticon-crawling"></i> Kids</li>
						<li><i class="flaticon-writing17"></i> Literature</li>
						<li><i class="flaticon-magic4"></i> Magic</li>
						<li><i class="flaticon-magic4"></i> Nature</li>
						<li><i class="flaticon-man55"></i> Activism</li>
						<li><i class="fa fa-warning"></i> NSFW</li>
						<li><i class="fa fa-warning"></i> Opinions</li>
						<li><i class="flaticon-crawling"></i> Amazing-People</li>
						<li><i class="fa fa-paw"></i> Pranks-Experiments</li>
						<li><i class="fa fa-paw"></i> Romance</li>
						<li><i class="fa fa-paw"></i> Reality & Game Shows</li>
						<li><i class="flaticon-television4"></i> TV-Serials</li>
						<li><i class="flaticon-air6"></i> Travel</li>
						<li><i class="flaticon-earth47"></i> World</li>
						<li><i class="flaticon-man27"></i> VLogs</li>
						<li><i class="flaticon-man27"></i> Commercials</li>
						<li><i class="flaticon-man27"></i> Business-Economy</li>
					</ul>
					
					<input class="dropSwitch" type="text" id="tags" placeholder="Search someone or something">
					<span class="fa fa-search hd-search-icon"></span>
				</li>
				
				<!--input type="submit" id="filtercon" value="&#xf0b0"-->
			
				<li class="barcon listcon leftMarginAuto" id="notification" style="color:rgb(255,255,255);">
					<span class="dropSwitch">
						<i class="fa fa-bell"></i>
						<span class="notif-count" notif-count="4">4</span>
					</span>
				</li>
				<li class="barcon listcon" id="message" >
					<span class="dropSwitch">
						<i class="fa fa-envelope-o"></i>
						<span class="notif-count" notif-count="0">0</span>
					</span>
				</li>

				<li class="barcon shadow listcon leftMarginAuto" id="pilot" > 
					<span class="dropSwitch">
						<span class="pilot-name">Ankit</span><!--i class="fa fa-chevron-down"></i to make it more personal--> 
					</span>
					<ul class="subtab downwardsSubtab" style="color:white;">
						<li><i class="fa fa-gear"></i> Edit Profile</li>
						<li><i class="fa fa-users"></i> Friends</li>
						<li><i class="fa fa-upload"></i> Submissions(2)</li>
						<li><i class="fa fa-bookmark"></i> Saved(5)</li>
						<li> Following(45)</li>
						<li> Followers(23)</li>
						<li><i class="fa fa-sign-out"></i> Log Out</li>
					</ul>
				</li>

				<!--li class="barcon shadow leftMarginAuto" id="share" ><i class="fa fa-share-alt"></i></li>
				<li class="barcon shadow" id="thumbs_up" ><i class="fa fa-chevron-up"></i></li> 
				<li class="barcon shadow listComToggle comments" style="min-width:63px;"><i class="fa fa-comments"></i> (0)</li>
				<li class="barcon shadow" id="thumbs_down" ><i class="fa fa-chevron-down"></i></li>
			
				<li class="barcon imp" id="bout_page"><i class="fa fa-ellipsis-v"></i></li-->
			</ul>	
		</div>

		<div id="processing_window">
  			<div class="process_bar">
  				<i class="fa fa-space-shuttle flying-shuttle"></i>
  			</div>
		</div>
</div>