@extends('layouts.base')
@section('body')
<?php
Mail::send('emails.loan-cashback-enquiry', $_POST, function($message)
	{
	    $message->to('cashback@quidsin.com')
		    ->subject('You have a new Loan Cashback Enquiry!');
	});

Mail::send('emails.loan-cashback-applicant', $_POST, function($message)
	{
	    $message->to($_POST['email'])
		    ->subject('Your Qi Loan Cashback confirmation!');
	});
?>
<div class="row">
    <div class="medium-3 columns"><p>&nbsp;</p></div>
    <div class="medium-6 columns" id="successMessage">
		<img src="{{ asset('/images/skin/personal-finance-image.jpg') }}">
    	<p>Thanks for applying to Qi Finance for cash back - check your inbox for more information!</p>
	</div>
    <div class="medium-3 columns"><p>&nbsp;</p></div>
</div>
<!-- END MAIN CONTENT -->
@stop
