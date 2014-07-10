<?php

$sectionName = "web";
$galleryName = "Quality Caring";
$gallerySlug = "quality-caring";
$gallerySite = "http://www.qualitycaring.org";

$galleryInfo_client = "Vidette Todaro-Francheshi";

$galleryInfo_objective = "Create a blog and Web site for an author, nurse and and teacher to promote her ideas and publications.";

$galleryInfo_solution = "Wordpress was used as a CMS to allow the client to write blog entries and edit pages quickly and easily.";

$galleryInfo_services = array (
			'Web design',
			'Web development', 
			'CMS development', 
			);

$galleryThumbs = true;
$maxPics = 3;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>