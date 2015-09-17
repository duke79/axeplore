$(document).ready(function() {


    //checkbox check/uncheck------------------>>>>>>>>>>

    //rezize & drag the tiles
    //$(".white-tiles").draggable();
    //$(".trend-bar").sortable();
    //$(".right-side-container").sortable();
    // auto adjust the height of


    $('#post-gen-text').on('focus', function(e) {
        $(".post-gen-contnt-more-ops").slideDown(1200, "easeOutBounce");
    });

    $(".post-bt").on("click", function() {
        alert($("textarea.autoexpand").val());
    });


});
