@extends('layouts.base')
@section('body')
<style>
</style>

<!-- START MAIN CONTENT -->
<div id="competitionBanner">
	<div class="cd-header">
    	<img src="{{ asset('/images/skin/november-header.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="medium-6 columns">
	<h3>Don't sweat! Drive away with a £50 free fuel voucher today!</h3>
			<p>Every customer that signs up for a car loan by Thursday 13th November will receive a £50 petrol voucher! </p>
			<p>Simply apply for a<a href="http://www.qifinance.com/personal-loans"> car loan today!</a></p>
			<p>Open until Thursday 13th November 2014. </p>
			<p>Date: 31/10/14 - 13/11/14</p>
			<p><strong>Good Luck!</strong></p>
			<a href="{{ asset('/downloads/november-rules.pdf') }}" target="_blank" class="button small radius">Terms and Conditions</a>
			<a href="/personal-loans" class="button small radius">Apply for a loan now</a>
    </div>
    <div class="medium-6 columns">
    	<div class="panel radius" id="mainComp">
			<img src="{{ asset('/images/skin/november-competition-page.jpg') }}">
    	</div>
	</div>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop


