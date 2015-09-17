<ul class="right-side-container verticalBars">


<?php if(isset($_GET["id"])&&$_GET["id"]=="profile"){ ?>
		<li class="white-tiles dynamic-tile" style="height: initial;margin-bottom:10px;">
			<ul class="social-links">
  				<li class="social-links"><i class="fa fa-facebook"></i>
  				<li class="social-links"><i class="fa fa-youtube"></i>
				<li class="social-links"><i class="fa fa-twitter"></i>
				<li class="social-links"><i class="fa fa-instagram"></i>
				<li class="social-links"><i class="fa fa-soundcloud"></i>
				<li class="social-links"><i class="fa fa-linkedin-square"></i>
				<li class="social-links"><i class="fa fa-pinterest"></i>
			</ul>
		</li>
<?php } ?>

<?php if(isset($_GET["id"])&&$_GET["id"]=="home"){ ?>

		<li class="white-tiles global-trend">
			<div class="live-tile-head">Global Trends</div>
	  		<ul class="trend-bar">
				<li class="trend-bar">
                    <span class="trend-sign">#</span>
			       	<span class="trend-content"> 
                    	<p class="trend-topic">RR vs MI:</p>
                    	<span class="trend-desc">RR won by 7 wickets in Indian Premier League match</span></span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
					<span class="trend-content">			       	  
  						<p class="trend-topic">Windows 10:</p>
			       	  	<span class="trend-desc">Microsoft annouced the release in this Summer</span>
  					</span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
                    <span class="trend-content">
			       	  <p class="trend-topic">Net Neutrality:</p>
                      <span class="trend-desc">Net neutrality supporters tell their mood about Airtel Zero</span>
                    </span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
                    <span class="trend-content">
			       	  <p class="trend-topic">Marco Rubio:</p>
                      <span class="trend-desc">US Senator, R-Fla., Announces Candidacy for 2016 Presidential Run</span>
                    </span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
                    <span class="trend-content">
			       	  <p class="trend-topic">Flipkart:</p>
                      <span class="trend-desc">Online Retailer Halts Airtel Zero Platform Deal Over Net Neutrality</span>
                    </span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
                    <span class="trend-content">
			       	  <p class="trend-topic">Gautam Gambhir:</p>
                      <span class="trend-desc">Kolkata Knight Riders Skipper Donates Rs. 4 Lakh to Indian Ice Hockey Team</span>
                    </span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
                    <span class="trend-content">
			       	  <p class="trend-topic">Michelle MacLaren:</p>
                      <span class="trend-desc">Director Leaves 'Wonder Woman' Film Adaptation Over Creative Differences</span>
                    </span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
                    <span class="trend-content">
			       	  <p class="trend-topic">Olivia Munn:</p>
                      <span class="trend-desc">Actress Cast as Psylocke, Also Known as Betsy Braddock, in 'X-Men: Apocalypse'</span>
                    </span>
                <li class="trend-bar">
                    <span class="trend-sign">#</span>
                    <span class="trend-content">
			       	  <p class="trend-topic">Dassault Rafale:</p>
                      <span class="trend-desc">India Says Future Purchases of Fighter Jet Will Be Between Governments</span>
                    </span>
		   </ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">#CricketScore</div>
	  		<ul></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">#ShareMarket</div>
	  		<ul></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">#TwitterUpdates</div>
	  		<ul></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">#NewMusic</div>
	  		<ul></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">#JustinBieber</div>
	  		<ul></ul>
		</li>

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="videos"||$_GET["id"]=="audio"||$_GET["id"]=="profile"){ ?>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			<span class="fa fa-globe">
			</span> Global Trends </div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			<span class="fa fa-dot-circle-o" style="color: rgb(55, 255, 0);">
			</span> Live Now</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			<span class="fa fa-star" style="color: rgb(155, 0, 255);">
			</span> Recommended</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			<span class="fa fa-conFlag fa-usa">
			</span> Local Trends</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<!--li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			<span class="fa fa-conFlag fa-usa" style="color: rgb(0, 55, 255);">
			</span> New Music/ Trending Music/ </div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li-->

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			 Global Trends</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			 Featured</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			 Recommended</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

		<li class="white-tiles dynamic-tile">
			<div class="live-tile-head">
			 Today's Best</div>
	  		<ul class="trend-bar global-vid-trends"></ul>
		</li>

<?php } ?>

</ul>