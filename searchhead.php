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
			
			
		</header>
	
		<main>