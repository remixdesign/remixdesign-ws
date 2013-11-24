<?php

$sectionName = "web";
$galleryName = "Archetypes";
$gallerySlug = "archetypes";
$gallerySite = "http://www.archetypes.com";

$galleryInfo_objective = "Re-launch the Archetypes content, community and commerce platform.";

$galleryInfo_solution = "Responsive, mobile-first design and architecture was built on top of the Drupal CMS. A CSS preprocessor framework let us work in a grid system and CSS3 library. An icon font for all flat-color images speeds up site performance.";

$galleryInfo_services = array (
			'web development', 
			'CMS development', 
			);

$galleryThumbs = true;
$maxPics = 10;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>