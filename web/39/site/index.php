<?php

$sectionName = "web";
$galleryName = "Xyntha's 11 Reasons";
$galleryCopyright = "&copy; JUICE Pharma Worldwide; &copy; Pfizer";

$totalSwitches = 1;

$allSwitches[1]['name'] = 'Flash application';
$allSwitches[1]['content'] = '<object type="application/x-shockwave-flash" data="11reasons.swf" width="545" height="475">
<param name="movie" value="11reasons.swf" /></object>

';


$dirLevel = 3;
$dirPrefix = "../../../";

include("../../../includes/top.php");

include("../../../includes/galleryV2.php");

include("../../../includes/bottom.php");
?>