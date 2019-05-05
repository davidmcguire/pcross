<?php
	include_once 'header.php';
?>



	<main>
		<?php 
			if (isset($_SESSION['userId'])) {
				readfile("podpage.html");
			}

			else {
				readfile("podpagefresh.html");
			}
		 ?>
	</main>



<?php
	include_once 'footer.php';
?>

