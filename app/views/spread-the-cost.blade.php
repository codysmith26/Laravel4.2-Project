@extends('layouts.base')
@section('body')
<div id="spreadBanner">
	<div class="row">
    	<img src="{{ asset('/images/skin/spread-the-cost-banner.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="small-12 medium-6 medium-push-6 columns">
	@include('layouts.spread-the-cost-form')
    </div>
    <div class="hide-for-small medium-1 medium-push-5 columns">
    </div>
    <div class="small-12 medium-5 medium-pull-6 columns">
	<h2>Spread the Cost with Qi Finance<br></h2>
	<p>You’ve found the perfect car, holiday or planned some upgrades to your home but you’re not sure how you’ll pay - Qi Finance can help spread the cost over affordable monthly payments which work for you.</p>
  <p>All you need to do is fill out our simple online form and we can make your dream a reality. Once your form is completed our finance team will be on hand to guide you through the process and make sure you get the results you want.</p>
  <p>You can spread the cost for just about anything, below are just a few of the reasons people choose to spread the cost with us:</p>
  <ul> 
    <li>New Car</li>
    <li>Home Improvements</li>
    <li>Furniture</li>
    <li>Holidays</li>
    <li>Dental Bills</li>
    <li>Medical Bills</li>
    <li>Veterinary Bills</li>
    <li>Weddings</li>
  </ul>
  <p>Read our guide to Spreading the Cost here or give us a call on 01534 634001 if you have any questions – we’d love to hear from you!</p>
		<div id="personalAccordion">
			<dl class="accordion" data-accordion>
				<dd>
				    <a href="#panel8">What happens after I’ve applied to Qi Finance to Spread the Cost?</a>
				    <div id="panel8" class="content">
						<p>Once we receive your application, we will give you a call and invite you in for a chat. This gives you the chance to bring in your paperwork (ID, proof of address and bank statements) and also ask any questions you might have. If you have finance elsewhere, we may ask you to give us some info about other loans or credit cards you have, like a recent statement for example. If you can’t make it in we may be able to do this part over email. To speed things up it’s great if you can get all your documents ready to pop into us or send over via email. The quicker we get these the quicker we can get the funds to you.</p>
				    </div>
				</dd>


				<dd>
					<a href="#panel9">When I apply to Spread the Cost what checks do you make?</a>
				    <div id="panel9" class="content">
					      <p>We’ll undertake a credit search firstly, this looks at your current and past financial status, including people with whom you have financial links like a spouse or partner. These financial details will be taken into account whenever you apply for credit to Spread the Cost. We also check your ID and will often need to check bank statements. Once you’ve sent your application in we’ll let you know exactly what you need to provide.</p>
				    </div>
				</dd>
				<dd>
					<a href="#panel12">What happens if I’m late with or miss a payment?</a>
				    <div id="panel12" class="content">
					      <p>Qi Finance wants to work with you to make sure your Spread the Cost agreement works for you. We encourage good behaviour such as repaying on time through rewards and incentives. If you’re struggling, rather than simply charging late payment fees we offer a range of options to help get you back on track.*</p>
				    </div>
				</dd>
				<dd>
				    <a href="#panel13">Phone a Friend</a>
				    <div id="panel13" class="content">
						<p>The first step if you’re struggling is to give our friendly team a call - we’re here to help you find a sensible solution. The sooner you call us the more options we’ll be able to give you, remember good borrowing behaviour isn’t just repaying on time, it’s getting in touch if there’s a problem.</p>
				    </div>
				</dd>
				<dd>
				    <a href="#panel13">Freeze Repayments</a>
				    <div id="panel13" class="content">
						<p>You’ll have the option to freeze payments on your agreement for a month – giving you the breathing space to get your finances back in shape.</p>
				    </div>
				</dd>
				<dd>
				    <a href="#panel14">Remember...</a>
				    <div id="panel14" class="content">
						<p>there is no such thing as a daft question, so if you want to ask anything else, please just give us a call on 01534 634001 or drop in for a chat.</p>
				    </div>
				</dd>
			</dl>

		</div>
    </div>
</div>
<div class="row"><br><hr></div>
@stop
