<?php

$sectionName = "web";
$galleryName = "Utau Inu";
$gallerySlug = "utau-inu";
$gallerySite = "http://www.utau-inu.com";

$galleryInfo_client = "Brian Stewart";

$galleryInfo_objective = "Create a blog and Web site for a multi-talented TV personality/producer/director/musician/translator/creative soul to promote his works and thoughts.";

$galleryInfo_solution = "Wordpress was used as a CMS to allow the client to update performance information quickly and easily. Custom video and audio players give a unique feel to the creator's work.";

$galleryInfo_services = array (
			'Web design',
			'Web development', 
			'CMS development', 
);

$galleryThumbs = true;
$maxPics = 4;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>