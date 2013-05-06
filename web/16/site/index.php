<?php

$sectionName = "web";
$galleryName = "Playboy's Simply Perfect<br />Bunny Trail Sweepstakes";
$galleryCopyright = "&copy; Playboy Enterprises Inc.; &copy; Patr&oacute;n Spirits Company";

$totalSwitches = 7;

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

$allSwitches[5]['name'] = 'HTML email';
$allSwitches[5]['content'] = '<img src="05.jpg" alt="" />

';

$allSwitches[6]['name'] = 'spotlight banner';
$allSwitches[6]['content'] = '<img src="06.jpg" alt="" />

';

$allSwitches[7]['name'] = 'roadblock banner';
$allSwitches[7]['content'] = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="650" height="550" id="patron_sweeps_imprint" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="patron_sweeps_imprint.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="patron_sweeps_imprint.swf" quality="high" bgcolor="#ffffff" width="650" height="550" name="patron_sweeps_imprint" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>

';


$dirLevel = 3;
$dirPrefix = "../../../";

include("../../../includes/top.php");

include("../../../includes/galleryV2.php");

include("../../../includes/bottom.php");
?>