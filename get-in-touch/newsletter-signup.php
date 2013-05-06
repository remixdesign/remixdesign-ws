<?php

$sectionName = "get in touch";

$dirLevel = 1;
$dirPrefix = "../";

include("../includes/top.php");

?>
<div class="section_info">
	<h3>Join Our Mailing List</h3>
	
	<p>Fill out the form on the right to receive periodic newsletters and updates from Remix Design.</p>
	<p>Required fields are in <strong>bold</strong>.</p>
	
</div>

<div class="section_content">

	<script type="text/javascript" src="http://remixdesign.list-manage.com/js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="http://remixdesign.list-manage.com/js/jquery.validate.js"></script>
	<script type="text/javascript" src="http://remixdesign.list-manage.com/js/jquery.form.js"></script>
	<script type="text/javascript" src="http://remixdesign.list-manage.com/subscribe/xs-js?u=1612ef2b2c940a4b0ffd1f8dd&amp;id=662d0f44d3"></script>
	<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
	<form action="http://remixdesign.list-manage.com/subscribe/post?u=1612ef2b2c940a4b0ffd1f8dd&amp;id=662d0f44d3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
		
	<div class="mc-field-group">
		<label for="mce-EMAIL"><strong>Email Address</strong>
		</label>
		<br />
		<input type="text" value="" name="EMAIL" class="required email input_textbox" id="mce-EMAIL" />
	</div>
	
	<div class="mc-field-group">
		<label for="mce-FNAME"><strong>First Name</strong>
		</label>
		<br />
		<input type="text" value="" name="FNAME" class="required input_textbox" id="mce-FNAME" />
	</div>
	
	<div class="mc-field-group">
		<label for="mce-LNAME"><strong>Last Name</strong>
		</label>
		<br />
		<input type="text" value="" name="LNAME" class="required input_textbox" id="mce-LNAME" />
	</div>
	
	<div class="mc-field-group">
		<label for="mce-MMERGE3">Company</label>
		<br />
		<input type="text" value="" name="MMERGE3" class="input_textbox" id="mce-MMERGE3" />
	</div>
	
	<div class="mc-field-group">
	   <p><label class="input-group-label">I'm a buyer for the following services:</label></p>
	    <div class="input-group">
	    <input type="checkbox" value="1" name="group[1]" id="mce-group-0"><label for="mce-group-0">Web Design</label><br />
	<input type="checkbox" value="2" name="group[2]" id="mce-group-1"><label for="mce-group-1">Web Development</label><br />
	<input type="checkbox" value="4" name="group[4]" id="mce-group-2"><label for="mce-group-2">Identity/Branding Design</label><br />
	<input type="checkbox" value="8" name="group[8]" id="mce-group-3"><label for="mce-group-3">Print Design</label><br />
	<input type="checkbox" value="16" name="group[16]" id="mce-group-4"><label for="mce-group-4">Photography</label><br />
	
	    </div>
	</div>
	<div class="mc-field-group">
	    <p><label class="input-group-label">I'd like my emails in the following format:</label></p>
	    <div class="input-group">
	    <input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">HTML</label><br />
	<input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">text</label><br />
	<input type="radio" value="mobile" name="EMAILTYPE" id="mce-EMAILTYPE-2"><label for="mce-EMAILTYPE-2">mobile</label><br />
	
	    </div>
	</div>
			
			<input type="submit" class="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn" />
	</form>
	
	<div id="mce-responses">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>
	
	</div><!--mc_embed_signup-->

</div>

<?php
include("../includes/bottom.php");
?>