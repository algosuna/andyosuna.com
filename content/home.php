<div class="content container">
	<p><?php echo $homeIntro; ?></p>
	<figure>
		<img src="images/selfie.png" alt="Andrea Gonzalez Osuna" title="I am Andy Osuna">
		<figcaption><?php echo $figCaption; ?></figcaption>
	</figure>
	<div class="btn-group clear">
		<?php echo '
		<a href="'.$navLink[1].'" class="btn">'.$btnText[0].'</a>
		<a href="'.$navLink[2].'" class="btn">'.$btnText[1].'</a>
		<a href="'.$navLink[3].'" class="btn">'.$btnText[2].'</a>
		'; ?>
	</div>
</div>