<?php

$sectionName = "web";
$galleryName = "Playboy's Rock NYC Sweepstakes";
$galleryCopyright = "&copy; Playboy Enterprises Inc.; &copy; g&ouml;t2b";

$totalSwitches = 4;

$allSwitches[1]['name'] = '300 x 250 banner';
$allSwitches[1]['content'] = '<object type="application/x-shockwave-flash" data="300x250.swf" width="300" height="250">
<param name="movie" value="300x250.swf" /></object>

';

$allSwitches[2]['name'] = '728 x 90 banner';
$allSwitches[2]['content'] = '<object type="application/x-shockwave-flash" data="728x90.swf" width="728" height="90">
<param name="movie" value="728x90.swf" /></object>

';

$allSwitches[3]['name'] = '160 x 600 banner';
$allSwitches[3]['content'] = '<object type="application/x-shockwave-flash" data="160x600.swf" width="160" height="600">
<param name="movie" value="160x600.swf" /></object>

';

$allSwitches[4]['name'] = 'website';
$allSwitches[4]['content'] = '<img src="04.jpg" alt="" />

';


$dirLevel = 3;
$dirPrefix = "../../../";

include("../../../includes/top.php");

include("../../../includes/galleryV2.php");

include("../../../includes/bottom.php");
?>