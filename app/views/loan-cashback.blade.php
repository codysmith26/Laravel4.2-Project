@extends('layouts.base')
@section('body')
<!-- START MAIN CONTENT -->
<div id="personalBanner">
	<div class="row">
    	<img src="{{ asset('/images/skin/personal-finance-banner.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="small-12 medium-6 medium-push-6 columns">
	@include('layouts.loan-cashback-form')
    </div>
    <div class="hide-for-small medium-1 medium-push-5 columns">
    </div>
    <div class="small-12 medium-5 medium-pull-6 columns">
	<h2>Let your Loan Pay you with Qi Finance Cash Back!</h2>
	<h4>Have you got an existing loan from a local lender?</h4>
	<p>Just enter the details of your debt in the form to the right and we’ll pay you cash back at the end of your loan.</p>
	<p>It doesn't matter who you've taken your loan out with, Qi Finance will still reward you with cash back – all you need to do is make sure payments are on time and you repay your loan in full. This offer is only around for a short time so don’t delay… let your loan earn you cash today!</p>
	<hr>
	<p style="font-size:12px;">Terms and Conditions:</p>
	<ul style="font-size:12px;">
	 <li>Cash back will be received at the end of the loan term once the loan is fully repaid.</li>
	 <li>Qi Finance will run a credit check to assess whether the loan repayments have been made on time. If there are late repayments or if the loan is defaulted Qi Finance will void cash back.</li>
     <li>Cash back will be given in the form of Quidsin Credit, which can be transferred to Cash on request.</li>
     <li>Cash back value will be 0.5% of the total loan value. For example if a £5000 loan is repaid in full and on time you will receive £25 cash back.</li>
     <li>Minimum loan value to qualify for cash back is £2000.</li>
     <li>Mortgages will not be included.</li>
     <li>Minimum term for repayment is 12 months.</li>
     <li>You must contact Qi Finance within 2 months of final loan repayment for cashback to be valid</li>
     <li>Please contact Qi Finance on 01534 634001 once your loan has been repaid to claim your cash back.</li>
     <li>Qi Finance will require confirmation that loan has been repaid in full.</li>
	</ul>

    </div>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
