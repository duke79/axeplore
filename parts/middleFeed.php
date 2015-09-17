<div id="mid-Feed-Endless" class="verticalBars">

<?php if(isset($_GET["id"])&&$_GET["id"]!="profile"){?>

    <div class="feed-post-box post-gen-box" style="width: 100%;">
        <form action="javascript:void(0);">
            <div class="post-gen-head">
                <ul>
                    <li class="top-op  selected"><span class="fa fa-pencil"></span> <span class="op-text"> Text</span>       
                    <li class="top-op"><span class="fa fa-link"></span> <span class="op-text"> Link</span>
                    <li class="top-op"><span class="fa fa-photo"></span> <span class="op-text"> Image</span>
                    <li class="top-op"><span class="fa fa-music"></span> <span class="op-text"> Audio</span>
                    <li class="top-op"><span class="fa fa-video-camera"></span> <span class="op-text"> Video</span>
                    <li class="top-op"><span class="fa fa-map-marker"></span> <span class="op-text"> Event</span>
                </ul>
            </div>

            <!--div class="post-nature-ops post-gen-contnt-more-ops">
                    <ul class="post-nature-ops"> 
                        <li class="post-nature-ops" id="text-post-type">
                            <span class="fa fa-quote-left" style="font-size: 14px;"></span>
                            <span>Status</span>
                            <span class="fa fa-caret-down" style="right: 8px;position: absolute;"></span>
                        </li></ul>
            </div-->

            <textarea type="text" class="autoexpand" id="post-gen-text" placeholder="Write some, copy-paste some or just share the link..."></textarea>
            
            <div class="post-gen-contnt-more-ops">
                <hr style="" class="textarea-divider">
                <textarea type="text" maxlength="100" id="post-gen-tags" placeholder="Type your #tags here"></textarea>

                <div class="post-nature-ops">
                    <ul class="post-nature-ops"> 
                        <!--li class="post-nature-ops">
                            <span class="fa fa-th" style="font-size: 14px;"></span>
                            <span>Category</span-->
                        <li class="post-nature-ops">
                            <span>Feeling</span>
                            <span class="fa fa-smile-o" style="font-size: 16px;"></span>
                        <li class="post-nature-ops">
                            <span>Location</span>
                            <span class="fa fa-map-marker" style="font-size: 16px;"></span>
                    </ul>
                </div>
            </div>


            <div class="post-gen-footer">
                <ul>
                    <li class="pgf-ops">
                        <input type="submit" value="Launch" class="post-bt">
                        <li class="pgf-ops">
                            <input type="checkbox" value="anon" id="anon" hidden="hidden">
                            <label for="anon"><span class="fa fa-check-box"></span> Anonymous</label>
                        </li>
                </ul>
            </div>
        </form>
    </div>

    <li class="barcon listcon" id="sorting" style="left: 0;list-style-type: none;float: none;display: inline-block;">
        <span class="dropSwitch"><i class="fa fa-th-large"></i></span>
    </li>
    <li class="barcon listcon" id="sorting" style="right: 0;list-style-type: none;float: right;display: inline-block;">
        <span class="dropSwitch"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></span>
        <ul class="subtab downwardsSubtab" id="sorting" style="display: none;">
            <li><i class="fa fa-bolt"></i>          Trending</li>
            <li><i class="fa fa-leaf"></i>          Fresh</li>
            <li><i class="fa fa-dot-circle-o" style="color:rgb(0, 255, 50);"></i>       Live</li>
        </ul>
    </li>
    <hr style="margin: 33px 60px;margin-top: -19px;border: 1px solid rgb(225, 225, 225);">

<?php } ?>
    
    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-rc.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Re\Code</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>On Carly Rae Jepsen's unholy thirst for living blood:</p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="home"){ ?>            
            <a class="post-link-container" href="http://www.theverge.com/2015/8/24/9189289/carly-rae-jepsen-vampire-satanic-drinks-blood" target="_blank">
                <div class="post-link-cover" style="background-image:url('http://localhost/vverse/user_data/testLinkImg1.jpg');">
                    <div class="post-link-domain">
                        <span class="fa fa-external-link"></span>
                        <span class="post-link-doamin-name">THEVERGE.COM</span>
                    </div>
                </div>
                <ul class="post-link-footer">
                    <li class="post-link-header">Carly Rae Jepsen is an actual vampire</li>
                    <li class="post-link-description">This week, Carly Rae Jepsen released her third studio album, E*MO*TION, to critical acclaim and widespread popular interest. But while the album purports to be a collection of exuberant yet...</li>
                </ul>
            </a>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>
            <div class="yube-feedvid-thumb" id="SXZKSrddXvg" style="background-image: url('https://i.ytimg.com/vi/SXZKSrddXvg/sddefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <img class="post-img" src="https://farm4.staticflickr.com/3884/14628293144_e20be3a615_z.jpg">
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193781466&color=ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false"></iframe>
<?php } ?>        
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op performed"> <span class="fa fa-heart react-bt-icon performed"></span>
                <li class="post-comment-bt post-bot-op" post-id="post344598dabalyan"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>

    </div>

    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-rc.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Re\Code</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content" id="playTo">
            <p>Typhoon Soudelor is lashing Taiwan, downing trees, traffic lights and power lines, and leaving at least four dead, one missing and dozens injured.</p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>

            <div class="yube-feedvid-thumb" id="gXKLnDNYEzs" style="background-image: url('https://i.ytimg.com/vi/gXKLnDNYEzs/sddefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <img class="post-img" src="https://farm5.staticflickr.com/4010/4346841192_27dda0c057_z_d.jpg">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/199607357&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
