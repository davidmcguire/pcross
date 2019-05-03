<?php
	include_once 'header.php';
?>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>Sign Up</h2>
			<?php
			if (isset($_GET['error'])) {
				if ($_GET['error'] == "emptyfields") {
					echo '<p>Fill in all the fields!</p>';
				}
				elseif ($_GET['error'] == "invaliduidmail")  {
					echo '<p>Invalid username and email!</p>';
				}
				elseif ($_GET['error'] == "invaliduid")  {
					echo '<p>Invalid username!</p>';
				}
				elseif ($_GET['error'] == "invalidmail")  {
					echo '<p>Invalid E-Mail!</p>';
				}
				elseif ($_GET['error'] == "passwordcheck")  {
					echo '<p>Your passwords do not match!</p>';
				}
				elseif ($_GET['error'] == "usertaken")  {
					echo '<p>Username already taken!</p>';
				}
			}
			elseif ($_GET['signup'] == "success") {
				echo '<p>Signup Successful!</p>';
			}
			?>
			<form class="signup-form" action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="Email">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat password">
				<button type="submit" name="signup-submit">Sign Up</button>
			</form>	
		</div>
	</section>

<?php
	include_once 'footer.php';
?>

