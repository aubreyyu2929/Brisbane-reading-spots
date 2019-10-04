<?php 
$pageTitle ="Home";
include("header.php"); ?>
		<!-- <div id="loading"></div> -->
		<form id="filter">
			<input id="filter-text" type="text" placeholder="Filter by Text" value="">
			<em>(Case-sensitive)1111</em>
			<p id="filter-count"><strong>0</strong> records displayed.</p>
		</form>
		
		<section id="userAddress"></section>

		<div class="slidecontainer">
			<input type="range" min="1" max="200" value="200" class="slider" id="myRange">
		</div>
		<p>Distance within: <span id="sliderDist"></span> Km</p>
		<h1>Records from SLQ</h1>
		<section id="records">
			<div class="setgrade">  
				<div class="grade">
					<span id="getgrade">0.0</span>
				</div>
    			<div class="star">
        			<ul id="star">
						<li>
							<a href="javascript:void(0)" onclick="halfStar(1)"></a>
							<a href="javascript:void(0)" onclick="halfStar(2)"></a>
						</li>
						<li>
							<a href="javascript:void(0)" onclick="halfStar(3)"></a>
							<a href="javascript:void(0)" onclick="halfStar(4)"></a>
						</li>
						<li>
							<a href="javascript:void(0)" onclick="halfStar(5)"></a>
							<a href="javascript:void(0)" onclick="halfStar(6)"></a>
						</li>
						<li>
							<a href="javascript:void(0)" onclick="halfStar(7)"></a>
							<a href="javascript:void(0)" onclick="halfStar(8)"></a>
						</li>
						<li>
							<a href="javascript:void(0)" onclick="halfStar(9)"></a>
							<a href="javascript:void(0)" onclick="halfStar(10)"></a>
						</li>
        			</ul>
    			</div>
    			<div class="sure">
					<button id="sure">confirm</button>
					<button id="cancel">cancel</button>
    			</div>
			</div>
		</section>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="script.js"></script>
		<?php include("footer.php"); ?>
	
		