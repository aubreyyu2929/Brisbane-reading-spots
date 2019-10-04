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

		<header id="search-head">
			<!-- <div id="topbar">
				<h2 id='userLocation'>Location</h1>
			</div> -->
			<form id="filter">
				<input id="filter-text" type="text" placeholder="Filter by Text" value="">
				<p id="filter-count"><strong>103</strong> records displayed.</p>
			</form>
		
			<section id="userAddress"></section>

			<div class="slidecontainer">
				<input type="range" min="1" max="200" value="200" class="slider" id="myRange">
			</div>
			<p>Distance within: <span id="sliderDist"></span> Km</p>
			
		</header>
	
		<main>