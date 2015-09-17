<?php

//	header("Access-Control-Allow-Origin: *");
//	header("Content-Type: text/html; charset=UTF-8");

	if(isset($_GET['firstcat']))
	{
		$con=mysqli_connect('localhost','root','','axr');

		$firstcat = mysqli_real_escape_string($con, $_GET['firstcat']);
		$nitems = mysqli_real_escape_string($con, $_GET['nitems']);
		//$sortby = mysqli_real_escape_string($con, $_GET['sortby']);
		
		$qresponse= mysqli_query($con,"SELECT url,tags from video where tag_1='$firstcat' ORDER BY `auto_id` ASC limit 9,$nitems");

		$outp = "[";
		while($vidinfo=mysqli_fetch_array($qresponse))
		{
			if ($outp != "[") {$outp .= ",";}
		    $outp .= '{"url":"'  . $vidinfo["url"] . '",';

		    $jsondata= file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=snippet%2Cstatistics%2CcontentDetails&id='.$vidinfo["url"].'&key=AIzaSyA1fwMXtdY51lefTujGlaqAnmcwfIfBmHQ');
		    $jsondata= json_decode($jsondata);

		    $outp .= '"yt_title":"' . $jsondata->items[0]->{'snippet'}->{'title'} . '",';
		    $outp .= '"yt_uploader":"' . $jsondata->items[0]->{'snippet'}->{'channelTitle'} . '",';
		    $outp .= '"yt_uploadDate":"' . $jsondata->items[0]->{'snippet'}->{'publishedAt'} . '",';
		    $outp .= '"yt_category":"' . $jsondata->items[0]->{'snippet'}->{'categoryId'} . '",';
		    $outp .= '"yt_duration":"' . $jsondata->items[0]->{'contentDetails'}->{'duration'} . '",';
		    $outp .= '"yt_viewcount":"' . $jsondata->items[0]->{'statistics'}->{'viewCount'} . '",';
		    $outp .= '"yt_thumbnail":"' . $jsondata->items[0]->{'snippet'}->{'thumbnails'}->{'high'}->{'url'} . '",';
		    //v2 if($jsondata->items[0]->{'accessControl'}->{'comment'}!='denied') //do the same for embed or other permissions
		    $outp .= '"yt_commentCount":"' . $jsondata->items[0]->{'statistics'}->{'commentCount'} . '",';
		    $outp .= '"yt_url":"' . $vidinfo["url"] . '",';
		   
		    //v2 $outp .= '"yt_embedPermission":"' . $jsondata->items[0]->{'accessControl'}->{'embed'} . '",';

		    $outp .= '"tagss":"'. $vidinfo["tags"]  . '"}';
		}

		$outp .="]";

		echo $outp;
		//echo $http_response_header[0];

		mysqli_close($con);
	}