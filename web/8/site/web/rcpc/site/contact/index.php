<?php include ('../includes/header.php');?><h1>Contact Us</h1><h2>Mail</h2><p>Responsible Choices Publishing Co., Inc.<br />P.O. Box 2680<br />North Babylon, New York 11703</p><h2>E-Mail</h2><p><a href="mailto:wegottatalkbaby@optonline.net">wegottatalkbaby@optonline.net</a></p><?php ob_start();// if (isset($_POST[''])) {echo ' value="' . $_POST[''] . '"';}// if (isset($_POST['']) && $_POST[''] == '') {echo ' checked="checked"';}function showform() {echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">';echo '<p>Name <input type="text" name="name" size="35"';if (isset($_POST['name'])) {echo ' value="' . $_POST['name'] . '"';}echo ' /></p>';echo '<p>Address <input type="text" name="address" size="50"';if (isset($_POST['address'])) {echo ' value="' . $_POST['address'] . '"';}echo ' /></p>';echo '<p>Phone Number <input type="text" name="phone" size="15"';if (isset($_POST['phone'])) {echo ' value="' . $_POST['phone'] . '"';}echo ' /></p>';echo '<p>Email Address <input type="text" name="email" size="20"';if (isset($_POST['email'])) {echo ' value="' . $_POST['email'] . '"';}echo ' /></p>';echo '<p>How did you hear about us?</p>';echo '<textarea name="heard" rows="3" cols="60">';if (isset($_POST['heard'])) {echo $_POST['heard'];}echo '</textarea>';echo '<p>Write your message in the box below.</p>';echo '<textarea name="comments" rows="8" cols="60">';if (isset($_POST['comments'])) {echo $_POST['comments'];}echo '</textarea>';echo '<p><input type="checkbox" name="list" value="yes" /> Please add me to your e-mail list.</p>';echo '<input type="submit" name="submit" value="Send" /> <input type="reset" name="reset" value="Clear" />';echo '</form>';}if (isset($_POST['submit'])){		if (empty($_POST['comments']))	{$_POST['comments'] = FALSE; echo '<h3>Please include a message.</h3>';}		if ($_POST['comments']) {		$datesent = date("l, F j G:i");			$body = "A form has been submitted at the RCPC web site\n\n			Name:  {$_POST['name']}\n		Present Address: {$_POST['address']}\n		Phone Number: {$_POST['phone']}\n		Email Address: {$_POST['email']}			\n\n		How did you hear about us?\n		{$_POST['heard']}\n\n			\n\n		Comments:\n			{$_POST['comments']}			\n\n			Add to list: {$_POST['list']}\n\n			Date sent: {$datesent}";			$headers = "From: {$_POST['email']}";			mail('wegottatalkbaby@optonline.net', 'RCPC contact form', $body, $headers);			echo '<p>Thank you for contacting us. Your feedback is important to us.</p>';		}				else		{		echo '<h3>Your e-mail has not been sent. Please make corrections and try again.</h3>';		showform();		}	}else {showform();}ob_end_flush();include ('../includes/footer.php');?>