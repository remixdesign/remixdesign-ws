<?php

$sectionName = "get in touch";

$dirLevel = 1;
$dirPrefix = "../";

include("../includes/top.php");

?>

<div class="section_info">
	
	<p>Thank you for choosing Remix Design for your design services. We would like to hear some of your thoughts about your experience.</p>

	<p>Please rate the following statements on a scale of 1 to 5, 1 being "absolutely false" and 5 being "absolutely true." You can also answer some open-ended questions.</p>
	
	<p>You may answer as many or as few questions as you like, and you may complete this form at your leisure. Thanks again.</p>

</div>

<div class="section_content">

<?php
			
			function showform() {			
				
				$questions[1] = 'My first impression of Remix Design was positive.';
				
				$questions[2] = 'Visiting www.remixdesign.ws was a positive influence on my decision to hire.';
				
				$questions[3] = 'Email and phone responses were prompt.';
				
				$questions[4] = 'Email communication was clearly worded.';
				
				$questions[5] = 'The proposal was comprehensive and informative.';
				
				$questions[6] = 'I felt comfortable with the contract and legal terms.';
				
				$questions[7] = 'Initial drafts and sketches were well well presented and well thought out.';
				
				$questions[8] = 'Staff listened attentively to feedback and made revisions accordingly.';
				
				$questions[9] = 'Staff were thoroughly knowledgeable about design.';
				
				$questions[10] = 'Staff were thoroughly knowledgeable about coding and technical issues.';
				
				$questions[11] = 'Staff listened to what I had to say, and were genuinely concerned with my needs.';
				
				$questions[12] = 'Working with Remix Design put me at ease about the project, and alleviated my worries and concerns.';
				
				$questions[13] = 'There was adequate communication throughout the process.';
				
				$questions[14] = 'Staff conducted themselves professionally.';
				
				$questions[15] = 'The job was completed in a reasonable time frame.';
				
				$questions[16] = 'Pricing for the job was reasonable.';
				
				$questions[17] = 'I am satisfied with the work done.';
				
				$questions[18] = 'I am satisfied with the customer service I received.';
				
				$questions[19] = 'Overall, I am satisfied with the experience.';
				
				$questions[20] = 'I would use Remix Design again for design services.';
				
				$questions[21] = 'I would recommend Remix Design to a colleague.';
				
				$total_radio_questions = 21;
				
			
				$questions[22] = '';
				
				$questions[23] = '';
				
				$questions[24] = '';
				
				$questions[25] = '';
				
				
				echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
				
				name<br />
				<input type="text" name="name" class="input_textbox"';
				if (isset($_POST['name'])) {
					echo ' value="' . $_POST['name'] . '"';
				}
				elseif (isset($_REQUEST['name'])) {
					echo ' value="' . $_REQUEST['name'] . '"';
				}
				echo ' /><br /><br />
				
				email address<br />
				<input type="text" name="email" class="input_textbox"';
				if (isset($_POST['email'])) {
					echo ' value="' . $_POST['email'] . '"';
				}
				elseif (isset($_REQUEST['email'])) {
					echo ' value="' . $_REQUEST['email'] . '"';
				}
				echo ' /><br /><br />
				
				company name<br />
				<input type="text" name="company" class="input_textbox"';
				if (isset($_POST['company'])) {
					echo ' value="' . $_POST['company'] . '"';
				}
				elseif (isset($_REQUEST['company'])) {
					echo ' value="' . $_REQUEST['company'] . '"';
				}
				echo ' /><br /><br />	
				
				<div class="section_separator clear"></div>';	
				
				for ($q_number = 1; $q_number <= $total_radio_questions; $q_number++) {					
					
					echo $questions[$q_number];
				
					for ($q_value = 1; $q_value <= 5; $q_value++) {
					
						echo '<div class="survey_radio_box">
							' . $q_value . ' <input type="radio" name="answers[' . $q_number . ']" value="' . $q_value . '" />
						</div>
						
						';
					}
					
					echo '<div class="section_separator clear"></div>';
					
				}
				
				
				echo '<br class="clear" />
				
				What made you choose Remix Design?<br />
				
				<textarea name="answers[]" rows="8">';
				if (isset($_POST['details'])) {
					echo stripslashes($_POST['details']);
				}
				echo '</textarea><br /><br />
				
				In what areas did we meet or exceed your expectations?<br />
				
				<textarea name="details" rows="8">';
				if (isset($_POST['details'])) {
					echo stripslashes($_POST['details']);
				}
				echo '</textarea><br /><br />
				
				In which areas can we improve?<br />
				
				<textarea name="details" rows="8">';
				if (isset($_POST['details'])) {
					echo stripslashes($_POST['details']);
				}
				echo '</textarea><br /><br />
				
				Write in any additional comments below.<br />
				
				<textarea name="comments" rows="8">';
				if (isset($_POST['details'])) {
					echo stripslashes($_POST['details']);
				}
				echo '</textarea><br /><br />
				
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
					
						mail('leisl@remixdesign.ws', 'Project Inquiry', $body, $headers);
					
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