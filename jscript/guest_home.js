$(document).ready(function() {
    ///////////////////////////////////////////////////////////////

    var mouseX = 0;
    var mouseY = 0;
    var postring;
    var docW = $(document).width();
    var bg_pos;
    var planeX;
    var planeY;
    var m;
    var angle;

    var planepos = function() {

        leftOffsetPlane = $("#hdmsg").offset().left - 46;
        // alert(leftOffsetPlane);
        $("#paperplane").offset({
            left: leftOffsetPlane
        });
        $("#paperplane-soul").offset({
            left: leftOffsetPlane
        });
    };

    /*
        planepos();
        $(window).resize(function() {
            planepos();
        });
    */


    /*
        $("#body_bg_hover").mousemove(function(e) {
            mouseX = e.pageX;
            //mouseY = e.pageY-25;
            mouseY = e.pageY;

            planeX = $("#paperplane").offset().left;
            planeY = $("#paperplane").offset().top;

            m = (mouseY - planeY) / (mouseX - planeX);
            m = Math.abs(m);

            angle = Math.atan(m) * 180 / Math.PI;

            if (mouseX > planeX) {
                if (mouseY > planeY) {
                    angle = angle + "deg";
                } else {
                    angle = -angle + "deg";
                }
            } else {
                if (mouseY > planeY) {
                    angle = -(180 + angle) + "deg";
                } else {
                    angle = -(180 - angle) + "deg";
                }
            }

            angle = "rotate(" + angle + ")";
            $("#paperplane").css({
                "-webkit-transform": angle,
                "left": mouseX - 5,
                "top": mouseY - 25,
                "text-shadow": "rgba(0, 0, 0, 0.45) 2px 23px 1px"
            });

            $("#body_bg_hover").mouseleave(function() {
                $("#paperplane").css({
                    "-webkit-transform": "rotate(-85deg)",
                    "left": "",
                    "top": 55,
                    "text-shadow": ""
                });
            });


            /*bg_pos = mouseX+"px"; //mouseX- docW;
            postring="X:"+mouseX+" Y:"+mouseY;
            $("#mospos").text(postring).css({"left":mouseX,"top":mouseY});
            $("#body_bg").css({"width":bg_pos});

            $("#body_bg_hover").mouseleave(function(){
                $("#body_bg").css({"width":"100%"});
            });

    });*/
    //------------------------------------------------------------//

});
