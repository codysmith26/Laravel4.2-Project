@extends('layouts.base')
@section('body')
<!-- START MAIN CONTENT -->

<div class="row">
    <div class="small-12 medium-6 medium-push-6 columns">


{{-- Start Mortgage Calculator --}}
<fieldset>
    <legend>Mortgage Calulator</legend>

{{-- Start Monthly Repayment --}}
    <div class="row collapse">
	<div class="small-12 large-6 columns">
	<span>Capital Repayments (£)</span>
	    <div id="repayment">
		<input type="text" style="background:none;box-shadow:none;border:none;font-size:40px;height:50px;font-weight:900;text-shadow:#fff 1px 1px 1px;color:#666666;" value="0.00" />
	    </div>
	</div>
{{-- Start Monthly Interest --}}
	<div class="small-12 large-6 columns">
	<span>Interest Only Repayments (£)</span>
	    <div id="interest">
		<input style="background:none;box-shadow:none;border:none;font-size:40px;height:50px;font-weight:900;text-shadow:#fff 1px 1px 1px;color:#666666;" type="text" value="0.00" />
	    </div>
	</div>
    </div>
<hr />

{{-- Start Mortgage --}}
    <div class="row collapse">
	<span style="">House Price</span>
	<span style="" id="priceDisplay">&pound;0</span><br /><br />
    </div>
    <div class="row collapse">
	<div id="price"></div><br /><br />
    </div>

{{-- Start Rate --}}
    <div class="row collapse">
	    <span style="">Desposit</span>
	    <span style="" id="depositDisplay">&pound;0</span><br /><br />
    </div>
    <div class="row collapse">
	    <div id="deposit"></div><br /><br />
    </div>

{{-- Start Duration --}}
    <div class="row collapse">
	<span style="">Duration</span>
	<span style="" id="durationDisplay">0 years</span><br /><br />
    </div>
    <div class="row collapse">
	<div id="duration"></div><br /><br />
    </div>

</fieldset>
{{-- Start Script --}}

    <script>
	$(document).ready(function()
	{
	    var
	    price = $("#price");
	    var
	    duration = $("#duration");
	    var
	    deposit = $("#deposit");
	    var
	    priceDisplay = $("#priceDisplay");
	    var
	    durationDisplay = $("#durationDisplay");
	    var
	    depositDisplay = $("#depositDisplay");
	    var
	    rateDisplay = $("#rateDisplay");
	    var
	    priceValue = depositValue = durationValue = 0;
	    var
	    rateValue = 5;
	    

	    updateprice = function(event, ui)
	    {
		    var val = ui.value;
		    priceDisplay.text("£" + val);
		    priceValue = val;
		    total();
	    }
	    updateDuration = function(event, ui)
	    {
		    var val = ui.value;
		    durationDisplay.text(val + " years");
		    durationValue = val;
		    total();
	    }
	    updateDeposit = function(event, ui)
	    {
		    var val = ui.value;
		    depositDisplay.text("£" + val);
		    depositValue = val;
		    total();
	    }

	    price.slider({value:195000, min: 100000, max: 2000000, step: 5000, slide: updateprice});
	    duration.slider({value:11, min: 10, max: 35, slide: updateDuration});
	    deposit.slider({value:40000, min: 20000, max: 1000000, step: 5000, slide: updateDeposit});
	    
	    
	    function total()
	    {
		    var
		    d = durationValue * 12;
		    r = rateValue / 1200;
		    mortgageValue = priceValue - depositValue;
		    $("#repayment input").val(((mortgageValue * (r * Math.pow(1 + r, d))) / (Math.pow(1 + r, d) -1 )).toFixed(2));
		    $("#interest input").val((((mortgageValue * rateValue) / 12) / 100).toFixed(2));
	    }
	});
    </script>
{{-- End mortgage calculator --}}
    
    
    </div>
    
</div>

<!-- END MAIN CONTENT -->
@stop
