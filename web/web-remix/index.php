<?php

$sectionName = "web";
$galleryName = "&lt;web remix&gt;";
$gallerySlug = "web-remix";
$gallerySite = 'site/';

$galleryInfo_objective = "&lt;web remix&gt; was a design portfolio site, and the predecessor of Remix Design.";

$galleryInfo_solution = "To express the idea of dynamic change, navigation colors rotate along the spectrum as the user navigates different sections.";

$galleryInfo_services = array (
			'web design', 
			'web development',
			);

$galleryThumbs = true;
$maxPics = 2;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>