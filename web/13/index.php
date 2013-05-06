<?php

$sectionName = "web";
$galleryName = "Rock the Rabbit 2008";
// $gallerySite = "site/";

$galleryNumber = 13;

$galleryInfo_client = "Playboy Enterprises";
$galleryCopyright = "&copy; 2008 Playboy Enterprises Inc.";

$galleryInfo_objective = "Where would rock and roll be without hot chicks? Playboy's annual rock music campaign, featuring SXSW shows, band-designed rabbit head t-shirts, and photos by Mick Rock.";

$galleryInfo_solution = "Each band profile page was unique to the band, but also connected to the campaign as a whole. Designs as a whole were youthful, colorful, and grungy.";

$galleryInfo_services = array (
			'Flash video integration', 
			'Flash programming', 
			'site design', 
			'site coding', 
			);

// $galleryInfo_results = "";

$galleryThumbs = true;
$maxPics = 10;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>