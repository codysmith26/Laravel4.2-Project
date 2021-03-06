@extends('layouts.base')
@section('body')
<!-- START SPREAD THE COST FLASH -->
  <!--  <div id="spreadTheCostFlash" class="hide-for-small">
      <a href="{{ url('/cash-dash') }}"><img src="{{ asset('/images/skin/cash-dash-home.png') }}"></a>
    </div>-->
<!-- END SPREAD THE COST FLASH -->

<!-- START CASH DASH FLASH 
    <div id="cash-dash-flash" class="hide-for-small">
	<style type="text/css">
		#cash-dash-overlay {
			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background-image: url("{{ asset('images/cashdash/overlay.png') }}");
			z-index:1000;
		}
		#cash-dash {
			position:fixed;
			top:50%;
			left:50%;
			margin:-316px 0 0 -545px;
			z-index:1000;
		}
		#cash-dash img {
			position:absolute;
		}
	</style>
	<div id="cash-dash-overlay"></div>
	<div id="cash-dash" style="width:1090px;height:632px;">
	<img src="/images/cashdash/cd-left.jpg" alt="" width="79" height="459" style="top:89px;left:165px;border-left:3px solid #ec408a; border-top:3px solid #ec408a; border-bottom:3px solid #ec408a;border-radius:10px;" alt=""/>
	<img src="/images/cashdash/cd-centre.jpg?{{{ time() }}}" alt="" width="376" height="459" usemap="#Map" style="top:89px;left:227px;border-top:3px solid #ec408a; border-bottom:3px solid #ec408a; border-radius:0px;" alt=""/>
	<img src="/images/cashdash/cd-right.jpg" alt="" width="361" height="459" style="top:89px;left:593px;border-right:3px solid #ec408a; border-bottom:3px solid #ec408a; border-top:3px solid #ec408a; border-radius:0px;" alt=""/>
		<map name="Map">
		<area shape="rect" coords="0,383,518,325" href="https://www.facebook.com/qifinance" target="_blank" alt="Check our Facebook page">
		<area shape="rect" coords="0,451,394,380" href="https://qifinance.com/personal-loans" alt="Apply for a loan now">
		</map>
		<img src="{{ asset('images/cashdash/cashdash.jpg') }}" width="1070" height="612" style="top:14px;left:7px;border:3px solid #ec408a;border-radius:10px;" alt="" />
		<a id="cash-dash-close"><img src="{{ asset('images/cashdash/close.png') }}" width="39" height="40"  style="top:75px;right:123px" alt="" /></a>


		<img src="{{ asset('images/cashdash/clue.jpg') }}" width="432" height="134" style="top:231px;left:119px;" alt="" />
		<a id="cash-dash-button" href="{{ url('/personal-loans') }}"><img src="{{ asset('images/cashdash/apply.png') }}" width="199" height="58" style="top:530px;left:296px;" alt="" /></a>
		<a id="cash-dash-facebook" href="http://www.facebook.com/qifinance" target="_blank"><img src="{{ asset('images/cashdash/facebook.png') }}" width="495" height="30" style="top:463px;left:115px;" alt="" /></a>
	</div>
	<script type="text/javascript">
		!function($) {
			$(document).ready(function() {
				$('#cash-dash-overlay, #cash-dash-close').click(function() {
					$('#cash-dash-overlay, #cash-dash').fadeOut();
				});
			});
		}(jQuery);
	</script>
    </div>

END CASH DASH FLASH -->
<!-- START REWARDS FLASH -->
<!-- <div id="rewardsFlash" class="hide-for-small">
    <a href="{{ url('#homeIntro') }}"><img src="{{ asset('/images/skin/rewards-flash.png') }}"></a>
</div> -->
<!-- END REWARDS FLASH -->
<!-- START MAIN CONTENT -->
<div class="row" id="homePanels">
	<section class="medium-4 columns show-for-small-only">
			<!--<div class="center">
				<a href="{{ url('/cash-dash-clue') }}" class="button expand radius" style="background-color: #F04D9E; border-color:#F04D9E;"><span style="font-weight:500;letter-spacing:0.5px;font-size:20px;">Cash Dash!</span><br>View our latest Clue!</a>
			</div>-->
	</section>
	<section class="medium-4 columns" id="personalMortgage">
			<div class="financeSectionIcon">
			    <a href="{{ url('/mortgages') }}">
				<img src="{{ asset('/images/skin/mortgage-image.jpg') }}">
			    </a>
			</div>
			<div class="center">
				<a href="{{ url('/mortgages') }}" class="button expand radius"><span style="font-weight:500;letter-spacing:0.5px;font-size:20px;">Mortgages</span><br>Click here to find out more</a>
			</div>
			<p class="homeSectionIntro">Qi Finance can help with one of the most important financial decisions you???ll make - your mortgage! Whether you???re a first time buyer, moving up the property ladder or remortgaging your house. We???ll look at your finances and lifestyle to ensure you have all the practical advice and knowledge you need to choose the right mortgage for you!</p>
	</section>

	<section class="medium-4 columns" id="personalLoans">
			<div class="financeSectionIcon">
			    <a href="{{ url('/personal-loans') }}">
				<img src="{{ asset('/images/skin/personal-finance-circle-image.jpg') }}">
			    </a>
			</div>
			<div class="center">
				<a href="{{ url('/personal-loans') }}" class="button expand radius"><span style="font-weight:500;letter-spacing:0.5px;font-size:20px;">Personal Loans</span><br>Click here to find out more</a>
			</div>
			<p class="homeSectionIntro">Qi Finance provide personal loans for just about any purpose ??? whether it???s home improvements, a new car or the holiday of a lifetime we guarantee a quick decision, the best rates and friendly advice from experts with your best interests at heart. Qi Finance focuses on rewarding borrowers who repay on time so your loan can earn you rewards!</p>
	</section>

	<section class="medium-4 columns" id="businessLoans">
			<div class="financeSectionIcon">
			    <a href="{{ url('/business-loans') }}">
				<img src="{{ asset('/images/skin/business-finance-image.jpg') }}">
			    </a>
			</div>
			<div class="center">
				<a href="{{ url('/business-loans') }}" class="button expand radius"><span style="font-weight:500;letter-spacing:0.5px;font-size:20px;">Business Loans</span><br>Click here to find out more</a>
			</div>
			<p class="homeSectionIntro">Here at Qi Finance we???re passionate about supporting our local businesses. We keep the process quick, simple and offer valuable advice every step of the way. Partnering with Qi Business Solutions we make sure all our businesses are armed with the knowledge and insight to make the loan work to your business??? best advantage.</p>
	</section>
</div>

<div id="homeLending">
	<div class="row">
		<article class="medium-6 medium-centered columns" id="lendingIntro">
			<div class="center">
				<img src="{{ asset('/images/skin/360-finance-icon.gif') }}">
			</div>
			<h4>360 Lending</h4>
			<p>Qi Finance like to look at the bigger picture, when making a decision on lending we don???t just take into account your credit score. We listen to what you need and why and then we look at all the factors which have influenced your finances so far, allowing us to make a fully informed lending decision which works for you. This means we can lend to some people and businesses who might have been refused a loan previously.</p>
		</article>
	</div>
</div>


<!-- END MAIN CONTENT -->

@stop
