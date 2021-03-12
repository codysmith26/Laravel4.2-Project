@extends('layouts.base')
@section('body')
<style>
</style>

<!-- START MAIN CONTENT -->
<div id="competitionBanner">
	<div class="cd-header">
    	<img src="{{ asset('/images/skin/october-header.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="medium-6 columns">
	<h3>Planning some Home Improvements? Apply for a loan today and you could win £250 to spend at B&Q!</h3>
			<p>Qi Finance is giving away a huge £250 gift card to spend at B&Q!</p>
			<p>To enter, simply apply for a loan today on our <a href="http://www.qifinance.com/personal-loans">Personal Loans Page</a></p>
			<p>Competition open until Friday 31st October 2014. </p>
			<p>Date: 2/10/14 - 31/10/14</p>
			<p><strong>Good Luck!</strong></p>
			<a href="{{ asset('/downloads/October-Competition.pdf') }}" target="_blank" class="button small radius">Terms and Conditions</a>
			<a href="/personal-loans" class="button small radius">Apply for a loan now</a>
    </div>
    <div class="medium-6 columns">
    	<div class="panel radius" id="mainComp">
			<img src="{{ asset('/images/skin/october-competition-page.jpg') }}">
    	</div>
	</div>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop


