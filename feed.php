<?php

require 'includes/dbh.inc.php';
include_once('header.php');
include_once('includes/functions.php');
 
$_SESSION['userid'] = 1;

  if (!isset($_SESSION['userId'])) {
        readfile("podpagefresh.html");
        exit();
      }
?>

<div>
		<div class="main">
			<ul>
				<li><a href="https://docs.google.com/forms/d/1OI1HfL3ri-gFj3ACxYYqiXfCQyGc-vzMv5jKvGPnA4Q">Register Your Show</a></li>
				<li><a href="https://go.glideapps.com/play/E8Z15Y2OTXS3q36wQzxD">Search Network Shows</a></li>
				<li><a href="https://docs.google.com/spreadsheets/d/1JY6naOLaKtuWMVIufJj7NS0f9hJ2s1aP2JwuYNF3FYM">Show Complete Database (Google Sheets)</a></li>
			</ul>
</div>





<div class="feed-form">
<form method='post' action='includes/add.php'>
<textarea name='body' rows='3' cols='40' placeholder="Leave a message..."></textarea>
<p><input type='submit' value='submit'/></p>
</form>
</div>


<?php
$posts = show_posts($_SESSION['userid']);
 
if (count($posts)){
?>
<div class="comments">
<table border='3' cellspacing='4' cellpadding='5'>
<?php
foreach ($posts as $key => $list){
    echo "<tr valign='top'>\n";
    echo "<td>".$list['body'] ."<br/>\n";
    echo "<small>".$list['stamp'] ."</small></td>\n";
    echo "</tr>\n";
}
?>
</div>
</table>
<?php
}else{
?>
<p><b>You haven't posted anything yet!</b></p>
<?php
}
?>

<div class="footer">

			<p>It's completely up to you how you collaborate but I would advise on the following pointers:

			<ol>
			    <li>be nice when reaching out to another producer - send an email explaining who you are, why you want to collaborate and where you got their details from;</li>
				<li>if a producer mentions your podcast on their show, please do the same for them;</li>
				<li>make sure you take time to listen to your collaborator's show so you can enthuse in a genuine way;</li>
				<li>mention the title of your collaborator's podcast and (at least) one sentence summing up what listeners can expect;</li>
				<li>explain to your listeners why you're mentioning another podcast. Make your listeners feel that they're part of something bigger (which bigs up yourself as well, of course!). For example, "Before we start, a big shout out to the XYZ podcast which focuses on ABC... all part of the network for independent podcasters..." [feel free to mention podcross but not obligatory, natch].</li>
				<li>get creative if you have time - do a mini review, include a clip, get them on your show;</li>
				<li>be fair. This will only work if you give what you get, so please be considerate :)</li>
			</ol>
		<p>

		<p>We want to create the 'network effect'. It's completely voluntary but hopefully something that we can build on as one big group</p>


			<p>----</p>

			<p><a href="https://wearestabl.com/introducing-podcross/">Here's a blog post</a> explaining why I started Podcross.</p>

			<p>This service is free!</p> 

			<p>We're starting small, however, we're trying to make this service much (much) better for everyone. If you believe in this project and what it can do for independent podcast producers, please consider "<a href="https://www.buymeacoffee.com/podcross">buying me a coffee</a>" and I'll invest the money back into Podcross.</p>

			<p>Let's build this thing!</p>

			<style>.bmc-button img{width: 27px !important;margin-bottom: 1px !important;box-shadow: none !important;border: none !important;vertical-align: middle !important;}.bmc-button{line-height: 36px !important;height:37px !important;text-decoration: none !important;display:inline-flex !important;color:#FFFFFF !important;background-color:#FF813F !important;border-radius: 3px !important;border: 1px solid transparent !important;padding: 0px 9px !important;font-size: 17px !important;letter-spacing:-0.08px !important;box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;margin: 0 auto !important;font-family:'Lato', sans-serif !important;-webkit-box-sizing: border-box !important;box-sizing: border-box !important;-o-transition: 0.3s all linear !important;-webkit-transition: 0.3s all linear !important;-moz-transition: 0.3s all linear !important;-ms-transition: 0.3s all linear !important;transition: 0.3s all linear !important;}.bmc-button:hover, .bmc-button:active, .bmc-button:focus {-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;text-decoration: none !important;box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;opacity: 0.85 !important;color:#FFFFFF !important;}</style><link href="https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext" rel="stylesheet"><a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/podcross"><img src="https://www.buymeacoffee.com/assets/img/BMC-btn-logo.svg" alt="Buy me a coffee"><span style="margin-left:5px">Buy me a coffee</span></a>


			<p>Let me know how you get on and I'll post your collaborations on the <a href="https://go.glideapps.com/play/E8Z15Y2OTXS3q36wQzxD" target="_blank">app</a>. And do you want any more features? Open to feedback!</p>

			<p>There's no official support as such (for the moment) but feel free to reach out to me on <a href="https://twitter.com/dguigsy">Twitter</a></p>

			<b><p>Note about GDPR: your details will not be passed to any third parties.</p><b>

			</div>

</div>


	

	



