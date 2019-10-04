var slider = document.getElementById("myRange");
var output = document.getElementById("sliderDist");
var sliderValue = slider.value;
output.innerHTML = slider.value;
// var chosenresult = clicked;
// console.log(chosenresult);

slider.oninput = function() {
  output.innerHTML = this.value;
  sliderValue=this.value;
}


//GPS mode to get the current location of the user
Location();
var latitude;
var longitude;
function Location(){   
	if(navigator.geolocation)   { //check the browser whether support H5Geolocation API
		navigator.geolocation.getCurrentPosition(showmap,error);	
	}
	
	else{
		alert(" the browser doesn't support H5Geolocation API");
	}
	
}

	
	function showmap(position){       
		var cords = position.coords;		//get the coords in the GPS which is a vector containing lots of attributes
		latitude = cords.latitude;      //get the lattitude
		longitude = cords.longitude;    //get the longitude
		$("#userAddress").append(			//append the longtitude in <userAddress> tag
			$('<section class="userAddr">').append(
				$('<h2>').text(longitude),
				$('<h2>').text(latitude)
			)
		);
	}

	
	function error(error){           
		var err = error.code;
		switch(err){
			case 1:alert("User declined!");
			case 2:alert("Can not find location info!");
			case 3:alert("Time out!");
		}
	}
	
	
	//calculate the distacne between two points using longitude and lattitude
	function Rad(d){
		return d * Math.PI / 180.0;
	 }
	
	 function GetDistance(lat1,lng1,lat2,lng2){
		 var radLat1 = Rad(lat1);
		 var radLat2 = Rad(lat2);
		 var a = radLat1 - radLat2;
		 var  b = Rad(lng1) - Rad(lng2);
		 var s = 2 * Math.asin(Math.sqrt(Math.pow(Math.sin(a/2),2) +
		 Math.cos(radLat1)*Math.cos(radLat2)*Math.pow(Math.sin(b/2),2)));
		 s = s *6378.137 ;// EARTH_RADIUS;
		 s = Math.round(s * 10000) / 10000; 
		 //s=s.toFixed(4);
		 return s;
	 }


function iterateRecords(data) {

	console.log(data);

	$.each(data.result.records, function(recordKey, recordValue) {

		var recordTitle = recordValue["Branch Name"];
		var recordLon = recordValue["Lon"];
		var recordLat = recordValue["Lat"];
		var openingHoursRegular = recordValue["Opening Hours Friday"];
		var openingHoursSat = recordValue["Opening Hours Saturday"];
		var openingHoursSun = recordValue["Opening Hours Sunday"];
		var recordDescription = recordValue["AddressLocality"];
		var dis = GetDistance(recordLat,recordLon,latitude,longitude);

		if(recordTitle) {
			if(154> parseFloat(recordLon)&&parseFloat(recordLon)>152.5 && -26.5>parseFloat(recordLat)&&parseFloat(recordLon)>-28){//distance:185614.2345889979 metres
				$("#records").append(
					$('<section class="record">').append(
						$('<a href = "library.html">').append(
							// $('<img src="'+recordTitle+'.png">'),
							$('<img src="logo.png" class="libCover">'),
							$('<h2>').text(recordTitle),
							// $('<h3>').text(recordLon),
							// $('<h3>').text(recordLat),
							$('<h1>').text(dis+'KM'), //distance from user's location to the library (km)
							// $('<h3>').text(openingHoursRegular),
							// $('<h3>').text(openingHoursSat),
							// $('<h3>').text(openingHoursSun),
							$('<p>').text(recordDescription)
						)
					)
				);
			}
		}

	});

	$("#filter-text").keyup(function() {
 
		var searchTerm = $(this).val();
		console.log(searchTerm);
	
		$(".record").hide();
		$(".record:contains('" + searchTerm + "')").show();
	
		$("#filter-count strong").text($(".record:visible").length);
	
	});

	
	$("#myRange").oninput(function() {
	
		$(".record").hide();
		if(this.dis<sliderValue){
			$(".record").show();// how to  select the records where the attr(dis) are greater than slider.value?
		}
	});

}



$(document).ready(function() {

	var data = {
		resource_id: "6c39fd55-f038-43ec-930f-b3c019e74199",
		
	}

	$.ajax({
		url: "https://data.qld.gov.au/api/3/action/datastore_search",
		data: data,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data) {
			iterateRecords(data);
		}
	});
	$.ajax({
		url: "https://data.qld.gov.au/api/3/action/datastore_search?offset=100",
		data: data,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data) {
			iterateRecords(data);
		}
	});
	$.ajax({
		url: "https://data.qld.gov.au/api/3/action/datastore_search?offset=200",
		data: data,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data) {
			iterateRecords(data);
		}
	});
	$.ajax({
		url: "https://data.qld.gov.au/api/3/action/datastore_search?offset=300",
		data: data,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data) {
			iterateRecords(data);
		}
	});

});