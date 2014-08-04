<?php include 'includes/head.php'; ?>

	<div class="divide"></div>

	<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		
		switch ($page) {
			case 'home':
				include 'content/home.php';
				break;
			case 'work':
				include 'content/work.php';
				break;
			case 'about':
				include 'content/about.php';
				break;
			case 'contact':
				include 'content/contact.php';
				break;
			
			default:
				include 'content/home.php';
				break;
		}
	} else {
		include 'content/home.php';
	}
	?>

	<div class="divide"></div>

<?php include 'includes/foot.php'; ?>
