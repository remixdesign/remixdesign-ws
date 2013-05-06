<a href="../">back to project</a>

<h3 class="center"><?php echo $galleryName; ?></h3>

<div class="center">

<?php

echo '<p>';

for ($i = 1; $i <= $totalSwitches; $i++) {
	echo '<a href="?switch=' . $i . '">' . $allSwitches[$i]['name'] . '</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
}

echo '</p>

';

if (!isset($_REQUEST['switch'])) {
	$_REQUEST['switch'] = 1;
}

$switchNumber = $_REQUEST['switch'];
echo $allSwitches[$switchNumber]['content'];

echo '<p class="smallprint">' . $galleryCopyright . '</p>';

?>

</div>