@extends('layouts.base')
@section('body')
<!-- START MAIN CONTENT -->
<div class="row">
	<section class="medium-4 columns" id="faqIntro">
		<h2>Qi Finance testimonials.</h2>
	</section>
	<section class="medium-8 columns">
			<div class="panel radius testimonial">
				<img src="{{ asset('/images/skin/open-quote.gif') }}">
				<div class="panel radius">
					<p>I needed to borrow £5,000 to help pay for my new kitchen. I knew about Qi Finance through their website and when I saw that they were offering a finance service, I had to take a look. I was so pleased by the efficiency of the company and how quickly I got the funds. Thanks to Qi Finance, I now have a sparkling new kitchen and I'm a very happy person!</p>
				</div>
				<img class="right" src="{{ asset('/images/skin/close-quote.gif') }}">
				<h5>Jackie</h5>
			</div>
			<div class="panel radius testimonial">
				<img src="{{ asset('/images/skin/open-quote.gif') }}">
				<div class="panel radius">
					<p>Thank you to Qi Finance for financing my new car! I was a brand new customer as I hadn't used their website before, but it was still the cheapest loan I could find. It was so quick and easy to organise and the staff were incredibly helpful. It's great to be able to access smaller amounts of money without paying through the nose. I'll definitely be having a look at their daily deals now too!</p>
				</div>
				<img class="right" src="{{ asset('/images/skin/close-quote.gif') }}">
				<h5>Phil</h5>
			</div>
			<div class="panel radius testimonial">
				<img src="{{ asset('/images/skin/open-quote.gif') }}">
				<div class="panel radius">
					<p>I've been using Quidsin regularly for the last year. I love getting their emails and regularly buy their restaurant and spa deals. That was why I used Qi Finance to pay for my honeymoon to the Maldives this year. I knew the holiday was going to be expensive but thankfully, by using the Qi Finance Loan, I didn't have to worry about sky high interest rates. It's a really cost effective way of borrowing money in a time when applying for finance can appear daunting - What a great way to reward loyal customers!</p>
				</div>
				<img class="right" src="{{ asset('/images/skin/close-quote.gif') }}">
				<h5>Gemma</h5>
			</div>
		</section>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
