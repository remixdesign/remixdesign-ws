<?php

$sectionName = "web";
$galleryName = "LL Dent Restaurant";
$gallerySlug = "ll-dent-restaurant";
$gallerySite = 'site/';

$galleryInfo_objective = "Design a brochure site for a new family-owned, southern-style restaurant in Long Island, New York, to establish their brand on the web.";

$galleryInfo_solution = "To serve new visitors in most effectively finding information, navigation was worked into a hierarchy in order of importance using scale. Texture and organic dingbats were used to complement the client's choice of imagery, a woodcut-illustrated peach.";

$galleryInfo_services = array (
			'web design', 
			'web development', 
			'logo design', 
			);

$galleryThumbs = true;
$maxPics = 2;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>