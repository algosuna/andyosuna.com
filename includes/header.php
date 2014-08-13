<header class="container clear">
	<div class="logo">
		<h1>Andy Osuna</h1>
		<p><?php echo $headerTagline; ?></p>
	</div>
	<button class="hambarger">
		<span class="hambar"></span>
		<span class="hambar"></span>
		<span class="hambar"></span>
	</button>
	<nav>
		<ul>
			<?php echo '
			<li><a href="'.$navLink[0].'">'.$navItem[0].'</a></li>
			<li><a href="'.$navLink[1].'">'.$navItem[1].'</a></li>
			<li><a href="'.$navLink[2].'">'.$navItem[2].'</a></li>
			<li><a href="'.$navLink[3].'">'.$navItem[3].'</a></li>
			'; ?>
		</ul>
	</nav>
</header>