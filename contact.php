<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=0"/>
	<title>OTMe</title>
	<link href="//fnt.webink.com/wfs/webink.css/?project=54821E9A-9887-4A01-AB72-7DCE83654BE0&fonts=70F8A7D9-BDFF-D029-E465-E7FC928A5994:f=Theinhardt-MediumIta,9773ABFB-EF93-0C1B-AE14-35A7DD420754:f=Theinhardt-UltraLight,5F278FF9-E581-1824-0F92-F6D72B137A6A:f=Theinhardt-HeavyIta,BFE4A44E-8D1D-66D8-BBF8-42F52771F0D3:f=Theinhardt-ThinIta,8B459781-89CC-B7EA-6A87-7EC561303F45:f=Theinhardt-BoldIta,864889ED-8E73-7E19-00E2-BBE0F997E58C:f=Theinhardt-Thin,BA766C3D-9F83-4950-AFCD-AD9F2BF5CEAB:f=Theinhardt-Regular,F77BBDE3-5270-5846-90AD-5529C2FFDA57:f=Theinhardt-Medium,DC84A178-A66C-DB8D-5140-7E5BF64AB28F:f=Theinhardt-RegularIta,008579D7-00D8-1E34-1306-843EC6BC82EA:f=Theinhardt-Light,A7E06AF3-FA3A-4B28-764F-AC325B3529DA:f=Theinhardt-Heavy,82DA4627-8191-9CE4-706C-58F3C2615A95:f=Theinhardt-Bold,BF522E13-B921-2C59-5FD3-9D3C689FC32B:f=Theinhardt-LightIta" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/style.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/head.min.js" data-headjs-load="js/init.js"></script>
	<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXeE2LaXA4Ih7pVVbv7Ni4YNk4sX1B2Mk&sensor=FALSE">
	</script>
</head>
<body>
	<script>
	head.ready(function () {
		head.load("js/basic.js");
	});
	</script>

	<div><!-- Off Canvas Wrap -->

		<div class="wrapper"><!-- Wrapper -->

			<?php include("header.php") ?>

			<div class="page-header left"><!-- Page Title & Header -->
				<div class="small-10 medium-6 columns">
					<h1 class="left">CONTACT</h1>
				</div>
				<?php include("search.php") ?><!-- Search Bar -->
			</div><!-- Page Header End -->


			<div class="row full-width map-container"><!-- Row -->
				
				
			</div>


			<div class="row full-width map-container">

				<div class="contact-info">
					<div class="column-header">
					<h1>Chat to Us</h1>
				</div>
				<div class="address">
					<h4>+44 (0)20 3031 6000</h4><br /><br />
45–51 Whitfield St<br />
London W1T 4HD<br />United Kingdom<br /><br />
<a href="" target="_blank">info@otmentertain.com</a>
<a href="" target="_blank">jobs@otmentertain.com</a>
				</div>

				</div><!-- Lead Article End -->
				<div class="flex-video">
					<div class="column-header">
					<h1>Thoughts &amp; News</h1>
				</div>
					<div id="map-canvas" style="width: 100%; height: 400px;">

					</div>
				</div>
			</div>

			<!-- Blog Listing Quadrant to List -->
		</div><!-- Wrapper End -->

		<?php include("footer.php"); ?>

		<?php include("mobile-menu.php") ?>
	</div><!-- Off Canvas Wrap End-->
	<script>
	$( document ).ready(function() {
		var myLatlng = new google.maps.LatLng(51.5206409, -0.1358944);
		var mapOptions = {
			center: myLatlng,
			zoom: 17,
			disableDefaultUI: true
		}

		var map = new google.maps.Map(document.getElementById("map-canvas"),
			mapOptions);

		function addMarker() {
			var marker = new google.maps.Marker({
				position: myLatlng,
				animation: google.maps.Animation.DROP,
				map: map,
				title:"OTMe"
			});
		}

		setTimeout(function() {
			addMarker();
		}, 3000);

	var center;
	function calculateCenter() {
		center = map.getCenter();
	}
	google.maps.event.addDomListener(map, 'idle', function() {
		calculateCenter();
	});
	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter(center);
	});
});
	</script>

</body>
</html>
