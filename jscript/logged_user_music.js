$(document).ready(function() {

    /////  Youtube API, vidLoad, play ,controls, subsButton------------------------>>>>>>>>>>>>>>>

    var player;
    var videos;
    var videoCounter = 0;
    var intervalFlag = false;
    var beginCountdown;
    var tl = 5;
    var playingNowId = "vid";
    var getvids = function() {
        var ajurls = new XMLHttpRequest();
        var url = "http://localhost/vverse/funcs/vid_fetch.php?firstcat=Music&nitems=21";

        ajurls.onreadystatechange = function() {
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

        var vidDuration = "";
        var hrs;
        var mins;
        var secs;
        for (var i = 0; i < videos.length; i++) {
            vidDuration = "";
            hrs = ~~(videos[i].yt_duration / 3600);
            mins = ~~((videos[i].yt_duration % 3600) / 60);
            secs = videos[i].yt_duration % 60;

            if (hrs > 0)
                vidDuration += "" + hrs + ":" + (mins < 10 ? "0" : "");
            vidDuration += "" + mins + ":" + (secs < 10 ? "0" : "");
            vidDuration += "" + secs;
            $('#sidePlaylist').append('<li id="vid' + i + '"><a class="item_content" href="#"><span class="thumbLen"><img class="item_cover" src="' + videos[i].yt_thumbnail + '"><span class="vidLength">' + vidDuration + '</span></span>' + videos[i].yt_title + '</a>');
        }
    }

    function onYouTubePlayerAPIReady() {

        alert("ApiReady Now remove extra function below this func");

        getvids();

    }

    getvids(); //because ^ function is not running IDK Y ?????

    function loadFirstVid() {
        player = new YT.Player('vframe', {
            videoId: videos[videoCounter].url, //'47dtFZ8CFo8',
            playerVars: {
                'autoplay': 0,
                'controls': 0,
                'autohide': 1,
                'showinfo': 0,
                'controls': 1,
                'iv_load_policy': 3,
                'disablekb': 1,
                'modestbranding': 1,
                'rel': 0,
                'theme': 'light',
                'color': 'white'
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });

    }

    function processYtSubscribeButtonClick(event) {
        console.log(event);
        if (event.eventType == 'subscribe') {
            alert("Thank You");
        } else if (event.eventType == 'unsubscribe') {
            alert("Fuck You");
        }
    }

    function renderYtSubscribeButton(channel) {
        var container = document.getElementById('yt-button-container-render');
        var options = {
            "channel": channel,
            "layout": "full",
            "theme": "dark",
            "onytevent": processYtSubscribeButtonClick
        };
        gapi.ytsubscribe.render(container, options);
    }

    // autoplay video
    function onPlayerReady(event) {

        //event.target.playVideo();

        renderYtSubscribeButton(videos[videoCounter].yt_uploader);
        $('#contentTitle').text(videos[videoCounter].yt_title);
        playingNowId = "#vid" + videoCounter;
        $(playingNowId).addClass('playingNow');

        ///resetComments(videos[videoCounter].yt_title);
    }

    // when video ends
    function onPlayerStateChange(event) {

        if (event.data === 0) {
            $('.videoEndOps').show();

            tl = 5; /*Number($('#countDownTime').html());*/
            $('#countDownTime').text(tl);

            var countDownTimer = function() {

                tl--;
                $('#countDownTime').text(tl);
                if (tl == 0) {
                    window.clearInterval(beginCountdown);
                    intervalFlag = false;
                    loadNext();
                }
            };
            beginCountdown = window.setInterval(function() {
                countDownTimer()
            }, 1000);
            intervalFlag = true;
        }

    }

    var loadNext = function() {
        if (intervalFlag) {
            window.clearInterval(beginCountdown);
            intervalFlag = false;
        }

        $(".next i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
        player.loadVideoById({
            'videoId': videos[++videoCounter].url
        });
        //player.loadVideoById({'videoId':videos[++videoCounter].url, 'startSeconds': 5, 'endSeconds': 60, 'suggestedQuality': 'large'});

        renderYtSubscribeButton(videos[videoCounter].yt_uploader);
        $('#contentTitle').text(videos[videoCounter].yt_title);

        playingNowId = "#vid" + videoCounter;
        $(playingNowId).addClass('playingNow');
        $('#sidePlaylist').animate({
            scrollTop: $('#sidePlaylist').scrollTop() + $(playingNowId).offset().top - $('#sidePlaylist').offset().top
        }, 1000, 'linear');

        playingNowId = "#vid" + (videoCounter - 1);

        $(playingNowId).removeClass('playingNow');

        //resetComments(videos[videoCounter].yt_title);

        var animationBreak = function() {
            $('.videoEndOps').hide();
            $(".next i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
        }
        setTimeout(function() {
            animationBreak();
        }, 500);
    }

    $('.wait').click(function() {
        window.clearInterval(beginCountdown);
    });
    $('.replay').click(function() {
        if (intervalFlag) {
            clearInterval(beginCountdown);
            intervalFlag = false;
        }
        $('.videoEndOps').hide();
        player.playVideo();
    });



    /*/prevent link default behaviour----------------->>>>>>>>>>
    $("a").click(function(e) {
        e.preventDefault();

    });
    */
    //set the iframe height------------------------------------>>>

    var frame_height = function() {

        var hd = $(window).height();
        //var hif= $("#vframe").height();

        if (hd >= 500) {
            var h = hd - $("#superset").height() - $("#statbar").height() - $("#myfoot").height() - 6;
            //var h=hd-$("#statbar").height()-$("#myfoot").height()-6;
            $(".sizeable").height(h);
            //$("#leftbar>div").height((h)/4);
            //$("div.rightbar").height((h)/3);
            $("body").height(hd);
        }



        //isoverflown(); //to collect overflown superset li
    }

    //run function at startup
    frame_height();

    //and run it every time window resize takes place
    $(window).resize(function() {
        frame_height();
    });
    //-------------------------------------------------------------//


    //collecting overflown superset categories-------------------------------->>>

    function overflown() {
        var li_count = $("#ssul > li").length;
        var li_id;
        var li_offset_right;
        var ul_width_count = 0;

        $(".afterflow").show();
        $("li.afterflow").css({
            "position": "absolute"
        });

        for (var i = li_count - 1; i > 8; i--) {
            li_id = "#supcat_" + i;
            li_offset_right = $(window).width() - $(li_id).offset().left - 60 - 20; // 60 is variance to hide semi-visible li and 20 is to reserve space for "more.."
            if (li_offset_right < 0) {
                var li_id_inline = "#ssul " + li_id;
                var li_id_outofline = "ul.afterflow " + li_id;
                $(li_id_inline).hide();
                $(li_id_outofline).show();
                ul_width_count++;
            }
        }

        $("ul.afterflow").hide();
        $("li.afterflow").css({
            "position": "relative"
        });
        $("li.afterflow").mouseover(function() {

            $("ul.afterflow").show();

            $("li.afterflow").mouseleave(function() {
                $("ul.afterflow").hide();
            });
        });

    }

    function isoverflown() {
            if ($(window).width() < 1366) {
                overflown();
            }
        }
        //-------------------------------------------------------------//

    //iframe opacity reduction while axeing----------------------------------->>>

    var nightmodeOFF = function() {
        $(".ours").css({
            "opacity": "1"
        });
        $("body").css({
            "background-color": "rgb(255, 255, 255)"
        });
        $("div.rightbar").toggleClass("darkPseudo");
        //$(".sidebar").css({"background-color":"rgb(24,24,24)"});
    }
    var nightmodeON = function() {
        $(".ours").css({
            "opacity": ".05"
        });
        $("body").css({
            "background-color": "rgb(8, 8, 8)"
        }); /*rgb(32, 32, 32)*/
        $("div.rightbar").toggleClass("darkPseudo");
        //$(".sidebar").css({"background-color":"transparent"});
    }
    var nightmode = 0;

    $("#visuals").click(function() {
        if (nightmode == 0) {
            nightmodeON();
            nightmode = 1;
            $(this).removeClass("imp");
        } else {
            nightmodeOFF();
            nightmode = 0;
            $(this).addClass("imp");
        }
    });

    $(".ours").mouseover(function() {
        if (nightmode == 1)
            nightmodeOFF();

        $(".ours").mouseleave(function() {
            if (nightmode == 1)
                nightmodeON();
        });
    });

    //--------------------------------------------------------------//

    //load X - on click (forward)---------------------------->>>


    $(".next").click(function() {
        function load_anim() {

            $("#contentloadanim").hide();
            $(".process_bar").toggleClass("processing");
            $('#processing_window').hide();

            $(".next i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
            $('.videoEndOps').hide();
            player.loadVideoById({
                videoId: videos[++videoCounter].url
            });
            renderYtSubscribeButton(videos[videoCounter].yt_uploader);
            $('#contentTitle').text(videos[videoCounter].yt_title);

            playingNowId = "#vid" + videoCounter;
            $(playingNowId).addClass('playingNow');
            $('#sidePlaylist').animate({
                scrollTop: $('#sidePlaylist').scrollTop() + $(playingNowId).offset().top - $('#sidePlaylist').offset().top
            }, 1000, 'linear');
            playingNowId = "#vid" + (videoCounter - 1);
            $(playingNowId).removeClass('playingNow');

            //resetComments(videos[videoCounter].yt_title);
        }
        if (intervalFlag) {
            window.clearInterval(beginCountdown);
            intervalFlag = false;
        }

        $("#contentloadanim").show();
        $('#processing_window').show();
        $(".process_bar").toggleClass("processing");
        $(".next i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
        setTimeout(function() {
            load_anim()
        }, 2000)

    });

    $(".back").click(function() {
        function load_anim() {

            $(".process_bar").toggleClass("processing");
            $('#processing_window').hide();

            $(".back i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
            $('.videoEndOps').hide();
            player.loadVideoById({
                videoId: videos[--videoCounter].url
            });
            renderYtSubscribeButton(videos[videoCounter].yt_uploader);
            $('#contentTitle').text(videos[videoCounter].yt_title);

            playingNowId = "#vid" + videoCounter;
            $(playingNowId).addClass('playingNow');
            $('#sidePlaylist').animate({
                scrollTop: $('#sidePlaylist').scrollTop() + $(playingNowId).offset().top - $('#sidePlaylist').offset().top
            }, 1000, 'linear');
            playingNowId = "#vid" + (videoCounter + 1);
            $(playingNowId).removeClass('playingNow');

            //resetComments(videos[videoCounter].yt_title);
        }
        if (intervalFlag) {
            window.clearInterval(beginCountdown);
            intervalFlag = false;
        }

        $('#processing_window').show();
        $(".process_bar").toggleClass("processing");
        $(".back i").toggleClass("fa-chevron-right").toggleClass("fa-refresh").toggleClass("fa-spin");
        setTimeout(function() {
            load_anim()
        }, 2000)
    });
    //------------------------------------------------------------//

    // left sidebar content hover/leave----------------------------------->>>

    $(".multitask").mouseover(function(event) {
        var sub_select = "#" + $(this).attr("id") + ".sidesub";
        $(".sidesub").hide();
        $(sub_select).show();

        $(".multitask").mouseleave(function() {
            $(".sidesub").hide();
        });
    });


    $(".sidesub").mouseover(function(event) {
        var sup_select = "#" + $(this).attr("id") + ".parentofVC";
        var hoverclass = $(this).attr("id") + "hover";
        $("#leftbar>.parentofVC").removeClass(hoverclass);
        $(sup_select).addClass(hoverclass).css({
            "color": "white"
        });

        $(".sidesub").mouseleave(function() {
            $(sup_select).removeClass(hoverclass).css({
                "color": ""
            });
        });
    });
    //--------------------------------------------------------------//

    // right sidebar list and comment toggleClick----------------------------------->>>
    $(".playlistToggle").click(function(event) {

        $("#more.rightbar").toggleClass("listopen");
        $("#more.sublist").slideToggle(200);
    });

    $(".commentsToggle").click(function(event) {

        $(".comments").toggleClass("activated");

        if ($("#commentsNinfo").is(":visible")) {
            $("#commentsNinfo").animate({
                "top": "100%"
            }, 500);
            $("#commentsNinfo").toggle(0);
        } else
            $("#commentsNinfo").toggle(0).animate({
                "top": 0
            }, 500);
    });

    //--------------------------------------------------------------//

    $(".videoWrapper").mouseover(function() {
        $("#shareThis").show();

        $(".videoWrapper").mouseleave(function() {
            $("#shareThis").hide();
        })
    });


    //    player.cueVideoById({videoId:'dxytyRy-O1k'});


    /*videos[0]='8uJ-wOljP_s';
                            videos[1]='5qF_qbaWt3Q';
                            videos[2]='j5-yKhDd64s';
                            videos[3]='JByDbPn6A1o';
                            videos[4]='2cXDgFwE13g';
                            videos[5]='dxytyRy-O1k';*/




});
/*/---------------------Disqus thread asynchronous loading and reset function---->>>>>>>>>>>>>>>>>>>>>>>>>>>>>


window.disqus_no_style = true;
$.getScript("http://disqus.com/forums/axeplorer/embed.js")


var resetComments = function(newIdentifier) {
    DISQUS.reset({
        reload: true,
        config: function() {
            this.page.identifier = newIdentifier;
            //  this.page.url = newUrl;
            this.page.title = newIdentifier;
            //  this.language = newLanguage;
        }
    });
};
*/
