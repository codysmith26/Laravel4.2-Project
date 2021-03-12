@extends('layouts.base')
@section('body')
<?php
Mail::send('emails.mortgage-enquiry', $_POST, function($message)
	{
	    $message->to('finance@qifinance.com')
		    ->subject('You have a new mortgage enquiry!');
	});

Mail::send('emails.mortgage-applicant', $_POST, function($message)
	{
	    $message->to($_POST['email'])
		    ->subject('Thank you for your application');
	});
?>
<!-- START MAIN CONTENT -->
<div class="row">
    <div class="medium-3 columns"><p>&nbsp;</p></div>
    <div class="medium-6 columns" id="successMessage">
		<img src="{{ asset('/images/skin/mortgage-image.jpg') }}">
    	<h2>Speak Soon!</h2>
    	<p>Thank you for your application, one of our Mortgage advisors will<br> contact you shortly using your primary contact information.</p>
	</div>
    <div class="medium-3 columns"><p>&nbsp;</p></div>
</div>
<!-- END MAIN CONTENT -->
@stop
