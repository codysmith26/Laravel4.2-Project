@extends('layouts.base')
@section('body')
<style>
</style>
<!-- START MAIN CONTENT -->
<div id="competitionBanner">
	<div class="cd-header">
    	<img src="{{ asset('/images/skin/cd-header.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="medium-8 columns">
	<h3>Introducing Jersey's First Cash Dash</h3>
			<p>Jersey residents will have the chance to scoop £1000 in a unique Island-wide competition that will launch on Monday 1st September. The Qi Finance Cash Dash will see Islanders win cash prizes every day for the entire month of September.</p>
            <p>Special envelopes will be hidden around the Island and clues will be released to guide members of the public to the stash. The first person to discover the envelope will be the winner; if the envelope is left undiscovered the money will instead be donated to Qi Finance’s chosen charity RNLI Jersey.</p>
			<p>Every day from 1st to 30th September a clue will be released on the website: <a href="{{ asset('https://www.qifinance.com') }}" target="_blank">www.qifinance.com</a> and Facebook: <a href="{{ asset('https://www.facebook.com/qifinance') }}" target="_blank">www.facebook.com/qifinance</a> at 12noon. The public will then have one hour to find the hidden cash. The competition mascot ‘Cash Dash Barry’ will be on site to congratulate the winner. People will be able to follow Cash Dash Barry’s tweets as the competition unfolds and maybe even get some helpful hints along the way <a href="{{ asset('https://www.twitter.com/cashdashbarry') }}" target="_blank">@cashdashbarry!</a></p>
			<p>The initiative, which is a first for Jersey, has been organised by local finance providers Qi Finance. The company provides personal and business loans to Jersey residents and they hope the competition will help to distinguish them as innovative leaders in the market.</p>
			<p>Kimberley Joshua, Director of Sales, Qi Group, says:</p>
			<p>‘Qi Finance is no ordinary finance provider and therefore we wanted a competition that reflected our pioneering and unique approach. At Qi Finance we are dedicated to rewarding responsible borrowers and the Qi Finance Cash Dash is our opportunity to reward our entire community. We really hope everyone will get involved and enjoy deciphering the clues. People could win anything from £50 up to £1000 every day for a month! </p>
			<p>We are also pleased to be supporting RNLI Jersey through this competition and hope that a good number of our envelopes end up with the charity. They do such selfless work as volunteers and we are proud to be raising funds for them this year whilst doing something fun to engage our local community.’</p>
			<p>Competition Terms and Conditions are available online at <a href="{{ asset('https://www.qifinance.com') }}" target="_blank">www.qifinance.com</a></p>
			<p><strong>For more information, photo opportunities or interviews please contact Natasha Egre or Ed Le Gallais, The Refinery PR, Tel: 01534 720200, E: <a href="{{ asset('mailto:natasha@getrefined.com') }}" target="_blank">Natasha@getrefined.com</a> or <a href="{{ asset('mailto:ed@getrefined.com') }}" target="_blank">ed@getrefined.com</a></strong></p>
    </div>
    <div class="medium-4 columns">
    	<div class="panel radius" id="mainComp">
			<img src="{{ asset('/images/skin/cash-dash-team.jpg') }}">
    	</div>
	</div>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
