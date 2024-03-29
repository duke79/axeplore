<html>
<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
    <script type= "text/javascript">
    function getYouTubeInfo() {
            $.ajax({
                    url: "http://gdata.youtube.com/feeds/api/videos/<?php echo $_GET['v']; ?>?v=2&alt=json",
                    dataType: "jsonp",
                    success: function (data) { parseresults(data); }
            });
    }

    function parseresults(data) {
            var title = data.entry.title.$t;
            var description = data.entry.media$group.media$description.$t;
            var viewcount = data.entry.yt$statistics.viewCount;
            var author = data.entry.author[0].name.$t;
            $('#title').html(title);
            $('#description').html('<b>Description</b>: ' + description);
            $('#extrainfo').html('<b>Author</b>: ' + author + '<br/><b>Views</b>: ' + viewcount);
            getComments(data.entry.gd$comments.gd$feedLink.href + '&max-results=50&alt=json', 1);
    }

    function getComments(commentsURL, startIndex) {
            $.ajax({
                    url: commentsURL + '&start-index=' + startIndex,
                    dataType: "jsonp",
                    success: function (data) {
                    $.each(data.feed.entry, function(key, val) {
                            $('#comments').append('<br/>Author: ' + val.author[0].name.$t + ', Comment: ' + val.content.$t);
                    });
                    if ($(data.feed.entry).size() == 50) { getComments(commentsURL, startIndex + 50); }
                    }
            });
    }

    $(document).ready(function () {
            getYouTubeInfo();
    });
    </script>
    <title>YouTube</title>
</head>
<body bgcolor="grey">
    <div align="center">
            <br/><br/>
            <div id="title" style="color: #dddddd">Could not find a title</div><br/>
            <iframe title="Youtube Video Player" width="640" height="390" src="http://www.youtube.com/embed/<?php echo $_GET['v']; ?>?fs=1&autoplay=1&loop=0" frameborder="0" allowfullscreen style="border: 1px solid black"></iframe>
            <br/><br/>
            <div id="description" style="width:400px; background-color: #dddddd; font-size:10px; text-align:left;">Could not find a description</div>
            <div id="extrainfo" style="width:400px; background-color: #dddddd; font-size:10px; text-align:left;">Could not find extra information</div>
            <div id="comments" style="width:400px; background-color: #dddddd; font-size:10px; text-align:left;">Could not find comments</div>
    </div>

</body>