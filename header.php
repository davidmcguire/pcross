<?php  

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta description="podcrossing" content="podcrossing around the world">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script type="text/javascript">
  window.MemberfulOptions = {site: "https://podcross.memberful.com"};

  (function() {
    var s   = document.createElement('script');

    s.type  = 'text/javascript';
    s.async = true;
    s.src   = 'https://d35xxde4fgg0cx.cloudfront.net/assets/embedded.js';

    setup = function() { window.MemberfulEmbedded.setup(); }

    s.addEventListener("load", setup, false);

    ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
  })();
</script>


</head>

<body>

	<header class="main-wrapper">
		<nav>
			<a href="feed.php">
				<img src="img/pc.png" alt="logo">
			</a>

			
			<div>
				<?php

				if (isset($_SESSION['userId'])) {
				echo '<form class="nav-logout" action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
					</form>';
					
				}

				else {
				echo '<form class="nav-login" action="includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/Email...">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="login-submit">Login</button>
					</form>
					<button class="signup-button"><a href="signup.php">Signup</a></button>';
				}

				?>
				
				
			</div>
		</nav>
	</header>