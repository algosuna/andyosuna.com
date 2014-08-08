<?php include 'includes/head.php'; ?>

	<div class="divide"></div>

	<?php
		switch ($pageCurrent):
			case $navItem[0]:
				include 'content/home.php';
				break;
			case $navItem[1]:
				include 'content/work.php';
				break;
			case $navItem[2]:
				include 'content/about.php';
				break;
			case $navItem[3]:
				include 'content/contact.php';
				break;
			
			default:
				include 'content/home.php';
				break;
		endswitch;
	?>

	<div class="divide"></div>

<?php include 'includes/foot.php'; ?>
