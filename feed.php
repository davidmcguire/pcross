<?php

require 'includes/dbh.inc.php';
include_once('header.php');
include_once('includes/functions.php');
 
$_SESSION['userid'] = 0;

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Podcross</title>
</head>
<br>
<br>
<body>

<div class="main">
			<h2>CROSS PROMOTE AND COLLABORATE WITH OTHER INDEPENDENT PODCASTS</h2><br>

				<p><a href="https://docs.google.com/forms/d/1OI1HfL3ri-gFj3ACxYYqiXfCQyGc-vzMv5jKvGPnA4Q" target="_blank">Register Your Show</a></p>
				<p><a href="https://go.glideapps.com/play/E8Z15Y2OTXS3q36wQzxD" target="_blank">Search Network Shows</a></p>
				<p><a href="mailto:podcasts@wearestabl.com">Request contact of other shows</a></p>
				<p><a href="mailto:podcasts@wearestabl.com"><img src="img/slack.png" alt="Slack Logo"></a></p>
				<p><a href="mailto:podcasts@wearestabl.com">Request to join our Podcross Slack Group</a></p>
				

			
		
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

			<b><p>Note about GDPR: your details will not be passed to any third parties.</p><b>

			</div>

</div>


	</body>
</b>

</html>

	



