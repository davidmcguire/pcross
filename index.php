<?php
	include_once 'header.php';
?>



	<main>
		<?php 
			if (isset($_SESSION['userId'])) {
				readfile("feed.php");
			}

			else {
				readfile("podpagefresh.html");
			}
		 ?>
	</main>



<?php
	include_once 'footer.php';
?>

