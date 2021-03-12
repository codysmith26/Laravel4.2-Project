@extends('layouts.base')
@section('body')
<div id="personalBanner">
	<div class="row">
    	<img src="{{ asset('/images/skin/personal-finance-head-banner.jpg') }}">
    </div>
</div>
<div class="row">
    <div class="small-12 medium-6 medium-push-6 columns">
	@include('layouts.personal-form')
    </div>
    <div class="hide-for-small medium-1 medium-push-5 columns">
    </div>
    <div class="small-12 medium-5 medium-pull-6 columns">
	<h2>Personal Loans<br></h2>
	<p>Qi Finance provide personal loans for just about any purpose. Whether it’s much needed home improvements, a new car or the holiday of a lifetime we guarantee a quick decision, the best rates and friendly advice from experts with your best interests at heart. Qi Finance focuses on rewarding borrowers who repay on time so your loan can earn you rewards!</p>
	<p>We make the process quick and easy - just use the sliders to choose how much you want to borrow and over how long, then fill out our online form for a speedy decision.</p>
	<p>Read our guide to personal loans here or give us a call on 01534 634001 if you have any questions – we’d love to hear from you!</p>
		<div id="personalAccordion">
			<dl class="accordion" data-accordion>
				<dd>
					<a href="#panel1">What is a personal loan?</a>
				    <div id="panel1" class="content">
					      <p>A personal loan is a way of borrowing money from a bank, building society or other financial services provider. Typically, you receive a lump sum and agree to pay back the loan over a fixed period of time with agreed monthly payments.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel2">How many types of loan are there?</a>
				    <div id="panel2" class="content">
						<p>Simply put, there are two types loan. One is known as an unsecured loan and one is known as a secured loan.</p>
						<p>Secured loans are typically for larger amounts (£25k+) with the repayments over a longer time. A classic example of a secured loan would be a mortgage. The loan is known as "secured" because you use the value of an asset (like your home) to guarantee that the lender is paid.</p>
						<p>Unsecured loans are typically for smaller amounts of money borrowed over shorter amounts of time. Although there are serious consequences to not repaying an unsecured loan, your personal assets like cars, properties or jewellery, cannot be used by the lender to repay your debt.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel3">Can anyone apply for finance?</a>
				    <div id="panel3" class="content">
				      <p>Any Channel Island or Isle of Man resident in full time employment, aged between 18 and 70 years, can apply for a personal loan.</p>
				    </div>
				</dd>
				<dd>
					<a href="#panel4">Does Qi Finance lend their own money?</a>
				    <div id="panel4" class="content">
					      <p>Qi Finance have two ways of lending, we lend our own money and we also act as an agent, brokering loans.</p>
						  <p>When we underwrite loans ourselves the agreement will be directly with Qi Finance.</p>
						  <p>When acting as an agent we broker loans through a series of partners who underwrite the loans. They are lending you the money and your agreement is with them.</p>
We’ll always make sure it’s very clear exactly who your loan is with.</p>
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
					<a href="#panel7">Why is credit history important?</a>
				    <div id="panel7" class="content">
					      <p>Your credit history is like your financial fingerprint and can have a big impact on the cost of lending. Credit history can be labelled "bad" if you've failed to pay on time or missed any payments in the past. You may also have a bad credit history if there is any outstanding debt against your name that you are currently unaware of.</p>
						  <p>Believe it or not, your credit history improves when you get a loan, as long as you repay on time, that is!</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel8">What happens once I’ve applied for a Qi Finance loan?</a>
				    <div id="panel8" class="content">
						<p>Once we receive your application, we will give you a call and invite you in for a chat. This gives you the chance to bring in your paperwork (ID, proof of address and bank statements) and also ask any questions you might have. If you have finance elsewhere, we may ask you to give us some info about other loans or credit cards you have, like a recent statement for example. If you can’t make it in we may be able to do this part over email.</p>
				    </div>
				  </dd>


				  <dd>
					<a href="#panel9">When I apply for finance what checks do you make?</a>
				    <div id="panel9" class="content">
					      <p>All reputable companies that offer loans use a credit reference agency (CRA) to carry out a credit search. We will add the basic details of your application to the CRA, which will be seen by other organisations that make credit searches. The search looks at your current and past financial status, including people with whom you have financial links like a spouse or partner. These financial details will be taken into account whenever you apply for credit.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel10">Are there any costs other than APR?</a>
				    <div id="panel10" class="content">
						<p>Yes. There is what we call an 'admin fee'. We know, we don't like it either... but we have certain hoops that we have to jump through and, as you know, hoops aren't cheap! For example, we have to pay the authorities for your credit checks. Without these checks, it would be impossible to lend you the money.</p>
				    </div>
				  </dd>
				  <dd>
				    <a href="#panel11">Can I transfer an existing loan to Qi Finance?</a>
				    <div id="panel11" class="content">
				    	<p>Sure you can. You will need to come in for a natter and bring all your paperwork. Once we've considered your situation, we will do all the work for you. We will apply a transfer APR. The admin fee will still apply, but as long as you're saving in the long run, it's certainly worth it.</p>
						<p>Your repayments will be made automatically by monthly Direct Debit from your bank account. Keeps it nice and easy! It's a great idea to arrange this date to be as close after your pay date as possible. Then it's done and dusted at the beginning of the month and you have nothing to worry about!</p>
				    </div>
				</dd>
				<dd>
					<a href="#panel12">What happens if I miss or am late with a repayment?</a>
				    <div id="panel12" class="content">
					      <p>Qi Finance wants to work with you to make sure your loan works for you. We encourage good behaviour such as repaying on time through rewards and incentives. If you’re struggling, rather than simply charging late payment fees we offer a range of options to help get you back on track.*</p>
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
						<p>If you have a loan directly with Qi Finance you’ll have the option to freeze repayments on your loan for one month – giving you the breathing space to get your finances back in shape. You can use this lifeline once during the life of the loan, but remember you need to make sure you let us know in advance, you can’t use the lifeline if you’re already in arrears.</p>
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
