<?php

$sectionName = "web";
$galleryName = "Playboy's Interns";
$gallerySite = "site/";

$galleryNumber = 24;

$galleryInfo_client = "Playboy Enterprises";
$galleryCopyright = "&copy; Playboy Enterprises Inc.";

$galleryInfo_objective = "Teaser site for a new \"reality\" series featuring three students \"working\" at Playboy Enterprises.";

$galleryInfo_solution = "We used a realistic collage of desk elements, to evoke office humor, and easily add subtle sponsor messages. Most of the elements were photographed in-house.";

$galleryInfo_services = array (
			'Flash video integration', 
			'site design', 
			'site coding', 
			'photography',
			);

// $galleryInfo_results = "";

$galleryThumbs = true;
$maxPics = 3;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>