<?php } ?>        
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op performed"> <span class="fa fa-heart react-bt-icon performed"></span> 
                    <ul id="more-reactions">
                        <li class="post-bot-op react-more">
                            <span class="fa react-bt-icon fa-child"></span>
                        </li>
                        <li class="post-bot-op react-more">
                            <span class="fa react-bt-icon fa-heart-o"></span>
                        </li>
                        <li class="post-bot-op react-more">
                            <span class="fa react-bt-icon fa-meh-o"></span>
                        </li>
                    </ul>
                <li class="post-comment-bt post-bot-op" post-id="post344598dabalyan"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>

        <?php  require("parts/postComments.php");  ?>
    </div>

    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-verge.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Verge</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>Typhoon Soudelor is lashing Taiwan, downing trees, traffic lights and power lines, and leaving at least four dead, one missing and dozens injured.</p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>

            <div class="yube-feedvid-thumb" id="U8UfqRl_O0Y" style="background-image: url('https://i.ytimg.com/vi/U8UfqRl_O0Y/sddefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <img class="post-img" src="https://www-techinasiacom.netdna-ssl.com/wp-content/uploads/2012/06/silicon-valley-infographic-3.jpg">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/181253330&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
<?php } ?>
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op "><span class="fa fa-child react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>
    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-db.jpg"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Ankit Singh Balyan</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>“Sometimes life's going to hit you in the head with a brick. Don't lose faith. I'm convinced that the only thing that kept me going was that I loved what I did.” ― Steve Jobs </p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>
            
            <div class='feed-vid-container'>
                <iframe src="//player.vimeo.com/video/126106748?autoplay=0&badge=0&byline=0&title=0&color=white&portrait=0" frameborder="0" allowfullscreen="">
                </iframe>
            </div>

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <!--img class="post-img" src="http://upload.gfycat.com/transcode?fetchUrl=i.imgur.com/lKi99vn.gif"-->
            <img class="post-img" src="//i.imgur.com/lKi99vn.gif">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/186099480&color=ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false"></iframe>
<?php } ?>
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op"><span class="fa fa-heart-o react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>
    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-tnw.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">The Next Web</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>The stale-cake narrative on self-made billionaires takes away from the real story behind these men: privileged families, prodigious intelligence, shrewd business sense, industry and a violent determination to make it or break it.
            </p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>

            <div class="yube-feedvid-thumb" id="o2wGeMw-NEs" style="background-image: url('https://i.ytimg.com/vi/o2wGeMw-NEs/sddefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <img class="post-img" src="https://farm5.staticflickr.com/4088/5037955976_1537b30234_z.jpg">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193781466&color=ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false"></iframe>
