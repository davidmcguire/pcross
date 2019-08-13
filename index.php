<?php
	include_once 'header.php';
?>

	<main>
		<?php 

		ob_start(); // ensures anything dumped out will be caught

		$url = "feed.php";


			if (isset($_SESSION['userId'])) {
				header( "Location: $url" );
			}

			else {
				readfile("podpagefresh.html");
			}
		 ?>
	</main>



<?php
	include_once 'footer.php';
?>

