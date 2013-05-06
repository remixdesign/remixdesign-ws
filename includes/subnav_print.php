<div id="subnav">
	<?php
	
	if ($dirLevel == 2 || $dirLevel == 3) {	
		echo '<strong><a href="' . $dirPrefix . 'print/">view all</a></strong>';
	}
	
	?>
	<a href="<?php echo $dirPrefix; ?>print/#01">magazines &amp; books</a>
	<a href="<?php echo $dirPrefix; ?>print/#02">posters &amp; postcards</a>
	<a href="<?php echo $dirPrefix; ?>print/#03">packaging</a>
	<a href="<?php echo $dirPrefix; ?>print/#04">apparel</a>

</div>