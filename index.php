<?php
	include_once 'header.php';
?>



	<main>
		<?php 
			if (isset($_SESSION['userId'])) {
				echo readfile("podpage.html");
			}

			else {
				echo readfile("podpagefresh.html");
			}
		 ?>
	</main>



<?php
	include_once 'footer.php';
?>

