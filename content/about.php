<div class="content container about">
	<h2>About me</h2>
	<p>I am a <span class="days">number of</span> sunsets old web designer and developer. I'd rather find myself with a headache because of code than thinking of color palets, but I am flexible. I also enjoy photography, digital and analog, and it is my not-so-secret hobby. Other things I love are good coffe, craft beer, nice hats, sunsets and the clicking of keyboards.</p>

	<h3>Skills</h3>
	<p>I am always looking to grow my skillset learning new languages, frameworks and workflows. Below is a list of my current skills:</p>
	<ul>
		<?php
		foreach ($skill as $value):
			echo '<li>'.$value.'</li>';
		endforeach;
		?>
	</ul>
	<p>The skills below are still being polished, I'm not confortable using them without references or form scratch:</p>
	<ul>
		<?php
		foreach ($futSkill as $value):
			echo '<li>'.$value.'</li>';
		endforeach;
		?>
	</ul>
	<div class="social">
		
	</div>
</div>
<?php unset($value); ?>