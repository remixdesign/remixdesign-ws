<?php

$sectionName = "home";

include("includes/top.php");

?>

<div class="m-heroSlideshow">

	<div class="m-heroSlideshow-smallImages">
		<?php showAllImages('_img/home/slideshow/small/', '.jpg', 'e-smallImage'); ?>
	</div>
	
	<div class="m-heroSlideshow-largeImages">
		<?php showAllImages('_img/home/slideshow/large/', '.jpg', 'e-largeImage'); ?>
	</div>
	
	<button>
		pause
	</button>
	
	<h1>
		Remix Design does Web and mobile design, development, branding, marketing, and strategy for entrepreneurs, startups, and small, growing businesses.
	</h1>
	
	<!-- MOVE THESE -->
	<link rel="stylesheet" href="_css/stylesheets/template-home.css">
	<script src="_js/heroSlideshow.js"></script>
	<!-- MOVE THESE -->

</div>

<div class="section_separator"></div>
<h2>featured <strong>works</strong></h2>

<a href="<?php echo $siteRootPath; ?>web/playboy-rock-the-rabbit-08/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>/_img/portfolio/web/playboy-rock-the-rabbit-08/th_3.gif" class="home_thumb" alt="Playboy's Rock the Rabbit" />
</a>

<a href="<?php echo $siteRootPath; ?>web/playboy-rock-the-rabbit-08/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>/_img/portfolio/web/playboy-rock-the-rabbit-08/th_5.gif" class="home_thumb" alt="Playboy's Rock the Rabbit" />
</a>

<a href="<?php echo $siteRootPath; ?>web/playboy-rock-the-rabbit-08/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>/_img/portfolio/web/playboy-rock-the-rabbit-08/th_6.gif" class="home_thumb" alt="Playboy's Rock the Rabbit" />
</a>

<div class="home_info">
<h3 class="home"><a href="<?php echo $siteRootPath; ?>web/13/">Playboy's Rock the Rabbit</a></h3>

<p>Where would rock and roll be without hot chicks? Playboy's annual rock music campaign, featuring SXSW shows, band-designed rabbit head t-shirts, and photos by Mick Rock.</p>
</div>

<div class="section_separator"></div>
<div class="section_separator"></div>

<a href="<?php echo $siteRootPath; ?>identity/10/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>identity/10/thumbs/th_2.gif" class="home_thumb" alt="MusicToGo Media" />
</a>

<a href="<?php echo $siteRootPath; ?>identity/10/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>identity/10/thumbs/th_7.gif" class="home_thumb" alt="MusicToGo Media" />
</a>

<a href="<?php echo $siteRootPath; ?>identity/10/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>identity/10/thumbs/th_9.gif" class="home_thumb" alt="MusicToGo Media" />
</a>

<div class="home_info">
<h3 class="home"><a href="<?php echo $siteRootPath; ?>identity/10/">MusicToGo Media</a></h3>

<p>M2G makes branded software products for Internet music marketing. As a new brand, strong image-establishing materials were needed.</p>
</div>

<div class="section_separator"></div>
<div class="section_separator"></div>


<h2>from the <strong>blog</strong></h2>

<script src="http://feeds2.feedburner.com/RemixDesign?format=sigpro" type="text/javascript" ></script><noscript><p>Subscribe to RSS headline updates from: <a href="http://feeds2.feedburner.com/RemixDesign"></a><br/>Powered by FeedBurner</p> </noscript>


<?php
include("includes/bottom.php");
?>