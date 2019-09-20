<?php $activePage = basename($_SERVER['SCRIPT_FILENAME'], '.php'); ?>
<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<title><?php echo $pageTitle; ?>Discover</title>
		<link rel="stylesheet" href="style.css">

	</head>

	<body <?php if ($activePage == "foryou") {echo "class='foryou'";} else if ($activePage == "event") {echo "class='event'";}
	else if ($activePage == "collection") {echo "class='collection'";}?>>

		<header>
			<div id="topbar">
				<h2 id='userLocation'>Location</h1>
			</div>
			
		

			<nav id='headnav'>
				<ul>
					<li <?php if ($activePage == "foryou") {echo "class='active'";}?>>
						<a href="foryou.php">For You</a>
					</li>
					<li <?php if ($activePage == "event") {echo "class='active'";}?>>
						<a href="event.php">Event</a>
					</li>
					<li <?php if ($activePage == "collection") {echo "class='active'";}?>>
						<a href="collection.php">Collection</a>
					</li>
				</ul>
			</nav>
		</header>
	
		<main>