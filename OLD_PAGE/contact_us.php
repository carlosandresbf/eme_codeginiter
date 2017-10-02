<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
	<title>Suburb | Contact Us</title>
</head>

<body class="page" id="page-top">
	<!-- Preloader -->
	<div id="page-preloader">
		<div class="loader-ring"></div>
		<div class="loader-ring2"></div>
	</div>
	<!-- End Preloader -->

	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Start Header -->
		<div id="header"></div>
		<!-- End Header -->

		<!-- Page Content -->
		<div id="page-content">
			<img src="assets/img/021.jpg" class="banner">
			<div class="container">
				<div class="row">
					<div class="contact-form">
						<h2>Estamos aquí para asesorate.</h2>
						<h6>Lunes a Viernes horario regular</h6>
						<form id="form-submit" class="form-submit" action="thank_you_page.html">
							<div class="col-md-6">
								<div class="input-group">
									<label>Tu nombre:</label>
									<input id="input-name" type="text" class="form-control"  required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<label>Correo electroníco:</label>
									<input id="input-email" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Asunto:</label>
									<input id="input-subject" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-group">
									<label>Mensaje:</label>
									<textarea id="text-area-contact" rows="8" cols="45" class="form-control"></textarea>
								</div>
							</div>
							<div class="submit">
								<span class="ffs-bs"><button type="submit" class="btn btn-large btn-primary" style="color:#fff;">Enviar mensaje</button></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end Page Content -->
		
		<!-- Start Footer -->
    <div id="footer"></div>
    <!-- End Footer -->
	</div>

	<!-- Modal login, register, custom gallery -->
	<div id="login-modal-open"></div>
	<div id="register-modal-open"></div>
	<!-- End Modal login, register, custom gallery -->

	<script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places"></script>
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
	<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/selectize.min.js"></script>

	<script type="text/javascript" src="assets/js/custom-map.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!--[if gt IE 8]>
	<script type="text/javascript" src="assets/js/ie.js"></script>
	<![endif]-->

	<script>
	//Google map for contact us page
	$(document).ready(function() {
		function initialize() {
			var latlng = {lat: 40.733355, lng: -73.982327};
			var mapOptions = {
				center: latlng,
				zoom: 14
			};
			var map = new google.maps.Map(document.getElementById('map2'),
				mapOptions);
			var marker = new MarkerWithLabel({
				position: latlng,
				map: map,
				labelContent: '<div class="marker-loaded"><div class="map-marker"><img src="assets/img/f.svg" alt="" /></div></div>',
				labelClass: "marker-style"
			});
			var contentString =  	'<div id="mapinfo">'+
														'<h4 class="firstHeading">Company Name</h4>'+
														'<h6>525 W 28th St, New York, NY 10001</h6>' +
														'<div><i class="fa fa-phone"></i><a href="tel:+48 192 28383746">+48 192 28383746</a></div>' +
														'<div><i class="fa fa-mobile"></i><a href="tel:+48 192 28383746">+48 192 28383746</a></div>' +
														'<p id="at">@</p>'+
														'<div class="contactblock"><a href="mailto:info@suburb.com">info@suburb.com</a></div>' +
														'</div>';

			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			marker.addListener('click', function() {
				infowindow.open(map, marker);
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);  
	});
	</script>
</body>
</html>