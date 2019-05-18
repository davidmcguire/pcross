<?php
	include_once 'header.php';
?>



	<main>
		<?php 

		ob_start(); // ensures anything dumped out will be caught

		$url = "feed.php";

		// clear out the output buffer
		while (ob_get_status()) 
		{
		    ob_end_clean();
		}

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

