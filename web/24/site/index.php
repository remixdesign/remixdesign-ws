<?php

$sectionName = "web";
$galleryName = "Playboy's Interns";
$galleryCopyright = "&copy; Playboy Enterprises Inc.";

$totalSwitches = 2;

$allSwitches[1]['name'] = '300 x 250 banner';
$allSwitches[1]['content'] = '<object type="application/x-shockwave-flash" data="300x250.swf" width="300" height="250">
<param name="movie" value="300x250.swf" /></object>

';

$allSwitches[2]['name'] = 'website';
$allSwitches[2]['content'] = '<iframe src="site.html" width="750" height="750" frameborder="0"></iframe>

';


$dirLevel = 3;
$dirPrefix = "../../../";

include("../../../includes/top.php");

include("../../../includes/galleryV2.php");

include("../../../includes/bottom.php");
?>