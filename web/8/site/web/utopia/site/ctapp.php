<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>Utopia Home Care - Short Form Employment Application - Connecticut</title><link href="style.css" rel="stylesheet" type="text/css" /><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head><body><p class="heading">Short Form - Employment Application - Connecticut</p><p>(Full application to be completed at local branch office)</p><hr /><?phperror_reporting(E_ALL & ~E_NOTICE);if (isset($_POST['submit'])){$body ="An online application has been submitted for employment at Utopia Home Care in the state of Connecticut.\n\nFirst Name: {$_POST['firstname']}\nLast Name: {$_POST['lastname']}\nStreet Address: {$_POST['streetaddr']}\nCity: {$_POST['city']}\nState: {$_POST['state']}\nZip Code: {$_POST['zipcode']}\nWork Phone: {$_POST['workphone']}\nhome Phone: {$_POST['homephone']}\nE-mail: {$_POST['email']}\n\nPart time or full time: {$_POST['time']}\nSpeaks another language: {$_POST['otherlang']}\nOther languages spoken: {$_POST['languages']}\n\nDesired position: {$_POST['position']}\nAide certified: {$_POST['aidecertified']}\nOwns a car: {$_POST['ownacar']}\n\nConnecticut branch desired: {$_POST['ctbranch']}\n";$headers = "From: {$_POST['email']}\r\nCc: info@utopiahomecare.com";mail('mmagarian@utopiahomecare.com', 'Online Application: Connecticut', $body, $headers);echo "<p>Thank You for inquiring about employment at Utopia Home Care, Inc.</p> <p>Your information will be processed shortly and we look forward to getting to know you better. </p>";}else{?><form method="post" action=""><p>Let us know a little about yourself.</p><p>First Name: <input type="text" name="firstname" size="25" /></p><p>Last Name: <input type="text" name="lastname" size="25" /></p><p>Street Address: <input type="text" name="streetaddr" size="35" /></p><p>City: <input type="text" name="city" size="35" /></p><p>State/Province: <input type="text" name="state" size="35" /></p><p>Zip/Postal Code: <input type="text" name="zipcode" size="12" maxlength="12" /></p><p>Work Phone: <input type="text" name="workphone" size="25" maxlength="25" /></p><p>Home Phone: <input type="text" name="homephone" size="25" maxlength="25" /></p><p>E-mail: <input type="text" name="email" size="25" /></p><p>Are you interested in working...</p><p><input type="radio" name="time" value="part time" />Part-Time<br /><input type="radio" name="time" value="full time" />Full-Time</p><p>Do you speak a foreign language?</p><p><input type="radio" name="otherlang" value="Yes" /> Yes <br /><input type="radio" name="otherlang" value="No" /> No</p><p>If so, please enter the language(s) you speak.</p><p><input type="text" name="languages" size="50" maxlength="50" /></p><p>I am interested in the following position:</p><p><select name="position" size="1"><option value="">-----</option><option value="RN">Nurse(RN)</option><option value="LPN">Nurse(LPN)</option><option value="Therapist">Therapist</option><option value="Social Worker">Social Worker</option><option value="Home Health Aide">Home Health Aide</option><option value="Personal Care Aide">Personal Care Aide</option><option value="CNA">CNA</option><option value="Live-In">Live-In</option><option value="Homemaker">Homemaker</option></select></p><p>For those applying as an Aide, are you currently certified?</p><p><input type="radio" name="aidecertified" value="Yes" /> Yes <br /><input type="radio" name="aidecertified" value="No" /> No</p><p>* Must be 18 years of age or older.</p><p>* Criminal background checks are done on all personnel.</p><p>Do you own a car?</p><p><input type="radio" name="ownacar" value="Yes" /> Yes<br /><input type="radio" name="ownacar" value="No" /> No</p><p>Please select the Branch Office you would like to work for.</p><p>Connecticut:</p><p><select name="ctbranch" size="1"><option value="">----</option><option value="East Haven">East Haven</option><option value="Hartford">Hartford</option><option value="Norwalk">Norwalk</option><option value="Waterbury">Waterbury</option><option value="New London">New London</option></select></p><p><input type="submit" name="submit" value="Apply Now" /><input type="reset" value="Reset Form" /></p></form><?php}?><p><a href="careers_ct.html">Back</a></p></body></html>