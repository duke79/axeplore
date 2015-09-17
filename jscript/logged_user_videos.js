$(document).ready(function() {

    var getvids = function() {
        var ajurls = new XMLHttpRequest();
        var url = "http://localhost/vverse/funcs/vid_fetch.php?firstcat=Music&nitems=5";

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
        //loadFirstVid();

        var vidDuration = "";

        for (var i = 0; i < videos.length; i++) {
            vidDuration = videos[i].yt_duration;

            vidDuration = vidDuration.replace(/PT|S/gi, '');
            vidDuration = vidDuration.replace(/H|M/gi, ':');

            $('.global-vid-trends').append('<li class="listVideo" id="vid' + i + '"><a class="item_content listVideo desabled" embUrl="' + videos[i].yt_url + '" href="#"><span class="thumbLen"><img class="item_cover" src="' + videos[i].yt_thumbnail + '"><span class="vidLength">' + vidDuration + '</span></span>' + videos[i].yt_title + '</a>');
        }
    }

    getvids();

    //--------------feed yube vid load after click
    $(".yube-feedvid-thumb").on("click", function() {
        $(this).replaceWith("<div class='feed-vid-container vid-playin-now'><iframe src='https://www.youtube.com/embed/" + $(this).attr("id") + "?autoplay=1&controls=1&autohide=1&showinfo=0&iv_load_policy=3&disablekb=1&modestbranding=1&rel=0&theme=light&color=white&enablejsapi=1' frameborder='0' allowfullscreen=''> </iframe></div>");
    });

    /*/--------------feed yube vid out of site action------------------
    function isElementInViewport(el) {

        //special bonus for those using jQuery
        if (typeof jQuery === "function" && el instanceof jQuery) {
            el = el[0];
        }

        var rect = el.getBoundingClientRect();

        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() * /
            rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() * /
        );
    }

    function onVisibilityChange(el, callback) {
        return function() {
            /*your code here* /
            console.log('visibility ' + isElementInViewport(el));
        }
    }

    //var handler = onVisibilityChange(el, callback);
    var currentPost = function() {
        $(".feed-post-box").isElementInViewport();
    };

    //jQuery
    $(window).on('DOMContentLoaded load resize scroll', currentPost);

    //------------------------------------------------*/

    var playerCurrentlyPlaying = null;

    function chain() {
        $('.post').each(function() {
            var player_id = $(this).children('iframe').attr("id");
            player = new YT.Player(player_id, {
                events: {
                    'onStateChange': function(event) {

                        if (event.data == YT.PlayerState.PLAYING) {
                            if (playerCurrentlyPlaying != null &&
                                playerCurrentlyPlaying != player_id)
                                callPlayer(playerCurrentlyPlaying, 'pauseVideo');
                            playerCurrentlyPlaying = player_id;

                        }

                    }
                }
            });
        });
    }

});
