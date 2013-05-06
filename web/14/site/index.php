<?php

$sectionName = "web";
$galleryName = "Sex Tips from Sex and the City";
$galleryCopyright = "&copy; 2008 Playboy Enterprises Inc.; &copy; HBO";

$totalSwitches = 2;

$allSwitches[1]['name'] = '300 x 250 banner';
$allSwitches[1]['content'] = '<object type="application/x-shockwave-flash" data="300x250.swf" width="300" height="250">
<param name="movie" value="300x250.swf" /></object>

';

$allSwitches[2]['name'] = '728 x 90 banner';
$allSwitches[2]['content'] = '<object type="application/x-shockwave-flash" data="728x90.swf" width="728" height="90">
<param name="movie" value="728x90.swf" /></object>

';


$dirLevel = 3;
$dirPrefix = "../../../";

include("../../../includes/top.php");

include("../../../includes/galleryV2.php");

include("../../../includes/bottom.php");
?>