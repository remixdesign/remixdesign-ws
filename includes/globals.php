<?php

// global settings

ini_set('display_errors',1); 

error_reporting (E_ALL & ~E_NOTICE);

// global variables

$siteRootPath = "/remixdesign-ws";

// global functions

function showAllImages($imgDir, $imgExtn, $imgClass) {

	if ($handle = opendir($imgDir)) {
	    
	    while (false !== ($entry = readdir($handle))) {
		    
		  $pos = strpos($entry, $imgExtn);
		  
		  if ($pos !== false) {
			  
			 echo '<img src="' . $siteRootPath . $imgDir . $entry . '" class="' . $imgClass . '">'; 
		  } 
		  
	    }
	
	    closedir($handle);
	}
}

?>