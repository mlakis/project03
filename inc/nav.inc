<nav>
	<ul>

		<!--Home-->
		<li<?php if($thisPage=="Home") echo " class=\"currentpage\""; ?>>
		<a href="index.php">Home</a></li>
		<!--Portfolio-->
		<li<?php if($thisPage=="Portfolio") echo " class=\"currentpage\""; ?>>
		<a href="portfolio.php">Portfolio</a></li>
		<!--Contact Form-->
		<li<?php if($thisPage=="Contact") echo " class=\"currentpage\""; ?>>
		<a href="contact.php">Contact</a></li>
	
	</ul>
</nav>