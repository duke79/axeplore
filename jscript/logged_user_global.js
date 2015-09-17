$(document).ready(function() {

    $(".white-tiles").on("click", 'a.desabled', function() {
        return false;
    });

    $(".white-tiles").on("click", 'a.listVideo', function() {
        $("#popUpPostContainer").show();
        $("body").css({
            "overflow": "hidden"
        });
        $("#bigVidPlayer").replaceWith("<iframe id='bigVidPlayer' src='https://www.youtube.com/embed/" + $(this).attr("embUrl") + "?autoplay=1&controls=1&autohide=1&showinfo=0&iv_load_policy=3&disablekb=1&modestbranding=1&rel=0&color=white&enablejsapi=1' frameborder='0' allowfullscreen=''> </iframe>");
    });

    $(".post-save-tl").click(function() {
        $(".vid-playin-now").prependTo("#playTo");
    });
    //procesing progress bar anim------------------>>>>>>>>>>>>>>>
    var processing = function() {
        $("#processing_window").toggle();
        $(".process_bar").toggleClass("processing");
    };

    processing();
    setTimeout(function() {
        processing();
    }, 3000)


    //header compression/extraction- &&  sideToolbar scrolling fixation---------------->>>>>>>>>>>>>>
    var oldScroll, newScroll, lastScroll = 0,
        slDownFlag = 0,
        FTBfixedFlag = 0,
        FTBbottomFix = 0,
        fixdToolBar = $(".to-be-fixed-side-toolbar"),
        FTBparentLeftOffset,
        FTBInitOffsetTop = fixdToolBar.offset().top,
        FTBoffsetBottom = 0,
        FixedElmTop = 98;

    var headHeight = function(e) {

        oldScroll = newScroll;
        newScroll = $(document).scrollTop();

        FTBparentLeftOffset = $("#main-bars-container").offset().left;
        FTBoffsetBottom = (newScroll + $(window).height()) - fixdToolBar.offset().top - fixdToolBar.height();

        if (newScroll > oldScroll) {

            if (FTBoffsetBottom >= $(window).height() && FTBfixedFlag == 0) {

                fixdToolBar.css({
                    "top": "auto",
                    "bottom": FTBoffsetBottom,
                    "left": FTBparentLeftOffset,
                    "position": "fixed"
                })
                FTBfixedFlag = 1;
                FTBbottomFix = 1;
            } else if (FTBfixedFlag == 1 && FTBbottomFix == 0) {
                fixdToolBar.css({
                    "top": fixdToolBar.offset().top - FTBInitOffsetTop,
                    "bottom": "auto",
                    "left": "auto",
                    "position": "absolute"
                });
                FTBfixedFlag = 0;
            }

            //---------header comression--------------------------------/-----------/
            if (slDownFlag == 1) {
                lastScroll = newScroll;
                slDownFlag = 0;
            } else if (newScroll > lastScroll + 31)
                $("#superset").promise().done(function() {
                    $(this).stop(true).slideUp(800, "linear");
                });

            //---------------------------------------------------------------------/

        } else if (newScroll < oldScroll || newScroll < 98) {
            if (FTBfixedFlag == 1 && FTBbottomFix == 1 && newScroll != 0) {
                fixdToolBar.css({
                    "top": fixdToolBar.offset().top - FTBInitOffsetTop,
                    "bottom": "auto",
                    "left": "auto",
                    "position": "absolute"
                });
                FTBfixedFlag = 0;
                FTBbottomFix = 0;
            } else if (newScroll <= fixdToolBar.offset().top - FixedElmTop && FTBfixedFlag == 0 && newScroll > FTBInitOffsetTop - FixedElmTop) {
                fixdToolBar.css({
                    "top": FixedElmTop,
                    "bottom": "auto",
                    "left": FTBparentLeftOffset,
                    "position": "fixed"
                });
                FTBfixedFlag = 1;

            } else if (newScroll == 0 || FTBfixedFlag == 1 && newScroll <= FTBInitOffsetTop - FixedElmTop) {
                fixdToolBar.css({
                    "top": "auto",
                    "bottom": "auto",
                    "left": "auto",
                    "position": "absolute"
                });
                FTBfixedFlag = 0;
            }

            //---------header expantion--------------------------------/-----------/
            if (slDownFlag == 0 && newScroll != 0) {
                lastScroll = newScroll;
                slDownFlag = 1;
            } else if (lastScroll > newScroll + 31 || newScroll < 98)
                $("#superset").promise().done(function() {
                    $(this).stop(true).slideDown(800, "linear");
                });

            //---------------------------------------------------------------------/
        }

        //$("#testDisp").html("FTBoffsetBottom: " + FTBoffsetBottom + "<br>FTBInitOffsetTop: " + FTBInitOffsetTop + "<br>FTBOffsetTop: " + fixdToolBar.offset().top + "<br>newScroll: " + newScroll + "<br>oldScroll: " + oldScroll + "<br>lastScroll: " + lastScroll + "<br>cssTop: " + fixdToolBar.css("top") + "<br>FTBfixedFlag: " + FTBfixedFlag + "<br>FTBbottomFix: " + FTBbottomFix);

        $.resizeOnFixdHndlr = function() {
            if (FTBfixedFlag == 1)
                fixdToolBar.css({
                    "left": $(".main-bars-container").offset().left
                });
        }
    };

    headHeight();
    $(window).scroll(function(e) {
        headHeight(e);
    });
    $(window).resize(function() {
        $.resizeOnFixdHndlr();
    });

    //-supcat highlighter moving back-------------------------------->>>>>
    var init_active_supcat_id = $(".supsetHighlight").attr("id");
    var prv_loc_i;

    var move_supcat_back = function(item_id) {
        var loc_i = /[0-9]/g;

        loc_i = loc_i.exec(item_id);
        console.log(prv_loc_i + "  " + loc_i);
        if (prv_loc_i != loc_i) {
            console.log(prv_loc_i + "  " + loc_i);
            prv_loc_i = loc_i;

            $(".supsetHighlight").removeClass("supsetHighlight");
            $("#" + item_id).addClass("supsetHighlight");

            $("#supcat_highlighter").stop(true).delay(100).animate({
                "left": (loc_i - 1) * 14.2857 + "%"
            }, 200);
        } else console.log("hmm");
    };

    move_supcat_back(init_active_supcat_id); //set the highlighted supcat back position at load

    $("#superset li").on("mouseover", function() {

        move_supcat_back($(this).attr("id"));
    });

    $("#superset").on("mouseleave", function() {

        move_supcat_back(init_active_supcat_id);

    });



    //poping up and out -------------------------------------------------------->>>

    $("#bout_page").click(function() {
        $(".popup").fadeIn();

        $("video").attr("src", function(i, origValue) {
            return origValue + "vid.mp4";
        });
    });

    $(".exitpop").click(function() {
        $(".popup").fadeOut();
        $("video").attr({
            "src": ""
        });
    });

    $(".quick-post, #pop_bg").click(function() {
        $("#submit.task").toggle();
        $("#pop_bg").toggle();
    });
    $("#save.barcon").click(function() {
        $("#save.task").fadeIn();
        $("#pop_bg").toggle();

    });

    //--------------post-gen-tagging helper------------------------>>>>>>>>
    $("#post-gen-tags").on("focus keyup change paste input", function(e) {

        var tagsText = $(this).val();
        var regtst = /^#/;

        if (e.keyCode == 8 && tagsText.charAt(tagsText.length - 1) == "#")
            tagsText = tagsText.substr(0, tagsText.length - 2);
        else if (!regtst.test("#") || tagsText.charAt(0) != "#") {

            tagsText = "#" + tagsText;
            // $('#elem').selectRange(3, 5); // select a range of text
            //$('#post-gen-tags').selectRange(2);
        }

        tagsText = tagsText.replace(/[^\w\s#]/gi, '');
        tagsText = tagsText.replace(/[\s#]+/g, ' #');
        tagsText = tagsText.replace(/(^\s#)/, '#');

        $("#post-gen-tags").val(tagsText);

        /*$.fn.selectRange = function(start, end) {
            if (!end) end = start;
            return this.each(function() {
                if (this.setSelectionRange) {
                    this.focus();
                    this.setSelectionRange(start, end);
                } else if (this.createTextRange) {
                    var range = this.createTextRange();
                    range.collapse(true);
                    range.moveEnd('character', end);
                    range.moveStart('character', start);
                    range.select();
                }
            });
        };*/


    });
    //-------------------------------------------------------------//

    //fiter text refine tag highlight------------------------------------->>>




    /*$("#tags").click(function(){
            $("#tagsHighlight").hide();

            var oldVal=$(this).val();
            $("#tags").mouseleave(function(){
                
                if(oldVal!=$(this).val())
                {
                    hTags();
                }
                $("#tagsHighlight").show();
            });
            // for instant suggetions $(this).on("change keyup paste", function(){
            //  dosomething();
            //});
        });*/
    var visibleInputFeild = $("#interest").width() - 100; // to set tagsHighlight Max-Width 
    $("#tagsHighlight").css({
        "max-width": visibleInputFeild
    });

    $("#tags").click(function(e) {
        $("#tagsHighlight").hide();

        var oldVal = $(this).val();

        /* for instant suggetions $(this).on("change keyup paste", function(){
            dosomething();
        });*/
    });


    $("#tags").on("mouseleave keyup change paste input", function(e) {

        /*$("#testW").text("width: "+padLeft+"  key: "+e.keyCode);
            if(padLeft>20)
            $(this).css({"padding-left":padLeft});*/

        //if(e.keyCode>32&&e.keyCode<128||e.keyCode==8) //or e.keyCode!=32&&e.keyCode!=37&&e.keyCode!=39&&e.keyCode!=8// or just keyCode==13 (enter) like pinterest
        if (e.keyCode == 13) {
            hTags(e);
        }

    });

    var hTags = function(e) {
        var txt = refinedText(e);
        $("#tagsHighlight").html("");

        var ind = 0;
        while (txt[ind]) {
            $("#tagsHighlight").append('<li><span class="tagText">' + txt[ind] + '</span><span class="fa-stack fa-lg tagRemove"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-close fa-stack-1x"></i></span></li>');
            ind++;
        }

        $("#tagsHighlight").slideDown(400);

        var padLeft = $("#tagsHighlight")[0].scrollWidth;
        $("#tagsHighlight").animate({
            scrollLeft: padLeft
        }, 1000, "linear");

        $("#interest ul.subtab").slideUp(50);
    }

    var refinedText = function(e) {
        var str = $("#tags").val();
        str = str.replace(/\s+/g, ' ');
        str = str.replace(/(^\s|\s$)+/g, '');
        $("#tags").val(str);

        str = str.split(" ");
        return str;
    }

    $("#tagsHighlight").on('click', 'span.tagRemove', function(e) { // because span(tags) are made after page load which can't be bound to an event listener before being made


        var contSel = $(this).parent().text();

        var regex = new RegExp("\s*" + contSel + "\s*");
        $("#tags").val($("#tags").val().replace(regex, " "));

        refinedText(e);

        $('.subtab li:contains(' + contSel + ')').removeClass("subtabHighlight");
        $(this).parent().remove();
    });

    //--------------------------------------------------------------//


    //subcategory selection menu show/hide------------------------------------->>>  

    var activeDropMenu = $(".subtab");

    $(".dropSwitch").on("click", function() {
        $("li.listcon").removeClass("activated");
        $(this).parent().addClass("activated").children(".subtab").slideDown(800, "easeOutBounce");
    });

    $("#listCats").click(function() {
        $("#interest ul.subtab").slideDown(800, "easeOutBounce");
    });

    $(document).mouseup(function(e) {

        if (!activeDropMenu.is(e.target) // if the target of the click isn't the container...
            && activeDropMenu.has(e.target).length === 0) // ... nor a descendant of the container
        {
            activeDropMenu.slideUp(50);
            $("li.listcon").removeClass("activated");
        }
    });

    /*$(".listcon").mouseleave(function() {
        $(".subtab").slideUp(50);
    });*/

    $(".subtab li").click(function() {
        $(this).addClass("subtabHighlight").parent().slideUp(50);
        $("li.listcon").removeClass("activated");
    });

    //--------------------------------------------------------------//
    $("#interest .subtab li").click(function() {
        $("#tags").val($("#tags").val() + " " + $(this).text());
        hTags();
    });


    //---------------textarea autoexpansion---------------------//

    $('textarea').on('keydown change paste input', function() {
        if ($(this).hasClass("autoexpand")) {
            $(this).height(0);
            $(this).height(this.scrollHeight - $(this).css('padding-top').replace("px", "") - $(this).css('padding-bottom').replace("px", ""));
        }
    });

    //post-box-header ops--------------
    $(".pbh-ops.post-save-bt").on('click', function() {
        $(this).toggleClass("performed");
        $(this).children(".save-bt-icon").toggleClass("fa-bookmark fa-bookmark-o");
    });

    //heart-full like bt--------------
    $(".post-react-bt").on('click', function() {
        $(this).toggleClass("performed");
        $(this).children(".react-bt-icon").toggleClass("fa-heart fa-heart-o performed");
    });

    $(".post-react-bt").on('mouseover', function() {
        $(this).children("#more-reactions").show();
    });


    $(".post-react-bt").on('mouseleave', function() {
        $(this).children("#more-reactions").hide();
    });

    //comment-load comment bt--------------
    $(".post-comment-bt").on('click', function() {
        $("div[post-id=" + $(this).attr('post-id') + "].post-comments-container").slideToggle(500);
    });

    //---------mode-selection---------
    $(".main-mode").on('click', function() {
        $(".active-side-filter").removeClass('active-side-filter');
        $(this).addClass('active-side-filter');
    });

    //-----------launch-type-select--------
    $(".top-op").on('click', function() {
        $(".selected").removeClass('selected');
        $(this).addClass('selected');
    });

    //---------switch-filter-toggle---------
    $(".only-text-filter, .irrelevent-filter").on('click', function() {
        $(this).children(".right-side-bt").toggleClass("fa-toggle-off fa-toggle-on");
    });


    //----------------------label check/uncheck---------------------
    $("label").on("click", function() {
        $(this).children(".fa-check-box").toggleClass("fa-check", $(this).siblings("input[type='checkbox']#" + $(this).attr("for")).checked);
    });


});
