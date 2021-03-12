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

<div class="row">
	<section class="medium-4 columns">
		<div class="panel radius" id="contactJersey">
			<h3>Jersey</h3>
			<hr>
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
	</section>
	<section class="medium-4 columns">
		<div class="panel radius" id="contactGuernsey">
			<h3>Guernsey</h3>
			<hr>
			<div class="row collapse">
				<div class="small-2 columns">
					<div id="postGuernsey" class="hatch">
						<img src="{{ asset('/images/skin/post-quidsin.jpg') }}">
					</div>
				</div>
				<div class="small-10 columns">
					<p><strong>Post:</strong><br>40 Commercial Arcade,<br>St Peter Port,<br>Guernsey,<br>GY1 1LB</p>
				</div>
				<hr>
			</div>
			<div class="row collapse">
				<div class="small-2 columns">
					<div id="emailGuernsey" class="hatch">
						<img src="{{ asset('/images/skin/email-quidsin.jpg') }}">
					</div>
				</div>
				<div class="small-10 columns">
					<p><strong>Email:</strong><br>finance@qifinance.com</p>
				</div>
			</div>
		</div>
	</section>
	<section class="medium-4 columns">
		<div class="panel radius" id="contactIsleOfMan">
			<h3>Isle of Man</h3>
			<hr>
			<div class="row collapse">
				<div class="small-2 columns">
					<div id="postIom" class="hatch">
						<img src="{{ asset('/images/skin/post-quidsin.jpg') }}">
					</div>
				</div>
				<div class="small-10 columns">
					<p><strong>Post:</strong><br>30 Athol Street<br>Douglas<br>Isle of Man<br>IM1 1JB</p>
				</div>
				<hr>
			</div>
			<div class="row collapse">
				<div class="small-2 columns">
					<div id="emailIom" class="hatch">
						<img src="{{ asset('/images/skin/email-quidsin.jpg') }}">
					</div>
				</div>
				<div class="small-10 columns">
					<p><strong>Email:</strong><br>finance@qifinance.com</p>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="row" id="contactMap">
	<section class="medium-12 columns">
		<div class="panel radius" id="mapHeadquarters">
			<div class="row">
				<div class="medium-12 columns">
					<div class="row">
						<div class="small-12 large-7 columns">
							<h3>Qi Finance: Isle of Man</h3>
						</div>
						<div class="small-12 large-5 columns">
<h5 class="mapBuffer">Other Maps:&nbsp;&nbsp;<a href="{{ url('/contact') }}">Jersey</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{ url('/contact-guernsey') }}">Guernsey</a></h5>
						</div>
					</div>
					<hr>
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

								    document.addEventListener('DOMContentLoaded', drawMapiom);

									var map;
									var iomLatLng = new google.maps.LatLng(54.1489953, -4.4828543);
									var image = '/images/skin/quidsin-pin.png';
									var marker;

									function drawMapiom() {

										var mapOptions = {
										    zoom: 17,
										    center: iomLatLng
										  };

										  map = new google.maps.Map(document.getElementById('map-canvas'),
										          mapOptions);

										  marker = new google.maps.Marker({
										    map:map,
										    draggable:true,
											icon: image,
										    animation: google.maps.Animation.DROP,
										    position: iomLatLng
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
	</section>
</div>


<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
