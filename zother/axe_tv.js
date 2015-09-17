//the       onYoutubePlayerAPIReady function won't work with $(document).ready   


		/////  Youtube API, vidLoad, play ,controls, subsButton------------------------>>>>>>>>>>>>>>>
function onYouTubePlayerAPIReady() {
	alert("ya");
				        	
				        
						var player;
				        var videos;
						var videoCounter=0;
						var intervalFlag=false;
						var beginCountdown;
						var tl = 5;
						var getvids= function(){
										var ajurls = new XMLHttpRequest();
										var url = "http://localhost/vverse/vid_fetch.php?firstcat=Music";

										ajurls.onreadystatechange=function() {
										    if (ajurls.readyState == 4 && ajurls.status == 200) {
											        myFunction(ajurls.responseText);
										    	}
										}
										ajurls.open("GET", url, true);
										ajurls.send();
									}
						function myFunction(response) {
							videos = JSON.parse(response);
							loadFirstVid();
						}

				        

				        getvids(); //because ^ function is not running IDK Y ?????

				        function loadFirstVid(){
				        	player = new YT.Player('vframe', {
							              videoId: videos[videoCounter].url, //'47dtFZ8CFo8',
							              playerVars: { 'autoplay': 1, 'controls': 0 , 'autohide':1, 'showinfo':0, 'controls':1, 'iv_load_policy':3, 'disablekb':1, 'modestbranding':1, 'rel':0, 'theme':'light', 'color':'white'},
							              events: {
							                'onReady': onPlayerReady,
							                'onStateChange': onPlayerStateChange
								              }
					            });
				        }

				        function processYtSubscribeButtonClick(event) {
						      console.log(event);
						    }
						function renderYtSubscribeButton(channel) {
					      var container = document.getElementById('yt-button-container-render');
					      var options = {
					        'channel': channel,
					        'layout': 'full',
					        'data-theme': 'dark',
					        'onytevent': processYtSubscribeButtonClick
						      };
						      gapi.ytsubscribe.render(container, options);
						    }
						    
				        // autoplay video
				        function onPlayerReady(event) {
				            
				            event.target.playVideo();
				           	renderYtSubscribeButton(videos[videoCounter].yt_uploader);
					        $('#contentTitle').text(videos[videoCounter].yt_title);
				        }

				        // when video ends
				        function onPlayerStateChange(event) {        

			    	        if(event.data === 0) {          				       
				                $('.videoEndOpsCover').show();

				                tl = 5; /*Number($('#countDownTime').html());*/
				                $('#countDownTime').text(tl);

				                var countDownTimer= function(){
				              			
				              			tl--;
				              			$('#countDownTime').text(tl);
				              			if(tl==0)
				              			{
				              				window.clearInterval(beginCountdown);intervalFlag=false;
				              				loadNext();
				              			}	    	
				              	};
				                beginCountdown= window.setInterval(function(){countDownTimer()},1000);
				                intervalFlag=true;
				            }
         
				        }

				      	var loadNext= function(){
				                			if(intervalFlag){window.clearInterval(beginCountdown);intervalFlag=false;}

				                			$(".next i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
				                			player.loadVideoById({'videoId':videos[++videoCounter].url});
				              				//player.loadVideoById({'videoId':videos[++videoCounter].url, 'startSeconds': 5, 'endSeconds': 60, 'suggestedQuality': 'large'});

				              				renderYtSubscribeButton(videos[videoCounter].yt_uploader);
					              			$('#contentTitle').text(videos[videoCounter].yt_title);
				              				
				              				setTimeout(function(){animationBreak();},500);
				              				var animationBreak=function(){
				              					$('.videoEndOpsCover').hide();
					              				$(".next i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
				              				}
				                		}

				        $('.wait').click(function(){
				               	window.clearInterval(beginCountdown);
				            });
				        $('.replay').click(function(){
				               	if(intervalFlag){clearInterval(beginCountdown);intervalFlag=false;}
				                	$('.videoEndOpsCover').hide();
				                	player.playVideo();
				            });

				       }

				       $.getScript("logged_user_home.js");