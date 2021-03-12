{{ Form::open(array('url' => 'mortgage-success', 'method' => 'post', 'data-abide')) }}

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
{{-- Start Rate --}}
    <div class="row collapse">
	    <span style="">Mortgage Interest Rate</span>
	    <span style="" id="rateDisplay">0%</span><br /><br />
    </div>
    <div class="row collapse">
	    <div id="rate"></div><br /><br />
    </div>

{{-- Start Duration --}}
    <div class="row collapse">
	<span style="">Duration</span>
	<span style="" id="durationDisplay">0 years</span><br /><br />
    </div>
    <div class="row collapse">
	<div id="duration"></div><br /><br />
    </div>

{{-- Start Mortgage --}}
    <div class="row collapse">
	<span style="">Mortgage Amount</span>
	<span style="" id="mortgageDisplay">&pound;0</span><br /><br />
    </div>
    <div class="row collapse">
	<div id="mortgage"></div><br /><br />
    </div>
</fieldset>
{{-- End Mortgage Calculator --}}

{{-- Start Script --}}

    <script>
	$(document).ready(function()
	{
	    var
	    mortgage = $("#mortgage");
	    var
	    duration = $("#duration");
	    var
	    rate = $("#rate");
	    var
	    mortgageDisplay = $("#mortgageDisplay");
	    var
	    durationDisplay = $("#durationDisplay");
	    var
	    rateDisplay = $("#rateDisplay");
	    var
	    mortgageValue = durationValue = rateValue = 0;

	    updatemortgage = function(event, ui)
	    {
		    var val = ui.value;
		    mortgageDisplay.text("£" + val);
		    mortgageValue = val;
		    total();
	    }
	    updateDuration = function(event, ui)
	    {
		    var val = ui.value;
		    durationDisplay.text(val + " years");
		    durationValue = val;
		    total();
	    }
	    updateRate = function(event, ui)
	    {
		    var val = ui.value;
		    rateDisplay.text(val + "%");
		    rateValue = val;
		    total();
	    }

	    mortgage.slider({value:195000, min: 100000, max: 2000000, step: 5000, slide: updatemortgage});
	    duration.slider({value:11, min: 10, max: 35, slide: updateDuration});
	    rate.slider({value:0.75, min: 0.25, max: 10, step: 0.25, slide: updateRate});

	    function total()
	    {
		    var
		    d = durationValue * 12;
		    r = rateValue / 1200;
		    $("#repayment input").val(((mortgageValue * (r * Math.pow(1 + r, d))) / (Math.pow(1 + r, d) -1 )).toFixed(2));
		    $("#interest input").val((((mortgageValue * rateValue) / 12) / 100).toFixed(2));
	    }
	});
    </script>
<fieldset>
    <legend>Contact Details</legend>
		{{ Form::label('name', 'Full Name') }}
		{{ Form::text('name', '', array('placeholder' => 'Your Name', 'required pattern' => '[a-zA-Z]+')) }}
		<small class="error">Name is required and must be letters only</small>
		{{ Form::email('email', '', array('placeholder' => 'some@email.com')) }}
		<small class="error">An email address is required and must be valid</small>
		{{ Form::text('telephone', '', array('placeholder' => 'Your Telephone Here', 'required pattern' => 'integer')) }}
		<small class="error">Your telephone number is required and must be valid</small>
		{{ Form::submit('Contact Me', array('class' => 'button small radius')) }}
	    {{ Form::close() }}
</fieldset>
