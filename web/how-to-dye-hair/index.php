<?php

$sectionName = "web";
$galleryName = "How To Dye Hair";
$gallerySlug = "how-to-dye-hair";
$gallerySite = 'site/';

$galleryInfo_objective = "Create a tutorial on do-it-yourself hair coloring, from start to finish.";

$galleryInfo_solution = "Designed with great attention to clarity, the look mixes both information and style. Image slide shows are used to reduce clutter.";

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