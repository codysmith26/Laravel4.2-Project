@extends('layouts.base')
@section('body')
<?php
Mail::send('emails.personal-enquiry', $_POST, function($message)
	{
	    $message->to('finance@qifinance.com')
		    ->subject('You have a new personal loan enquiry!');
	});

Mail::send('emails.personal-applicant', $_POST, function($message)
	{
	    $message->to($_POST['email'])
		    ->subject('Your Qi Finance Loan application is being processed!');
	});
?>


<!-- START MAIN CONTENT -->
<div class="row">
    <div class="medium-3 columns"><p>&nbsp;</p></div>
    <div class="medium-6 columns" id="successMessage">
		<img src="{{ asset('/images/skin/personal-finance-circle-image.jpg') }}">
    	<h2>SMILE!</h2>
    	<h3>You're awesome and have successfully completed your application with Qi Finance! <br /><br />A member of the Finance Team will in touch with you very shortly.   </h3>
	</div>
    <div class="medium-3 columns"><p>&nbsp;</p></div>
</div>
<!-- END MAIN CONTENT -->
@stop
