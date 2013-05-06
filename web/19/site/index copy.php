<?php

$sectionName = "web";
$galleryName = "Playboy's Rock NYC Sweepstakes";
$galleryCopyright = "&copy; Playboy Enterprises Inc.; &copy; g&ouml;t2b";

$totalSwitches = 4;

$allSwitches[1]['name'] = '300 x 250 banner';
$allSwitches[1]['content'] = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="300" height="250" id="300x250" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="300x250.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#c0cbdd" />	<embed src="300x250.swf" quality="high" bgcolor="#c0cbdd" width="300" height="250" name="300x250" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>

';

$allSwitches[2]['name'] = '728 x 90 banner';
$allSwitches[2]['content'] = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="728" height="90" id="728x90" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="728x90.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#c0cbdd" />	<embed src="728x90.swf" quality="high" bgcolor="#c0cbdd" width="728" height="90" name="728x90" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>

';

$allSwitches[3]['name'] = '160 x 600 banner';
$allSwitches[3]['content'] = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="160" height="600" id="160x600" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="160x600.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#c0cbdd" />	<embed src="160x600.swf" quality="high" bgcolor="#c0cbdd" width="160" height="600" name="160x600" align="middle" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>

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