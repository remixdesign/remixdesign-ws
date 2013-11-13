</div>

<div id="body_gallery">

	<div id="gallery_content">
		
			<?php
			if (isset($gallerySite)) {
				echo '<a href="' . $gallerySite . '">';
			}
					
			echo '<img src="' . $siteRootPath . '/_img/portfolio/' . $sectionName . '/' . $gallerySlug . '/';
			if (isset($_REQUEST['img']))	{
				echo $_REQUEST['img'];
			}
			else	{
				echo "1";
			}
			
			 echo '.jpg" alt="' . $sectionName . " - " . $galleryName . '" />';
			 
			if (isset($gallerySite)) {
				echo '</a>';
			}
		
			 
			 if (isset($galleryCopyright)) {
				echo '<p class="smallprint">' . $galleryCopyright . '</p>';
			 }
			
			?>
		
	</div>
	
	
	<div id="gallery_info">
		
		<h3 class="center"><?php echo $galleryName; ?></h3>
		
		<div id="gallery_thumb_container">
			<?php
			
				if ($galleryThumbs) {
					
					for ($numberOfPics = 1; $numberOfPics <= $maxPics; $numberOfPics++) {
					
					echo '<a href="?img=' . $numberOfPics . '">
					<img src="' . $siteRootPath . '/_img/portfolio/' . $sectionName . '/' . $gallerySlug .'/th_' . $numberOfPics . '.gif" class="gallery_thumb" alt="' . $numberOfPics . '" /></a>
					
					';
					
					}
				}
			?>
		</div>
		
		<div class="clear" /></div>
		
		<?php
		
		if (isset($gallerySite)) {
		
		echo '<p class="gallery_action center"><a href="' . $gallerySite . '">launch</a></p>';
		}
		
		if (isset($galleryInfo_client)) {
			echo '<p class="gallery_subhead">client</p><p>' . $galleryInfo_client . '</p>';
		}
		
		if (isset($galleryInfo_objective)) {
			echo '<p class="gallery_subhead">objective</p><p>' . $galleryInfo_objective . '</p>';
		}
		
		if (isset($galleryInfo_solution)) {
			echo '<p class="gallery_subhead">solution</p><p>' . $galleryInfo_solution . '</p>';
		}
		
		if (isset($galleryInfo_services)) {
			
			asort ($galleryInfo_services);
			
			echo '<p class="gallery_subhead">services</p>
			<ul>';
			
			foreach ($galleryInfo_services as $indServices) {
				echo '<li>' . $indServices . '</li>';	
			}
			
			echo '</ul>';
		}
		
		if (isset($galleryInfo_results)) {
			echo '<p class="gallery_subhead">results</p><p>' . $galleryInfo_results . '</p>';
		}
		
		?>
		
		
	</div>