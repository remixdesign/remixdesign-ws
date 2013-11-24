<?php

$sectionName = "web";
$galleryName = "Citi Stories";
$gallerySlug = "citi-stories";

$galleryInfo_client = "Citigroup";

$galleryInfo_objective = "Highlight a rotating set of Citi marketing initiatives centered on user stories.";

$galleryInfo_solution = "The JavaScript architecture for the carousel allows modular swapping out and re-ordering slides as the client requires.";

$galleryInfo_services = array (
			'web development', 
			);

// $galleryInfo_results = "";

$galleryThumbs = true;
$maxPics = 4;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>