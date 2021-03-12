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
	<h2>Competition</h2>
    </div>
    <div class="medium-8 columns">
    	<div class="panel radius" id="mainComp">
			<h3>Fancy Feeding the Family for Free?</h3>
			<img src="{{ asset('/images/competitions/ms-comp-larger.jpg') }}">
			<p>Qi Finance are Giving away &pound;500 of M&S Vouchers!</p>
            <p>Either apply for a low cost loan <a href="/">here</a> or <a href="https://www.facebook.com/quidsinuk">like and share on facebook</a> and you and your family could be feasting for free! Qi Finance are giving away £500 of M&S vouchers to one lucky winner.</p>
            <p>Qi Finance offers a low cost lending service with rewards. Whatever the reason, whether you need a hand to clear your debt, fancy a holiday or new car, we’re here to help and make the experience rewarding in every way!</p>
            <p>You have to be in it to win it!</p>
            <a href="/" class="button small radius">Apply online now</a>
			<div class="smallPrint">
				<p><span style="font-size:12px;font-weight:700;line-height:15px;">T&C's</span><br>Prize is £500 worth of Marks and Spencer vouchers.
Entries will be accepted between 20th February 2014 and 31st March 2014.
To enter you must have successfully completed a genuine loan application on the Qifinance.com website or have liked and shared the Facebook competition post.
Alternatively, entrants will be accepted by providing your name, email address and contact phone number in writing to Quidsin Finance, 1-3 La Colomberie, St Helier, Jersey, JE2 4QB.
Competition is limited to one entry per applicant.
The competition is open to residents of Jersey, Guernsey and Isle of Man only.
The winner will be selected at random from all successful entrants across Jersey, Guernsey and Isle of Man.
The winner will be contacted by email, Facebook message, or phone on 31st March 2014.
The prize is non-transferable.</p>
			</div>
    	</div>
	</div>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
