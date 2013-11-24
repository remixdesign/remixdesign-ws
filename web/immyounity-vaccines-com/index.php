<?php

$sectionName = "web";
$galleryName = "Vaccines.com / ImmYOUnity";
$gallerySlug = "immyounity-vaccines-com";
$gallerySite = "http://www.vaccines.com";

$galleryInfo_client = "Sanofi Pasteur";

$galleryInfo_objective = "Disseminate accurate and detailed information about the benefits and health concerns surrounding vaccination, 
to help address the growing spread of preventable infectious disease.";

$galleryInfo_solution = "Information is presented clearly and cleanly, in a variety of formats. 
Infographics illustrate facts and stories powerfully, and are shareable individually on social media for ease of viral impact.";

$galleryInfo_services = array (
			'web development', 
			);

$galleryThumbs = true;
$maxPics = 5;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>