<div class="content container">
	<p><?php echo $homeIntro; ?></p>
	<figure>
		<img src="images/selfie.png" alt="Andrea Gonzalez Osuna" title="I am Andy Osuna">
		<figcaption><?php echo $figCaption; ?></figcaption>
	</figure>
	<div class="btn-group clear">
		<?php echo '
		<a href="work" class="btn">'.$btnText[0].'</a>
		<a href="about" class="btn">'.$btnText[1].'</a>
		<a href="contact" class="btn">'.$btnText[2].'</a>
		'; ?>
	</div>
</div>