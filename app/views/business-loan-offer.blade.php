@extends('layouts.base')
@section('body')
<!-- START MAIN CONTENT -->
<div id="competitionBanner">
	<div class="row">
    	<img src="{{ asset('/images/skin/competition-banner.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="medium-4 columns">
	<h2>Qi Finance Offers</h2>
    </div>
    <div class="medium-8 columns">
    	<div class="panel radius" id="mainComp">
			<h3>Get the First £5000 Interest Free with Business Loans from Qi Finance!</h3>
			<img src="{{ asset('/images/offers/business-loan-offer-mar-2014.jpg') }}">
			<p>Here at Qi Finance we’re passionate about supporting our local enterprise. A low cost loan could give you the boost you need to grow your business!</p>
            <p>We love working with you and to say thanks for your support we’re offering our partners the first £5000 interest free when you take out a business loan with Qi Finance.</p>
            <p>We’re only offering this exclusive deal to our trusted and valued Quidsin partners so apply today to take advantage or call us on 01534 634001 for more information.</p>
            <a href="http://www.quidsinfinance.com/business-loans" class="button small radius">Apply online now</a>
			<div class="smallPrint">
				<p><span style="font-size:12px;font-weight:700;line-height:15px;">T&C's</span><br>Loans must be for a minimum of £10,000 to qualify<br>
                Loans to have a minimum repayment term of 18 months<br>
                Approval of business loans is at the discretion of Qi Finance, all loans are subject to status<br>
                Qi Finance reserves the right to withdraw the offer at any time</p>
			</div>
    	</div>
	</div>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
