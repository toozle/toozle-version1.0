<?php
$q = $_GET["q"];
$se =$_GET["se"];

if ($se == "google"){
    header( "Location: https://www.google.com/search?q=$q" ) ;
}

if ($se == "pornhub"){
    header( "Location: https://jp.pornhub.com/gay/video/search?search=$q" ) ;
}

if ($se == "xvideos"){
    header( "Location: https://www.xvideos.com/?k=gay $q" ) ;
}

if ($se == "nicovideo"){
    header( "Location: https://www.nicovideo.jp/search/$q" ) ;
}

if ($se == "twitter"){
    header( "Location: https://twitter.com/search?q=$q" ) ;
}

if ($se == "fc2"){
    header( "Location: https://video.fc2.com/a/search/video/?keyword=$q" ) ;
}

if ($se == "youtube"){
    header( "Location: https://www.youtube.com/results?search_query=$q" ) ;
}
?>