<?php } else{ ?>
            <img class="post-img" src="user_data/testPostImg-1.png">
<?php } ?>        
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op "> <span class="fa fa-heart-o react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op performed"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>
    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-rc.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Re\Code</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>One day I'll surrender, but 
                Next day I'll be a ReBeL :))</p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>

            <div class="yube-feedvid-thumb" id="Vrr3lRLjZ1Y" style="background-image: url('https://i.ytimg.com/vi/Vrr3lRLjZ1Y/hqdefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"||$_GET["id"]=="home"){ ?>
            <img class="post-img" src="user_data/testPostImg.jpg">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193781466&color=ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false"></iframe>
<?php } ?>        
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op "> <span class="fa fa-heart-o react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>

    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-verge.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Verge</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>Want to know how much Game of War or Clash of Clans spends on user aquisition?</p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="home"){ ?>            
            <a class="post-link-container" href="http://onvb.co/VpqE0Cd" target="_blank">
                <div class="post-link-cover" style="background-image:url('http://localhost/vverse/user_data/testLinkImg.png');">
                    <div class="post-link-domain">
                        <span class="fa fa-external-link"></span>
                        <span class="post-link-doamin-name">onvb.co</span>
                    </div>
                </div>
                <ul class="post-link-footer">
                    <li class="post-link-header">This service tells you what Supercell, Machine Zone, and other big publishers spend on user acquisition</li>
                    <li class="post-link-description">Mobile user acquisition costs are soaring. But how much is your competition spending?</li>
                </ul>
            </a>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>

            <div class="yube-feedvid-thumb" id="U8UfqRl_O0Y" style="background-image: url('https://i.ytimg.com/vi/U8UfqRl_O0Y/sddefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <img class="post-img" src="user_data/testLinkImg.png">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/181253330&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
<?php } ?>
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op "><span class="fa fa-heart-o react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>
    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-db.jpg"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Ankit Singh Balyan</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>“Sometimes life's going to hit you in the head with a brick. Don't lose faith. I'm convinced that the only thing that kept me going was that I loved what I did.” ― Steve Jobs </p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"||$_GET["id"]=="home"){ ?>
            
            <div class='feed-vid-container'>
                <iframe src="//player.vimeo.com/video/126106748?autoplay=0&badge=0&byline=0&title=0&color=white&portrait=0" frameborder="0" allowfullscreen="">
                </iframe>
            </div>

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <!--img class="post-img" src="http://upload.gfycat.com/transcode?fetchUrl=i.imgur.com/lKi99vn.gif"-->
            <img class="post-img" src="//i.imgur.com/lKi99vn.gif">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/186099480&color=ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false"></iframe>
<?php } ?>
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op"><span class="fa fa-heart-o react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>
    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-tnw.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">The Next Web</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>The stale-cake narrative on self-made billionaires takes away from the real story behind these men: privileged families, prodigious intelligence, shrewd business sense, industry and a violent determination to make it or break it.
            </p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>

            <div class="yube-feedvid-thumb" id="o2wGeMw-NEs" style="background-image: url('https://i.ytimg.com/vi/o2wGeMw-NEs/sddefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"||$_GET["id"]=="home"){ ?>
            <img class="post-img" src="https://farm5.staticflickr.com/4088/5037955976_1537b30234_z.jpg">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193781466&color=ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false"></iframe>
<?php } else{ ?>
            <img class="post-img" src="user_data/testPostImg-1.png">
<?php } ?>        
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op "> <span class="fa fa-heart-o react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op performed"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>
    <div class="feed-post-box">
        <div class="shadowed-box">
        <div class="post-box-info-head">
            <ul class="pbih-ul">
                <li class="post-author-pic">
                    <a href="#"><img src="user_data/testDP-rc.png"></a>
                    <li class="post-info">
                        <ul class="post-info-ul">
                            <li class="post-author-username">
                                <a href="#">Re\Code</a>
                                <li class="fa fa-history post-timestamp">
                                    <a href="#">Yesterday at 1:13am</a>
                        </ul>
                        <li class="pbh-ops post-more-ops"><span class="fa fa-ellipsis-v"></span>
                            <?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>  <li class="pbh-ops post-preview"><span class="fa fa-expand"></span> <?php } ?>
                                <li class="pbh-ops post-save-bt"><span class="fa fa-bookmark-o save-bt-icon"></span>
            </ul>
        </div>
        <div class="post-box-content">
            <p>One day I'll surrender, but 
                Next day I'll be a ReBeL :))</p>
<?php if(isset($_GET["id"])&&$_GET["id"]=="videos"){ ?>

            <div class="yube-feedvid-thumb" id="Vrr3lRLjZ1Y" style="background-image: url('https://i.ytimg.com/vi/Vrr3lRLjZ1Y/hqdefault.jpg');">
                <span class="fa fa-play"></span>
            </div>
<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="images"){ ?>
            <img class="post-img" src="user_data/testPostImg.jpg">

<?php } elseif(isset($_GET["id"])&&$_GET["id"]=="audio"){ ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/193781466&color=ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false"></iframe>
<?php } ?>        
        </div>
        <hr class="fpb-op-hr">
        <div class="op-counts">
            <p>17 reactions / 49 comments / 11 echoes</p>
        </div>
        </div>
        <div class="post-box-footer">
            <ul class="pbf-ul">
                <li class="post-react-bt post-bot-op "> <span class="fa fa-heart-o react-bt-icon"></span>
                    <li class="post-comment-bt post-bot-op"><span class="fa fa-comments-o"></span> <span class="op-text"> Comment</span>
                        <li class="post-echo-bt post-bot-op"><span class="op-text">Echo </span><span class="fa fa-rss"></span>
            </ul>
        </div>
    </div>

    <div class="feed-post-box feed-more shadowed-box">Load More..</div>
</div>
