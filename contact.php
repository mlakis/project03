<?php $thisPage="Contact"; ?>
<?php include "inc/header.inc"; ?>

	<?php include "inc/nav.inc"; ?>

	<h1>Contact Me</h1>
			
	<section id="c">

		<table>
			<tr>
			<!-- Contact Form -->
			<form action="database-write.php" method="post">
				<div>
					<label for="name">Name: </label>
					<input type="text" name="name" id="name" />
				</div>
				<div>
					<label for="email">Email: </label>
					<input type="text" name="email" id="email" />
				</div>
				<div>
					<label for="phone">Telephone: </label>
					<input type="text" name="phone" id="phone" />
				</div>
				<div>
					<label for="message">Message: </label>
					<input type="text" name="message" id="message" />
				</div>
				<input type="submit" value="Send" />
			</form>
		</tr>
		</table>
	</section>

			<?php include "inc/footer.inc"; ?>
		</div>
	</body>
</html>