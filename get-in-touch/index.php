<?php

$sectionName = "get in touch";

$dirLevel = 1;
$dirPrefix = "../";

include("../includes/top.php");

?>
<br />

<div class="section_info">

<h3>Email</h3>
<p><script src="<?php echo $dirPrefix; ?>includes/hideEmail.js" type="text/javascript"></script>
</p>

<br />

<h3>Phone</h3>
<p>718.312.8190</p>

<br />


<h3>Etc.</h3>

<p><a href="skype:remix_sakura?call">Skype</a></p>

<p><a href="http://www.linkedin.com/in/remixdesign" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" title="LinkedIn">LinkedIn</a></p>

<p><a href="aim:goim?screenname=RemixDesignNY">AIM Messenger</a></p>

</div>

<div class="section_content">

<h3>Contact Form</h3>
	
<p>Please complete the form below to receive more information about how we can serve your needs. Required fields are in <strong>bold</strong>.</p>


<?php
				
			function showform() {
				echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
				
				<strong>name</strong><br />
				<input type="text" name="name" class="input_textbox"';
				if (isset($_POST['name'])) {
					echo ' value="' . $_POST['name'] . '"';
				}
				echo ' /><br /><br />
				
				<strong>email address</strong><br />
				<input type="text" name="email" class="input_textbox"';
				if (isset($_POST['email'])) {
					echo ' value="' . $_POST['email'] . '"';
				}
				echo ' /><br /><br />
				
				phone number<br />
				<input type="text" name="phone" class="input_textbox"';
				if (isset($_POST['phone'])) {
					echo ' value="' . $_POST['phone'] . '"';
				}
				echo ' /><br /><br />
				
				company name<br />
				<input type="text" name="company" class="input_textbox"';
				if (isset($_POST['company'])) {
					echo ' value="' . $_POST['company'] . '"';
				}
				echo ' /><br /><br />
				
				How did you hear about Remix Design?<br />
				<input type="text" name="how" class="input_textbox"';
				if (isset($_POST['how'])) {
					echo ' value="' . $_POST['how'] . '"';
				}
				echo ' /><br /><br />
				
				
				<strong>I need information regarding...</strong><br />
				<input type="checkbox" name="type[]" value="web"';
				if (!empty($_POST['type'])) {
					if (in_array("web",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> web design<br />
				
				<input type="checkbox" name="type[]" value="identity"';
				if (!empty($_POST['type'])) {
					if (in_array("identity",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> identity design/branding<br />
				
				<input type="checkbox" name="type[]" value="print"';
				if (!empty($_POST['type'])) {
					if (in_array("print",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> print design<br />
				
				
				<input type="checkbox" name="type[]" value="other"';
				if (!empty($_POST['type'])) {
					if (in_array("other",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> other graphic design<br /><br />
				
				
				URL of current website (if any)<br />
				<input type="text" name="currentsite" class="input_textbox"';
				if (isset($_POST['currentsite'])) {
					echo ' value="' . $_POST['currentsite'] . '"';
				}
				echo ' /><br /><br />
				
				
				<strong>Please describe the nature and scope of the project.</strong><br />
				
				<textarea name="details" cols="45" rows="8">';
				if (isset($_POST['details'])) {
					echo stripslashes($_POST['details']);
				}
				echo '</textarea><br /><br />
				
				<strong>project timeline</strong><br />
				<select name="timeline">
				
					<option value=""></option>
					<option value="l2w"'; 
					if (isset($_POST['timeline'])) {
						if ($_POST['timeline'] == "l2w") {
							echo ' selected="selected"';
						}
					}
					echo '>less than 2 weeks</option>
				
					<option value="2w4w"'; 
					if (isset($_POST['timeline'])) {
						if ($_POST['timeline'] == "2w4w") {
							echo ' selected="selected"';
						}
					}
					echo '>2 to 4 weeks</option>
					
					<option value="4w6w"'; 
					if (isset($_POST['timeline'])) {
						if ($_POST['timeline'] == "4w6w") {
							echo ' selected="selected"';
						}
					}
					echo '>4 to 6 weeks</option>
					
					<option value="6w8w"'; 
					if (isset($_POST['timeline'])) {
						if ($_POST['timeline'] == "6w8w") {
							echo ' selected="selected"';
						}
					}
					echo '>6 to 8 weeks</option>
					
					<option value="8w12w"'; 
					if (isset($_POST['timeline'])) {
						if ($_POST['timeline'] == "8w12w") {
							echo ' selected="selected"';
						}
					}
					echo '>8 to 12 weeks</option>
					
					<option value="m12w"'; 
					if (isset($_POST['timeline'])) {
						if ($_POST['timeline'] == "m12w") {
							echo ' selected="selected"';
						}
					}
					echo '>more than 12 weeks</option>
					
				</select>
				<br /><br />
				
				<strong>project budget</strong><br />
				<select name="budget">
					<option value=""></option>
					
					<option value="l5h"'; 
					if (isset($_POST['budget'])) {
						if ($_POST['budget'] == "l5h") {
							echo ' selected="selected"';
						}
					}
					echo '>less than $500</option>
					
					<option value="5h9h"'; 
					if (isset($_POST['budget'])) {
						if ($_POST['budget'] == "5h9h") {
							echo ' selected="selected"';
						}
					}
					echo '>$500 - $999</option>
					
					<option value="1k2k"'; 
					if (isset($_POST['budget'])) {
						if ($_POST['budget'] == "1k2k") {
							echo ' selected="selected"';
						}
					}
					echo '>$1000 - $2499</option>
					
					<option value="2k5k"'; 
					if (isset($_POST['budget'])) {
						if ($_POST['budget'] == "2k5k") {
							echo ' selected="selected"';
						}
					}
					echo '>$2500 - $4999</option>
					
					<option value="5k10k"'; 
					if (isset($_POST['budget'])) {
						if ($_POST['budget'] == "5k10k") {
							echo ' selected="selected"';
						}
					}
					echo '>$5000 - $9999</option>
					
					<option value="10k20k"'; 
					if (isset($_POST['budget'])) {
						if ($_POST['budget'] == "10k20k") {
							echo ' selected="selected"';
						}
					}
					echo '>$10,000 - $20,000</option>
					
					<option value="m20k"'; 
					if (isset($_POST['budget'])) {
						if ($_POST['budget'] == "m20k") {
							echo ' selected="selected"';
						}
					}
					echo '>more than $20,000</option>
					
				</select>
				<br /><br />
				
				<input class="submit" type="submit" name="submit" value="send message" />
				</form>';
			}
				
				
				if (isset($_POST['submit']))	{
					
					
					if (empty($_POST['name']))	{
						$_POST['name'] = FALSE; echo '<h4>Please include your name.</h4>';
					}
					
					if (empty($_POST['email']))	{
						$_POST['email'] = FALSE; echo '<h4>Please include your email address.</h4>';
					}
					
					if (empty($_POST['type']))	{
						$_POST['type'] = FALSE; echo '<h4>Please indicate the type of project.</h4>';
					}
					
					if (empty($_POST['details']))	{
						$_POST['details'] = FALSE; echo '<h4>Please include a description of your project.</h4>';
					}
					
					if (empty($_POST['timeline']))	{
						$_POST['timeline'] = FALSE; echo '<h4>Please include the timeline of your project.</h4>';
					}
					
					if (empty($_POST['budget']))	{
						$_POST['budget'] = FALSE; echo '<h4>Please include the budget of your project.</h4>';
					}
					
					
					if ($_POST['name'] && $_POST['email'] && $_POST['type'] && $_POST['details'] && $_POST['timeline'] && $_POST['budget']) {
				
						$datesent = date("l, F j G:i");
						
						$details = stripslashes($_POST['details']);
						
						$type = implode(", ", $_POST['type']);
					
						$body = "Name:  {$_POST['name']}\n
						Email Address: {$_POST['email']}\n
						Phone Number: {$_POST['phone']}\n
						Company Name: {$_POST['company']}\n
						How did you hear about Remix Design? {$_POST['how']}\n\n	
						
						type of job:\n
						{$type}\n\n
						
						current site:\n
						{$_POST['currentsite']}\n\n
						
						details:\n					
						{$details}\n\n
						
						timeline:\n					
						{$_POST['timeline']}\n
						
						budget:\n					
						{$_POST['budget']}\n
						
						Date sent: {$datesent}";
					
						$headers = "From: {$_POST['email']}";
					
						mail('leisl@remixphoto.ws', 'Project Inquiry', $body, $headers);
					
						echo "<p><strong>Thank you for your inquiry.</strong> Your message has been sent. You can expect a confirmation within one business day, and a detailed reply within three business days.</p>";
				
						}
						
					else	{
						showform();
					}
				}
				
				else {
					showform();
				}
				
				?>
</div>

<?php
include("../includes/bottom.php");
?>