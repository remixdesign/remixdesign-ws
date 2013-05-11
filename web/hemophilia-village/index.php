<?php

$sectionName = "web";
$galleryName = "Hemophilia Village";
$gallerySite = "http://www.hemophiliavillage.com";

$galleryNumber = 40;

$galleryInfo_client = "Pfizer Hemophilia";
$galleryCopyright = "&copy; JUICE Pharma Worldwide; &copy; Pfizer";

$galleryInfo_objective = "Overhaul the existing site to clean up old, messy code.";

$galleryInfo_solution = "The re-design was developed following Web standards, with clean markup; separation of content, presentation, and behavior; and search engine optimization. Usability was enhanced with several jQuery components.";

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