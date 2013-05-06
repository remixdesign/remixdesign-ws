<?php
/**
 * @file
 * Zen theme's implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   - view-mode-[mode]: The view mode, e.g. 'full', 'teaser'...
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $pubdate: Formatted date and time for when the node was published wrapped
 *   in a HTML5 time element.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content. Currently broken; see http://drupal.org/node/823380
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess_node()
 * @see template_process()
 */
 
 	$unpublished = variable_get('unpublished');

	if ($teaser) {
	  $headingTag = 'h3';
	} else {
	  $headingTag = 'h1';
	}
    
    // get node's taxonomy Tag as a string
    
    $tagString = field_view_field('node', $node, 'field_tags', array('default'));
    $tagString = $tagString['#object']->field_tags['und'][0]['taxonomy_term']->name;
    
    // converts node's title to slug/URL format
    // replace spaces with dashes, lowercase, strip punctuation
    
    $titleSlug = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $title);
    $titleSlug = str_replace(" ", "-", $titleSlug);
    $titleSlug = strtolower($titleSlug);
    
?>

<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

	<?php if (!$teaser): ?>

	<div class="col-content">
		
		<?php 
		
            // If the piece contains a production URL value, have it linked to the image
            
            if (!empty($node->field_production_url)) {
                echo '<a href="' . $node->field_production_url . '">';
            }
               
        ?>
        
        <img src="/_img/portfolio/<?php print $tagString . '/' . $titleSlug ?>/1.jpg" alt="">
        
        <?php
                 
            if (!empty($node->field_production_url)) {
                echo '</a>';
            }
        
		?>
		
		<?php if ($node->field_client_copyright): ?>
		
		<p class="small-print">
		    <?php print $node->field_client_copyright['und'][0]['value']; 
		    //print '<pre>' . print_r($node->field_client_copyright,1) . '</pre>';
		    ?>
		</p>
		
		<?php endif; ?>
		
	</div>
	
	<div class="col-info">
		
	<?php endif; ?>
	
	<?php if ($title): ?>
	    
        <header>
            
          <?php if($title_prefix) {
              print render($title_prefix);
          } ?>
          
          <?php //if (!$page && $title): ?>
            <<?php print $headingTag; print $title_attributes; ?> class="align-center"><?php print $title;?></<?php print $headingTag; ?>>
          <?php //endif; ?>
          
          <?php if ($title_suffix) {
              print render($title_suffix);
          } ?>
    
          <?php if ($unpublished): ?>
            <p class="unpublished"><?php print t('Unpublished'); ?></p>
          <?php endif; ?>
        </header>
      <?php endif; ?>
    
	  
      <?php if (!$teaser): ?>
          
    	<div class="align-center">
              
              Thumbnails go here
              
              <?php
                
                    /*if ($node->field_display_thumbnails && $node->field_number_of_thumbnails) {
                        
                        echo "Whee thumbs!";
                        
                        for ($i == 1; $i <= $node->field_number_of_thumbnails; $i++) {
                        
                            echo '<a href="?img=' . $i . '">
                            <img src="thumbs/th_' . $i . '.gif" class="thumb" alt="' . $i . '" /></a>
                        
                        ';
                        
                        }
                    }*/
                ?>
              
          </div>
	  <?php endif; ?>
	  
	  <?php
	    // We hide the comments and links now so that we can render them later.
	    hide($content['comments']);
	    hide($content['links']);
	    print render($content);
	  ?>
	
	  <?php print render($content['links']); ?>
	
	  <?php print render($content['comments']); ?>
  
  <?php if (!$teaser): ?>

	</div>
		
  <?php endif; ?>

</article><!-- /.node -->
