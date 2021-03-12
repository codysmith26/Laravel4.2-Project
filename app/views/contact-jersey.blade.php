@extends('layouts.base')
@section('body')
<!-- START MAIN CONTENT -->
<div class="row" id="">
	<section class="medium-4 columns" id="faqIntro">
		<h2>Contact Us</h2>
	</section>
	<section class="medium-8 columns" id="faqs">
		<h2 class="right"><strong>Call: 01534 634 001</strong></h2>
	</section>
	<hr>
</div>

<div class="row" id="contactMap">
	<section class="medium-12 columns">
		<div class="panel radius" id="mapHeadquarters">
			<div class="row">
				<div class="medium-12 columns">
					<div class="row">
						<div class="small-12 large-8 columns">
							<h3>Qi Finance: Jersey</h3>
						</div>
						<div class="small-12 large-4 columns">
							<h5 class="right mapBuffer">Other Maps:&nbsp;&nbsp;<a href="{{ url('/contact-guernsey') }}">Guernsey</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{ url('/contact-iom') }}">Isle of Man</a></h5>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="medium-4 columns">
							<div class="row collapse">
								<div class="small-2 columns">
									<div id="postJersey" class="hatch">
										<img src="{{ asset('/images/skin/post-quidsin.jpg') }}">
									</div>
								</div>
								<div class="small-10 columns">
									<p><strong>Post:</strong><br>1/3 La Colomberie<br>St Helier<br>Jersey<br>JE2 4QB</p>
								</div>
								<hr>
							</div>
							<div class="row collapse">
								<div class="small-2 columns">
									<div id="emailJersey" class="hatch">
										<img src="{{ asset('/images/skin/email-quidsin.jpg') }}">
									</div>
								</div>
								<div class="small-10 columns">
									<p><strong>Email:</strong><br>finance@qifinance.com</p>
								</div>
							</div>
						</div>
						<div class="medium-8 columns">
							<head>
								<style type="text/css">
								     #map-canvas { height: 350px; width:100%; margin:0 auto;}
								</style>
							</head>
							<body>
								<div id="map-canvas"/>

								<script type="text/javascript"
									src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp-Cz8yfpQ1xP6WwGbgXxixGiXgOAffmY&sensor=false">
								</script>
								<script>
									'use strict';

								    document.addEventListener('DOMContentLoaded', drawMapJersey);

									var map;
									var jerseyLatLng = new google.maps.LatLng(49.18348, -2.10272);
									var image = '/images/skin/quidsin-pin.png';
									var marker;

									function drawMapJersey() {

										var mapOptions = {
										    zoom: 17,
										    center: jerseyLatLng
										  };

										  map = new google.maps.Map(document.getElementById('map-canvas'),
										          mapOptions);

										  marker = new google.maps.Marker({
										    map:map,
										    draggable:true,
											icon: image,
										    animation: google.maps.Animation.DROP,
										    position: jerseyLatLng
										  });
										  google.maps.event.addListener(marker, 'click', toggleBounce);
										}

										function toggleBounce() {

										  if (marker.getAnimation() != null) {
										    marker.setAnimation(null);
										  } else {
										    marker.setAnimation(google.maps.Animation.BOUNCE);
										  }
										}
								</script>
							</body>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="row"><br><hr></div>

<!-- END MAIN CONTENT -->
@stop
