<?php

ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

$sectionName = "blog";

$dirLevel = 1;
$dirPrefix = "../";

$sectionName_forFilename = str_replace(" ", "-", $sectionName);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php wp_title( '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', true, 'right' ); ?> blog &nbsp;&nbsp;&nbsp; Remix Design &nbsp;&nbsp;&nbsp; New York City graphic design firm &nbsp;&nbsp;&nbsp; freelance web print idendity logo branding designer NYC</title>

<meta name="description" content="Remix Design is an independent graphic design firm serving small and mid-size businesses in the New York metro area." />

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<meta http-equiv="Content-Style-Type" content="text/css" />

<style type="text/css">
@import url("http://www.remixdesign.ws/css/basic.css");
</style>

<style type="text/css" media="screen">
@import url("http://www.remixdesign.ws/css/screen.css");
</style>

<style type="text/css" media="print">
@import url("http://www.remixdesign.ws/css/print.css");
</style>

<style type="text/css">
@import url("http://www.remixdesign.ws/css/section_<?php echo $sectionName_forFilename; ?>.css");
</style>

<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

</head>

<body>


<div id="top">

	<div id="top_content">
	
		<img src="http://www.remixdesign.ws/images/top_<?php echo $sectionName_forFilename; ?>.gif" usemap="#map_top" alt="remix design" />
		
		<map name="map_top" id="map_top">
			<area shape="rect" coords="43,32,291,73" href="http://www.remixdesign.ws/" title="home" alt="home" />
			<area shape="rect" coords="588,23,641,38" href="http://www.remixdesign.ws/web/" title="web" alt="web" />
			<area shape="rect" coords="588,44,641,59" href="http://www.remixdesign.ws/print/" title="print" alt="print" />
			<area shape="rect" coords="588,65,641,80" href="http://www.remixdesign.ws/identity/" title="identity" alt="identity" />
			<area shape="rect" coords="731,14,831,28" href="http://www.remixdesign.ws/what-you-need/" title="what you need" alt="what you need" />
			<area shape="rect" coords="731,35,831,49" href="http://www.remixdesign.ws/what-we-do/" title="what we do" alt="what we do" />
			<area shape="rect" coords="731,55,831,69" href="http://www.remixdesign.ws/how-we-work/" title="how we work" alt="how we work" />
			<area shape="rect" coords="731,77,831,91" href="http://www.remixdesign.ws/get-in-touch/" title="get in touch" alt="get in touch" />
			<area shape="rect" coords="877,45,925,68" href="http://www.remixdesign.ws/blog/" title="blog" alt="blog" />
		</map>
	
	</div>

</div>

<?php if ($sectionName == "home") {
	// do nothing	
}

else { ?>
<div id="subhead">
	
	<div id="subhead_content">

		<img src="http://www.remixdesign.ws/images/subhead_<?php echo $sectionName_forFilename; ?>.gif" alt="<?php echo $sectionName; ?>" />
		
		 <?php // include("../../../../includes/subnav_" . $sectionName_forFilename . ".php"); ?>
	
	</div>

</div>

<?php } ?>

<div id="body">

<?php sandbox_globalnav() ?>
