@extends('layouts.base')
@section('body')
<div id="competitionBanner">
	<div class="cd-header">
    	<img src="{{ asset('/images/skin/cd-header.jpg') }}">
    </div>
</div>
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
<img src="/images/cashdash/cd-left.jpg" alt="" width="79" height="459" usemap="#Map" style="top:89px;left:165px;border-left:3px solid #ec408a; border-top:3px solid #ec408a; border-bottom:3px solid #ec408a;border-radius:10px;" alt=""/>
<img src="/images/cashdash/cd-centre.jpg?{{{ time() }}}" alt="" width="376" height="459" usemap="#Map" style="top:89px;left:227px;border-top:3px solid #ec408a; border-bottom:3px solid #ec408a; border-radius:0px;" alt=""/>
<img src="/images/cashdash/cd-right.jpg" alt="" width="361" height="459" usemap="#Map" style="top:89px;left:593px;border-right:3px solid #ec408a; border-bottom:3px solid #ec408a; border-top:3px solid #ec408a; border-radius:0px;" alt=""/>
	<map name="Map">
		<area shape="rect" coords="0,383,518,325" href="https://www.facebook.com/qifinance" target="_blank" alt="Check our Facebook page">
		<area shape="rect" coords="0,451,394,380" href="https://qifinance.com/personal-loans" alt="Apply for a loan now">
	</map>
	<!--<img src="{{ asset('images/cashdash/cashdash.jpg') }}" width="1070" height="612" style="top:14px;left:7px;border:3px solid #ec408a;border-radius:10px;" alt="" />-->
	<a id="cash-dash-close"><img src="{{ asset('images/cashdash/close.png') }}" width="39" height="40"  style="top:75px;right:123px" alt="" /></a>

<!--
	<img src="{{ asset('images/cashdash/clue.jpg') }}" width="432" height="134" style="top:231px;left:119px;" alt="" />
	<a id="cash-dash-button" href="{{ url('/personal-loans') }}"><img src="{{ asset('images/cashdash/apply.png') }}" width="199" height="58" style="top:530px;left:296px;" alt="" /></a>
	<a id="cash-dash-facebook" href="http://www.facebook.com/qifinance" target="_blank"><img src="{{ asset('images/cashdash/facebook.png') }}" width="495" height="30" style="top:463px;left:115px;" alt="" /></a>-->
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
<!-- END CASH DASH FLASH -->
<!-- START MAIN CONTENT -->
<div class="row">
	<section class="medium-12 columns show-for-small-only">
		<img src="/images/cashdash/cd-centre.jpg?{{{ time() }}}" usemap="#Map">
		<map name="Map">
			<area shape="rect" coords="0,383,518,325" href="https://www.facebook.com/qifinance" target="_blank" alt="Check our Facebook page">
			<area shape="rect" coords="0,451,394,380" href="https://qifinance.com/personal-loans" alt="Apply for a loan now">
		</map>
	</section>
</div>
<div class="row"><br><hr></div>
<!-- END MAIN CONTENT -->
@stop
