@extends('layouts.base')
@section('body')
<?php
Mail::send('emails.spread-enquiry', $_POST, function($message)
	{
	    $message->to('finance@qifinance.com')
		    ->subject('You have a new spread the cost enquiry!');
	});

Mail::send('emails.spread-applicant', $_POST, function($message)
	{
	    $message->to($_POST['email'])
		    ->subject('Your Qi Finance Loan spread the cost application is being processed!');
	});
?>


<!-- START MAIN CONTENT -->
<div class="row">
    <div class="medium-3 columns"><p>&nbsp;</p></div>
    <div class="medium-6 columns" id="successMessage">
		<img src="{{ asset('/images/skin/spread-the-cost-image.jpg') }}">
    	<h2>Speak Soon!</h2>
    	<p>Your email application is being processed please<br> check your inbox for the next steps.</p>
	</div>
    <div class="medium-3 columns"><p>&nbsp;</p></div>
</div>
<!-- END MAIN CONTENT -->
@stop
