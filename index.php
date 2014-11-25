<?php include_once 'content/vars.php'; ?>
<?php include 'includes/head.php'; ?>

	<div class="divide"></div>

	<?php
		switch ($pageCurrent):
			case ($navItem[0]):
				include 'views/home.php';
				break;
			case ($navItem[1]):
				include 'views/work.php';
				break;
			case ($navItem[2]):
				include 'views/about.php';
				break;
			case ($navItem[3]):
				include 'views/contact.php';
				break;
			case '404':
				include 'views/error.php';
				break;
			case '403':
				include 'views/error.php';
				break;
			case '500':
				include 'views/error.php';
				break;
			
			default:
				include 'views/home.php';
				break;
		endswitch;
	?>

	<div class="divide"></div>

<?php include 'includes/foot.php'; ?>
