<?php

$sectionName = "web";
$galleryName = "Tompkins Square Records";
$gallerySlug = "tompkins-square-records";
$gallerySite = 'site/';

$galleryInfo_objective = "Create a site for an NYC based record label, that highlights its independent nature as well as its artists and releases.";

$galleryInfo_solution = "Design elements were gathered from outside the computer. Hand drawn lines were worked in as borders without hindering text flow.";

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