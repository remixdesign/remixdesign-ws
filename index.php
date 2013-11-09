<?php

include("includes/globals.php");

$sectionName = "home";

include("includes/top.php");

?>

<div id="home_hero">

	<?php
	
		showAllImages('_img/home/slideshow/small/', '.jpg', 'slideshow-sm');
		
		showAllImages('_img/home/slideshow/large/', '.jpg', null);
	
	?>
	
	<button>
		pause
	</button>
	
	<p>
		Remix Design is a digital design, technology and strategy firm, serving small and mid-size businesses in the New York metro area.
	</p>

</div>

<div class="section_separator"></div>
<h2>featured <strong>works</strong></h2>

<a href="<?php echo $siteRootPath; ?>web/13/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>web/13/thumbs/th_3.gif" class="home_thumb" alt="Playboy's Rock the Rabbit" />
</a>

<a href="<?php echo $siteRootPath; ?>web/13/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>web/13/thumbs/th_5.gif" class="home_thumb" alt="Playboy's Rock the Rabbit" />
</a>

<a href="<?php echo $siteRootPath; ?>web/13/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>web/13/thumbs/th_6.gif" class="home_thumb" alt="Playboy's Rock the Rabbit" />
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

<a href="<?php echo $siteRootPath; ?>print/18/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>print/18/thumbs/th_1.gif" class="home_thumb" alt="Playboy's Super Saturday Night" />
</a>

<a href="<?php echo $siteRootPath; ?>print/18/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>print/18/thumbs/th_2.gif" class="home_thumb" alt="Playboy's Super Saturday Night" />
</a>

<a href="<?php echo $siteRootPath; ?>print/18/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>print/18/thumbs/th_3.gif" class="home_thumb" alt="Playboy's Super Saturday Night" />
</a>

<div class="home_info">
<h3 class="home"><a href="<?php echo $siteRootPath; ?>print/18/">Playboy's Super Saturday Night</a></h3>

<p>Back when the economy was good, Playboy threw a lavish party every year to celebrate the Super Bowl. In 2008, the theme was 60s/70s vintage.</p>
</div>

<div class="section_separator"></div>
<div class="section_separator"></div>


<a href="<?php echo $siteRootPath; ?>print/17/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>print/17/thumbs/th_1.gif" class="home_thumb" alt="purple SKY Magazine" />
</a>

<a href="<?php echo $siteRootPath; ?>print/17/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>print/17/thumbs/th_3.gif" class="home_thumb" alt="purple SKY Magazine" />
</a>

<a href="<?php echo $siteRootPath; ?>print/17/" class="remove_link_style">
<img src="<?php echo $siteRootPath; ?>print/17/thumbs/th_7.gif" class="home_thumb" alt="purple SKY Magazine" />
</a>

<div class="home_info">
<h3 class="home"><a href="<?php echo $siteRootPath; ?>print/17/">purple SKY Magazine</a></h3>

<p>J-rock is non traditional in many ways. It's not traditional to Japanese culture, and non-English music isn't traditional in the US. The audience in both countries is mostly youth. So, I got to break a whole slew of editorial traditions.</p>
</div>

<div class="section_separator"></div>
<div class="section_separator"></div>

<h2>from the <strong>blog</strong></h2>

<script src="http://feeds2.feedburner.com/RemixDesign?format=sigpro" type="text/javascript" ></script><noscript><p>Subscribe to RSS headline updates from: <a href="http://feeds2.feedburner.com/RemixDesign"></a><br/>Powered by FeedBurner</p> </noscript>


<?php
include("includes/bottom.php");
?>