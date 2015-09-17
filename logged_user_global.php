<!--?php require("fb_login_js_sdk.php"); ?-->

<?php 
		$classH=array("home"=>"","articles"=>"","images"=>"","news"=>"","audio"=>"","videos"=>"","events"=>"");
		$classH[$_GET["id"]]='class="supsetHighlight"';
?>
		

		<div id="testDisp" style="
		display:none;
    position: fixed;
    bottom: 75px;
    left: 75px;
    z-index: 99;
    background-color: #9324FB;
    border: 2px solid #9324FB;
    padding: 20px;
    color: white;
    border-radius: 10%;
    box-shadow: 0px 0px 5px #797979;
"></div>
		<div class="popup exitpop" id="pop_bg"></div>
		<div class="popup" style="top:50px;">
			<button class="exitpop" id="exitpop">
				<i class="fa fa-times"></i>
			</button>
			<video src="" 
			autoplay controls style="width: 100%;height: 100%;"></video>
		</div>

		<div id="content_cover"></div>

		<div id="submit" class="task">
			<ul id="linksub">
				<li class="leftli">Link(url):</li> 			<li class="rightli"><input type="text" id="link" name="link" autofocus="autofocus" placeholder="Paste link of the content.."></li>
				<!--li class="leftli">Title:</li> 				<li class="rightli"><input type="text" id="title" name="title"></li-->
				<li class="leftli">Category:</li> 			<li class="rightli"><input type="text" id="category" name="category"></li>
				<!-- must be within category -comes under a category  li class="leftli">Sub-Category:</li> 		<li class="rightli"><input type="text" id="sub_category" name="sub_category"></li-->
				<li class="leftli">Tags(optional):</li> 				<li class="rightli"><input type="text" id="hashtags" name="hashtags" placeholder="People place things feelings etc.."></li>
				<li class="leftli">Origin:</li> 			<li class="rightli"><input type="text" id="origin" name="origin"></li>
				<li class="leftli">Language:</li> 			<li class="rightli"><input type="text" id="language" name="language"></li>
				<li class="leftli">Submit as:</li> 			<li class="rightli"><input type="radio" id="yourself" name="submit_as" value="Yourself" checked="checked"><label for="yourself">Yourself</label><input type="radio" id="anonymous" name="submit_as" value="Anonymous"><label for="anonymous">Anonymous</label></li>
				<li class="rightli"><input type="submit" id="link" value="Post"></li>
			</ul>
		</div>

		<div id="save" class="task">
			<ul id="linksub">

			</ul>
		</div>

		<div id="aboutThis" class="task"></div>


<!------------------popUP Video player-------------------->
	

	<div id="popUpPostContainer">

	<div id="popUpContent">

		<div class="left-side-container clearfix" style="width: 64%;position: relative;float: left;top: 50%;transform:translateY(-50%);">
			<div class="feed-vid-container" style="width: 100%;padding-bottom: 56.25%;position: relative;left: 0%;background-color: black;">
                <video id="bigVidPlayer" src="http://localhost/data/Videos/Diplo%20-%20Revolution%20(feat.%20Faustix%20&amp;%20Imanos%20and%20Kai)%20%5bOfficial%20Music%20Video%5d%20-%20YouTube%5bvia%20torchbrowser.com%5d.mp4" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;" controls=""></video>
			</div>
		<div class="op-counts" style="width: 100%;  position: relative;       background-color: white;box-sizing: border-box;">
            <p>17 reactions / 49 comments / 11 echoes</p>
            <div style="position: absolute;right: 0;top: 0;line-height: 26px;margin-right: 20px;">23,476,302 <i class="mega-octicon octicon-eye"></i>
            </div>
        </div>
        <div class="post-box-footer" style="">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op no-shadow"><span class="fa fa-heart-o react-bt-icon"></span>
                    </li><li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        </li><li class="post-echo-bt post-bot-op"><span class="fa fa-rss"></span> <span class="op-text"> Echo</span>
            </li></ul>
        </div>

        	<div style="
    position: relative;
    width: 100%;
    box-sizing: border-box;
    margin-top: 10px;
    height: 50px;
    float: left;
    color: rgb(242, 242, 242);
    background-color: rgba(50, 49, 49, 0.5);
">
<span class="fa fa-youtube" style="
    font-size: 30px;
    color: red;
    background-color: rgb(0, 0, 0);
    line-height: 50px;
    width: 50px;
    text-align: center;
    float: left;
"></span>
<span style="
    line-height: 50px;
    height: 50px;
    float: left;
    position: relative;
    display: inline-block;
    padding: 0 15px;
">Radioactive - Lindsey Stirling and Pentatonix (Imagine Dragons Cover)</span>

		</div>
		<div style="
    float: right;
    position: relative;
    width: 80%;
    height: 600px;
    background-color: white;
    margin-right: 22px;
    margin-top: 10px;
    display:none;
">		
    	</div>



</div>
        <ul class="right-side-container verticalBars" style="  right: 3.6%;
  overflow: auto;
  position: fixed;
  height: 100%;">



	<li class="feed-post-box" style="
    margin-bottom: 3px;
">	
	<div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-rc.png"></a>
                    </li><li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Re\Code</a>
                                </li><li class="post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </li></ul>
                        </li><li class="pbh-ops post-more-ops"><span class="fa fa-chevron-down"></span>
                            </li><li class="pbh-ops post-preview"><span class="fa fa-compress"></span>
                                </li><li class="pbh-ops post-save-tl"><span class="fa fa-plus"></span>
            </li></ul>
        </div>
        <div class="post-box-content" style="
    overflow: hidden;
">
            <p style="
    /* margin-bottom: 0px; */
    font-size: 16px;
">In India we give more importance to hanging a nimbu-mirchi to save our vehicle than wearing a helmet to protect our head.</p>
        
        </div>
        </div>
        
    </li>


        	<li class="white-tiles dynamic-tile">
				<div class="live-tile-head">
			<span class="fa fa-globe">
			</span> More From Verge </div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			<span class="fa fa-dot-circle-o" style="color: rgb(55, 255, 0);">
			</span> Similar</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			<span class="fa fa-star" style="color: rgb(155, 0, 255);">
			</span> Recommended</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		</ul>
	</div>
		
	</div>