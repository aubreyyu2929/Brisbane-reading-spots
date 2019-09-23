<?php
$pageTitle = "Contact";
 include("searchhead.php"); ?>
	<head>
		<meta charset="utf-8">
		<title>Search Example</title>
		<link rel="stylesheet" href="search.css">
	</head>
	<body>
		<div id="loading"></div>
		<form id="filter">
			<input id="filter-text" type="text" placeholder="Filter by Text" value="">
			<em>(Case-sensitive)</em>
			<p id="filter-count"><strong>103</strong> records displayed.</p>
		</form>
		
		<section id="userAddress"></section>

		<div class="slidecontainer">
			<input type="range" min="1" max="200" value="200" class="slider" id="myRange">
		</div>
		<p>Distance within: <span id="sliderDist"></span> Km</p>
		<h1>Records from SLQ</h1>
		<section id="records"></section>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="search.js"></script>
	</body>

			<?php include("footer.php"); ?>