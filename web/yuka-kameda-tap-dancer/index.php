<?php

$sectionName = "web";
$galleryName = "Yuka Kameda, Tap Dancer";
$gallerySite = "http://www.yukakameda.com";

$galleryNumber = 42;

$galleryInfo_client = "Yuka Kameda";

$galleryInfo_objective = "Create a bi-lingual Web site for a Japanese-American tap dancer to promote upcoming performances.";

$galleryInfo_solution = "Wordpress was used as a CMS to allow the client to update performance information quickly and easily. Dynamic language switching was built on the back-end.";

$galleryInfo_services = array (
			'web design',
			'web development', 
			'CMS development', 
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