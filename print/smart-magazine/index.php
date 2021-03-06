<?php

$sectionName = "print";
$galleryName = "Smart Magazine";
$gallerySlug = "smart-magazine";

$galleryInfo_objective = "A magazine at the border of design and computer programming, fusing the sometimes mutually exclusive disciplines. It is based on the belief that expression can be useful, and logic can be beautiful.";

$galleryInfo_solution = "For the cover, ASCII art was a perfect style choice to express this fusion. The use of HTML comments doubles as an arrow. A monospaced typeface often found in code-writing applications was used, and design elements are mostly typographic or pixellated, without photos or \"artwork\". The structure of the Contents page mimics a function definition. Flat colors make the look clean, the way both programmers and designers like things.";

$galleryInfo_services = array (
			'graphic design', 
			'illustration', 
			);


$galleryThumbs = true;
$maxPics = 6;

$dirLevel = 2;
$dirPrefix = "../../";

include("../../includes/top.php");

include("../../includes/gallery.php");

include("../../includes/bottom.php");
?>