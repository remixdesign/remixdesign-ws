<?php

$sectionName = "web";
$galleryName = "Hemophilia Village";
$gallerySlug = "hemophilia-village";
$gallerySite = "http://www.hemophiliavillage.com";

$galleryInfo_client = "Pfizer Hemophilia";
$galleryCopyright = "&copy; JUICE Pharma Worldwide; &copy; Pfizer";

$galleryInfo_objective = "Redesign the existing site for optimal performance and usability.";

$galleryInfo_solution = "The re-design was developed following Web standards, with clean markup; separation of content, presentation, and behavior; and search engine optimization. Usability was enhanced with several jQuery components.";

$galleryInfo_services = array (
			'web development', 
			);

$galleryThumbs = true;
$maxPics = 4;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>