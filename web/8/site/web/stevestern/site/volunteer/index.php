<?phpinclude ("../includes/top.php");?><h1>Volunteer</h1><?php// if (isset($_POST[''])) {echo ' value="' . $_POST[''] . '"';}// if (isset($_POST['']) && $_POST[''] == '') {echo ' checked="checked"';}function showform() {echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">';echo '<p>Name <input type="text" name="name" size="35"';if (isset($_POST['name'])) {echo ' value="' . $_POST['name'] . '"';}echo ' /></p>';echo '<p>Address <input type="text" name="address" size="50"';if (isset($_POST['address'])) {echo ' value="' . $_POST['address'] . '"';}echo ' /></p>';echo '<p>City: <input type="text" name="city" size="22" maxlength="30"';if (isset($_POST['city'])) {echo ' value="' . $_POST['city'] . '"';}echo ' /></p>';echo '<p>State: <input type="text" name="state" size="2" maxlength="2"';if (isset($_POST['state'])) {echo ' value="' . $_POST['state'] . '"';}else {echo ' value="NY"';}echo ' /></p>';echo '<p>Zip: <input type="text" name="zip" size="5" maxlength="10"';if (isset($_POST['zip'])) {echo ' value="' . $_POST['zip'] . '"';}echo ' /></p>';echo '<p>Home Phone <input type="text" name="home_phone" size="15"';if (isset($_POST['home_phone'])) {echo ' value="' . $_POST['home_phone'] . '"';}echo ' /></p>';echo '<p>Cell Phone <input type="text" name="cell_phone" size="15"';if (isset($_POST['cell_phone'])) {echo ' value="' . $_POST['cell_phone'] . '"';}echo ' /></p>';echo '<p>Job Title/Occupation <input type="text" name="occupation" size="20"';if (isset($_POST['occupation'])) {echo ' value="' . $_POST['occupation'] . '"';}echo ' /></p>';echo '<p>Email Address <input type="text" name="email" size="20"';if (isset($_POST['email'])) {echo ' value="' . $_POST['email'] . '"';}echo ' /></p>';echo '<h3>I wish to volunteer by:</h3>';echo '<input type="checkbox" name="volunteer[]" value="Holding a Fundraiser"';if (isset($_POST['volunteer']) && in_array('Holding a Fundraiser', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Holding a Fundraiser ';echo '<input type="checkbox" name="volunteer[]" value="Computer/Clerical"';if (isset($_POST['volunteer']) && in_array('Computer/Clerical', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Computer/Clerical ';echo '<input type="checkbox" name="volunteer[]" value="Event Support"';if (isset($_POST['volunteer']) && in_array('Event Support', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Event Support ';echo '<br />';echo '<input type="checkbox" name="volunteer[]" value="Hosting a Meet the Candidate Event"';if (isset($_POST['volunteer']) && in_array('Hosting a Meet the Candidate Event', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Hosting a Meet the Candidate Event ';echo '<input type="checkbox" name="volunteer[]" value="Research"';if (isset($_POST['volunteer']) && in_array('Research', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Research ';echo '<input type="checkbox" name="volunteer[]" value="Transportation"';if (isset($_POST['volunteer']) && in_array('Transportation', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Transportation ';echo '<br />';echo '<input type="checkbox" name="volunteer[]" value="Postering"';if (isset($_POST['volunteer']) && in_array('Postering', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Postering ';echo '<input type="checkbox" name="volunteer[]" value="Phone Banking"';if (isset($_POST['volunteer']) && in_array('Phone Banking', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Phone Banking ';echo '<br />';echo '<input type="checkbox" name="volunteer[]" value="Door to Door"';if (isset($_POST['volunteer']) && in_array('Door to Door', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Door to Door ';echo '<input type="checkbox" name="volunteer[]" value="Mailings"';if (isset($_POST['volunteer']) && in_array('Mailings', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Mailings ';echo '<input type="checkbox" name="volunteer[]" value="Literature Distribution"';if (isset($_POST['volunteer']) && in_array('Literature Distribution', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Literature Distribution ';echo '<input type="checkbox" name="volunteer[]" value="Lawn Signs"';if (isset($_POST['volunteer']) && in_array('Lawn Signs', $_POST['volunteer'])) {echo ' checked="checked"';}echo ' /> Lawn Signs';echo '<p>Write any additional comments in the box below.</p>';echo '<textarea name="comments" rows="8" cols="60">';if (isset($_POST['comments'])) {echo $_POST['comments'];}echo '</textarea>';echo '<p><input type="checkbox" name="list" value="yes" /> Please send me e-mail about Stern campaign events and updates.</p>';echo '<input type="submit" name="submit" value="Send" /> <input type="reset" name="reset" value="Clear" />';echo '</form>';}if (isset($_POST['submit'])){		if (empty($_POST['name']))	{$_POST['name'] = FALSE; echo '<h3>Please include your name.</h3>';}	if (empty($_POST['address']))	{$_POST['address'] = FALSE; echo '<h3>Please include your street address.</h3>';}	if (empty($_POST['city']))	{$_POST['city'] = FALSE; echo '<h3>Please include your city.</h3>';}	if (empty($_POST['state']))	{$_POST['state'] = FALSE; echo '<h3>Please include your state.</h3>';}	if (empty($_POST['zip']))	{$_POST['zip'] = FALSE; echo '<h3>Please include your zip code.</h3>';}	if (empty($_POST['home_phone']))	{$_POST['home_phone'] = FALSE; echo '<h3>Please include your home phone.</h3>';}	if (empty($_POST['email']))	{$_POST['email'] = FALSE; echo '<h3>Please include your email.</h3>';}	if (empty($_POST['volunteer']))	{$_POST['volunteer'] = FALSE; echo '<h3>Please check at least one volunteering method.</h3>';}	if ($_POST['name'] && $_POST['address'] && $_POST['city'] && $_POST['state'] && $_POST['zip'] && 	$_POST['home_phone'] && $_POST['email'] && $_POST['volunteer']) {		$datesent = date("l, F j G:i");			$volunteer_method = implode(', ', $_POST['volunteer']);			$body = "A volunteer form has been submitted at the Steve Stern web site\n\n			Name:  {$_POST['name']}\n		Present Address: {$_POST['address']}\n		City: {$_POST['city']}\n		State: {$_POST['state']}\n		Zip: {$_POST['zip']}\n		Home Phone: {$_POST['home_phone']}\n		Cell Phone: {$_POST['cell_phone']}\n		Job Title/Occupation: {$_POST['occupation']}\n		Email Address: {$_POST['email']}\n\n				Volunteer methods offered:\n		{$volunteer_method}		\n\n		Comments:\n			{$_POST['comments']}			\n\n			Add to e-mail list: {$_POST['list']}\n\n			Date sent: {$datesent}";			$headers = "From: {$_POST['email']}";			mail('info@stevestern2005.us', 'Stern Volunteer contact form', $body, $headers);			echo '<h3>Thank you for volunteering your time to Steve Stern for Suffolk County Legislator. 		We will get back to you shortly.</h3>';		}				else		{		echo '<h3>Your e-mail has not been sent. Please make corrections and try again.</h3>';		showform();		}	}else {showform();}?><?phpinclude ("../includes/bottom.php");?>