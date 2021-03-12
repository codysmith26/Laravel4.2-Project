@extends('layouts.base')
@section('body')
<!-- START MAIN CONTENT -->
<div id="mortgagesBanner">
	<div class="row">
    	<img src="{{ asset('/images/skin/mortgage-banner.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="small-12 medium-6 medium-push-6 columns">
	@include('layouts.mortgage-form')
    </div>
    <div class="hide-for-small medium-1 medium-push-5 columns">
    </div>
    <div class="small-12 medium-5 medium-pull-6 columns">
	<h2>Guide To Mortgages</h2>
	<p>Qi Finance can now help with one of the most important financial decisions you’ll make - your mortgage! Whether you’re a first time buyer, moving up the property ladder or remortgaging your house Qi Finance is here to help. We’ll look at your finances and lifestyle to ensure you have all the practical advice and knowledge you need to choose the right mortgage for you. It’s a big decision so make sure it’s the right decision!</p>
	<p>We make the process quick and easy - use our super easy mortgage calculator, then fill out our online form and we'll be in touch to arrange a meeting.</p>
	<p>What's more you'll make huge savings on the cost of moving with our discount scheme, see the list below for the benefits on offer to Qi Finance customers.</p>
	<ul> 
    <li>50% off Conveyancing Fees</li>
    <li>50% off Will Writing Services</li>
    <li>50% off Removal Fees</li>
    <li>50% off Estate Agency Fees</li>
    <li>50% off Shutters & Blinds</li>
    <li>50% off Carpentry Services</li>
    <li>50% off Home Cleaning</li>
    <li>10% off Property Valuations Services</li>
    <li>Cash Back on Home Improvement Loans</li>
    <li>Cash Back on Home Furnish Loans</li>
    <li>Cash Back on Home Insurance</li>
    <li>Cash Back on Life Assurance Policies</li>
  </ul>
	<p>Read our guide to mortgages here or give us a call on 01534 634001 if you have any questions – we’d love to hear from you!</p>
	<div id="mortgageAccordion">
		<dl class="accordion" data-accordion>
			<dd>
				<a href="#panel1">What is a Mortgage?</a>
			    <div id="panel1" class="content">
				      <p>A mortgage is a loan taken out to finance the purchase of a property. The property is used as collateral against the loan as protection to the lender. The amount that you pay back to the lender depends on how much of a deposit you pay and the length of time you chose to make the repayments over.</p>
			    </div>
			  </dd>
			  <dd>
			    <a href="#panel2">Deposit</a>
			    <div id="panel2" class="content">
					<p>The more of deposit you can pay the higher the chances are of you being accepted for a mortgage and the better the interest rate you will be given. The mortgage that makes up the difference is expressed as a percentage ‘loan-to-value’.</p>
					<p><strong>For Example</strong></p>
					<p>If a property costs £400,000 and you have £120,000 as a deposit, the deposit is 30% of the total property cost. The loan-to-value is therefore 70%.</p>
			    </div>
			  </dd>
			  <dd>
			    <a href="#panel3">Credit History</a>
			    <div id="panel3" class="content">
			      <p>Your credit history is a record of your financial past. If you’ve always paid your bills on time then your credit history should be “good” whereas if you’ve missed payments or paid late your credit history may be classed as “bad”. Mortgage providers like to see a good credit history as lending to you is considered lower risk. If you find out you have a bad credit history don’t despair, we will assist you in taking the steps necessary to improve it. </p>
			    </div>
			</dd>
			<dd>
				<a href="#panel4">I’ve applied online, what next?</a>
			    <div id="panel4" class="content">
				      <p>Now that we have your application we’ll contact you to arrange a chat. We’ll get you to bring in your paperwork (ID, proof of address and financial information). Once we have all your information it will be passed onto the mortgage provider. The mortgage provider will carry out financial checks to make sure you can afford the loan and to assess your credit history.</p>
			    </div>
			  </dd>
			  <dd>
			    <a href="#panel5">Repaying Your Mortgage</a>
			    <div id="panel5" class="content">
					<p>A mortgage is made up of two parts:</p>
					<ul class="square">
						<li>Capital - This is the money you borrow to pay for the purchase</li>
						<li>Interest- This is the amount of money the lender charges you until the loan is paid back</li>
					</ul>
					<p>It’s essential that you know how much you afford to make in repayments. You need to think about whether the repayments will still leave you with enough money left to enjoy the lifestyle you’re used to. We’ll make sure we take an honest look at your finances and help guide you to the right decision.</p>
					<p>See the guide below to find out about the different types of mortgages available, once you understand what’s out there you’ll have a clearer idea of what suits you best.</p>
			    </div>
			  </dd>
			  <dd>
			    <a href="#panel6">Types of Mortgage</a>
			    <div id="panel6" class="content">
			    	<p><strong>Interest Only</strong></p>
					<p>This means that your monthly repayments will cover the interest on the mortgage but won’t cover the actual loan. This means that the debt owed for the property will stay the same. This option can work for first time buyers who wouldn’t be able to get on the property ladder otherwise.</p>
					<p>If you decide to go for this option it’s important to be able to find a repayment method for the actual loan. You could set up a savings account or switch to a mortgage plan which includes repayment of the loan once you can afford to.</p>
					<p><strong>Fixed Interest</strong></p>
					<p>Fixed interest mortgages do what they say on the tin! The interest rate stays the same regardless of what happens to interest rates in the market. It’s an insurance against interest rates rising and will stay fixed for an agreed amount of time, normally this is 2, 3 or 5 years. If interest rates go down yours won’t and these mortgages are normally a bit more expensive. It’s a good option if you need some certainty.</p>
					<p><strong>Variable Interest</strong></p>
					<p>The interest rate on these mortgages can increase or decrease. This is usually dependent on the economic situation in the UK.</p>
					<ol>
						<li><p>Tracker mortgage:<br>A tracker mortgage increases or decreases in line with the Bank of England Base Rate. This means if the bank rate increases by 1% so does your interest rate and if it falls by 1% the same applies.</p></li>
						<li><p>Standard variable rates (SVR):<br>Each lender offers a SVR rate which roughly follows the bank rate. Lenders don’t have to follow the bank rate exactly though and so this can differ depending on what the lender decides.</p></li>
						<li><p>Discount<br>These mortgages offer a discount on standard tracker and SVR mortgages. Usually the discount is for a couple of years.</p></li>
					</ol>

					<p><strong>Hybrid Options – Capped Deals</strong></p>
					<p>This is a part fixed, part variable option. With this option the rate you pay moves in line with the base rate or SVR but is capped to protect you from rates increasing dramatically. </p>
			    </div>
			</dd>
			<dd>
				<a href="#panel7">In a nutshell…</a>
			    <div id="panel7" class="content">
				      <p>There’s no right or wrong choice, it’s all about what suits you and your circumstances best. Need a bit more help? Just give us a buzz, no question is too big or too small! We’ll make sure we look at all aspects of your life and provide you with straightforward and sensible advise on which mortgage will most suit you and your lifestyle.</p>
			    </div>
			  </dd>
			  <dd>
			    <a href="#panel8">Having an issue with payments?</a>
			    <div id="panel8" class="content">
					<p>If you’re having an issue with your repayments the first step is picking up the phone and letting us know. Most situations are fixable if you tackle them early so don’t delay, we’re here to help! Call us on 01534 634001 or pop in for a chat.</p>
			    </div>
			  </dd>
		</dl>

	</div>

    </div>
</div>
<div class="row"><br><hr></div>

<!-- END MAIN CONTENT -->
@stop
