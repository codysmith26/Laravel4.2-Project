@extends('layouts.base')
@section('body')
<!-- START MAIN CONTENT -->
<div id="businessBanner">
	<div class="row">
    	<img src="{{ asset('/images/skin/business-finance-banner.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="small-12 medium-6 medium-push-6 columns">
	@include('layouts.business-form')
    </div>
    <div class="hide-for-small medium-1 medium-push-5 columns">
    </div>
    <div class="small-12 medium-5 medium-pull-6 columns">
	<h2>Business Loans</h2>
	<p>Here at Qi Finance we’re passionate about supporting our local businesses. A low cost business loan could give you the boost you need to grow your business. We keep the process quick, simple and offer valuable advice every step of the way. Partnering with Qi Business Solutions we make sure all our businesses are armed with the knowledge and insight to make the loan work to your business’ best advantage.</p>
	<p>We make the process quick and easy - just use the sliders to choose how much you want to borrow and over how long, then fill out our online form for a speedy decision.</p>
	<p>Read our guide to business loans here or give us a call on 01534 634001 if you have any questions – we’d love to hear from you!</p>
		<div id="businessAccordion">
			<dl class="accordion" data-accordion>
				<dd>
					<a href="#panel1">What is a business loan?</a>
				    <div id="panel1" class="content">
					      <p>A business loan is similar to a personal loan but designed specifically for the use of a business. Typically, you receive a lump sum from the lender and agree to pay back the loan over a fixed period of time with agreed monthly payments. </p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel2">What can a business loan be used for?</a>
				    <div id="panel2" class="content">
						<p>A business loan can be used in a number of ways:</p>
						<ul class="square">
							<li>To grow the business through purchase of assets which will allow expansion</li>
							<li>To provide cashflow in quieter times.</li>
						</ul>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel3">How many types of loan are there?</a>
				    <div id="panel3" class="content">
				      <p>Simply put, there are two types loan. One is known as an unsecured loan and one is known as a secured loan.</p>
					  <p>Secured loans are typically for larger amounts (£25k+) with the repayments over a longer time. An example of a secured loan would be a new van for the business. The loan is known as "secured" because you use the value of an asset (the van in this case) to guarantee that the lender is paid.</p>
					  <p>Unsecured loans are typically for smaller amounts of money borrowed over shorter amounts of time. As the amounts are smaller there is less risk to the lender.</p>
				    </div>
				</dd>
				<dd>
					<a href="#panel4">Does Qi Finance lend their own money?</a>
				    <div id="panel4" class="content">
					      <p>Qi Finance have two ways of lending, we lend our own money and we also act as an agent, brokering loans. As we have the flexibility to both broker and lend our own money we can offer the best lending solution for each individual.</p>
						  <p>When we underwrite loans ourselves the agreement will be directly with Qi Finance.</p>
						  <p>When acting as an agent we broker loans through a series of partners who underwrite the loans. They are lending you the money and your agreement is with them.</p>
						  <p>We’ll always make sure it’s very clear exactly who your loan is with.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel5">What does APR mean?</a>
				    <div id="panel5" class="content">
						<p>Annual Percentage Rate (APR) is a form of measurement. APR can be confusing, but in general, the lower the APR the better. You will pay less money back on top of what you have borrowed.</p>
						<p>Most lenders have a rate that they term 'typical APR'. Typical APR means that they have offered that rate to 66% of their customers or more. This does not mean that you will be offered the same.</p>
						<p>Our top tip is to make sure that whoever you apply for a loan with, you have asked for a breakdown of all costs without exception.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel6">How are loan repayments calculated?</a>
				    <div id="panel6" class="content">
				    	<p>You will have to pay interest at a fixed rate on the amount you borrow, so the total repayable includes the total interest charges and the capital borrowed (much like a mortgage). The total repayable is then divided by the number of monthly payments you have chosen, to provide a fixed monthly repayment figure.</p>
				    </div>
				</dd>
				<dd>
					<a href="#panel7">What happens once I’ve applied for a Qi Finance business loan?</a>
				    <div id="panel7" class="content">
					      <p>Once we receive your application, we will give you a call and invite you in for a chat. This will give us a chance to discuss your objectives and making sure that a plan is drawn up to use the loan in the most advantageous way for your business. We can then liaise directly with your accountant if you give them permission and save you the time and effort of gathering all your paperwork.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel8">Are there any costs other than APR?</a>
				    <div id="panel8" class="content">
						<p>Yes. There is what we call an 'admin fee'. We know, we don't like it either... but we have certain hoops that we have to jump through and, as you know, hoops aren't cheap! For example, we have to pay the authorities for your credit checks. Without these checks, it would be impossible to lend you the money.</p>
				    </div>
				  </dd>


				  <dd>
					<a href="#panel9">How is a Qi Finance loan different?</a>
				    <div id="panel9" class="content">
					      <p>At Qi Finance we won’t simply lend you the money and lose interest once you’ve signed on the dotted line. We take an active interest in helping businesses to use a loan to its best advantage, helping with plans for expansion and utilising assets. We work closely with Qi Business Solutions to offer advice and guidance every step of the way and will be on hand to help at any point, before you take out the loan, during the life on the loan and even once it’s fully repaid.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel10">What happens if I miss or am late with a repayment?</a>
				    <div id="panel10" class="content">
						<p>Qi Finance wants to work with you to make sure your loan works for your business. We encourage good behaviour such as repaying on time through rewards and incentives. If you’re struggling, rather than simply charging late payment fees we offer a range of options to help get you back on track.*</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel11">Phone a Friend</a>
				    <div id="panel11" class="content">
				    	<p>The first step if you’re struggling is to give our friendly team a call - we’re here to help you find a sensible solution. The sooner you call us the more options we’ll be able to give you, remember good borrowing behaviour isn’t just repaying on time, it’s getting in touch if there’s a problem.</p>
				    </div>
				</dd>
				<dd>
					<a href="#panel12">Freeze Repayments</a>
				    <div id="panel12" class="content">
					      <p>If you have a loan directly with Qi Finance you’ll have the option to freeze repayments on your loan for one month – giving you the breathing space to get your finances back in shape. You can use this lifeline once during the life of the loan, but remember you need to make sure you let us know in advance, you can’t use the lifeline if you’re already in arrears.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel13">Remember...</a>
				    <div id="panel13" class="content">
						<p>there is no such thing as a daft question, so if you want to ask anything else, please just give us a call on 01534 634001 or drop in for a chat.</p>
				    </div>
				  </dd>
			</dl>

		</div>
    </div>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
