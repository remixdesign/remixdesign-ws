<?php

$sectionName = "web";
$galleryName = "A Journey";
$gallerySlug = "a-journey";
$gallerySite = 'site/';

$galleryInfo_objective = "A personal project, it tells the story of one particularly crazy and fun-filled weekend trip.";

$galleryInfo_solution = "Designed for Flash as long strip of collaged artifacts, photos and journal entries, the movie changes speed subjective to the excitement of the activity it is illustrating.";

$galleryInfo_services = array (
			'web design',
			'web development', 
			'animation', 
			);

// $galleryInfo_results = "";

$galleryThumbs = true;
$maxPics = 7;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>