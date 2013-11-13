<?php

$sectionName = "web";
$galleryName = "Johnny Cash - Personal File";
$gallerySlug = "johnny-cash-personal-file";
$gallerySite = "site/";

$galleryInfo_objective = 'There once was a man named Cash. After a long, renowned life making heartfelt yet universal country music, he, even in death, still makes money for the label through the release of "Personal File," an archive of unearthed personal recordings. Here\'s hoping that there aren\'t any more, or Cash will become the Tupac of country.';

$galleryInfo_solution = "The site is made to be all-purpose, but skinned to market the new release. An intro animation and interactive collage keep in the spirit of entertainment.";

$galleryInfo_services = array (
			'animation', 
			'web development', 
			'web design',
			);

$galleryThumbs = true;
$maxPics = 4;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>