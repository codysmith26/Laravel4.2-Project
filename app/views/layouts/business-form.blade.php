{{ Form::open(array('url' => 'business-success', 'data-abide')) }}
<fieldset>
    <legend><strong>(1/8)</strong> Loan Particulars</legend>
{{-- Start Amount Slider --}}
    <div class="row collapse">
	<div class="small-3 columns" style="text-align:left;margin-top:23px;">£500</div>
	<div class="small-6 columns" style="margin-bottom:-10px;">
	    {{ Form::text('amount', '', array('id' => 'amount')); }}
	</div>
	<div class="small-3 columns" style="text-align:right;margin-top:23px;">£100,000</div>
    </div>
    <div class="row collapse">
	<div id="slider"></div>
    </div>
    <div class="row collapse">
	<h5 style="text-align:center;font-weight:900;color:#666666;">Loan Amount</h5>
    </div>
{{-- End Amount Slider --}}
    <hr />
{{-- Start Term Slider --}}
    <div class="row collapse">
	<div class="small-3 columns" style="text-align:left;margin-top:23px;">12 months</div>
	<div class="small-6 columns" style="margin-bottom:-10px;">
	    {{ Form::text('term', '', array('id' => 'term')); }}
	</div>
	<div class="small-3 columns" style="text-align:right;margin-top:23px;">60 months</div>
    </div>
    <div class="row collapse">
	<div id="term_slider"></div>
	    </div>
	    <div class="row collapse">
		<h5 style="text-align:center;font-weight:900;color:#666666;">Loan Length</h5>
	    </div>
{{-- End Term Slider --}}
	    <hr />
	    <div class="row">
		<div id="repayments">£244.82</div>
		<h5 style="text-align:center;font-weight:900;color:#666666;">Monthly Repayments</h5>
	    </div>
	    <div class="row">
		<div class="small-10 small-centered columns">
			<div class="loanTCs">*All loans are subject to status.<br /> Terms and conditions apply. Qi Finance loan typical APR 16%</div>
		</div>
	    </div>
</fieldset>


{{-- Business Details --}}
<fieldset>
    <legend><strong>(2/8)</strong> Business Details</legend>
    <div class="row">
	<div class="small-12 large-8 columns">
	    {{ Form::text('company_name', '', array('placeholder' => 'Enter Company Name', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
	    <small class="error">Please enter the company name</small>
	</div>
	<div class="small-12 columns">
	    {{ Form::text('address_line_1', '', array('placeholder' => 'Enter Address', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
	    <small class="error">Please enter the company address</small>
	</div>
	<div class="small-12 columns">
	    {{ Form::text('address_line_2', '', array('placeholder' => 'Enter Street', 'MaxLength' => '90')) }}
	</div>
	<div class="small-12 columns">
	    {{ Form::text('parish_county', '', array('placeholder' => 'Enter Parish / County', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
	    <small class="error">Please enter your parish or county</small>
	</div>
	<div class="small-12 large-8 columns">
	    {{ Form::select('jurisdiction', array('jersey' => 'Jersey', 'guernsey' => 'Guernsey', 'isle_of_man' => 'Isle of Man')) }}
	</div>
	<div class="small-12 large-4 columns">
	    {{ Form::text('postcode', '', array('placeholder' => 'Postcode', 'required pattern' => 'alpha_numeric', 'MaxLength' => '8')) }}
	    <small class="error">Please enter your postcode</small>
	</div>
    </div>
</fieldset>

{{-- Represtative --}}
<fieldset>
    <legend><strong>(3/8)</strong> Company Representative</legend>
    <div class="row">
	<div class="small-12 columns">
	    {{ Form::text('name', '', array('placeholder' => 'Your Name', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
	    <small class="error">Please enter your name</small>
	</div>
	<div class="small-12 columns">
	    {{ Form::text('position', '', array('placeholder' => 'Your Position', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
	    <small class="error">Please enter your position</small>
	</div>
	<div class="small-12 columns">
	    {{ Form::email('email', '', array('placeholder' => 'Your Email', 'required', 'MaxLength' => '90')) }}
	    <small class="error">Please enter a valid email</small>
	</div>
	<div class="small-12 columns">
	    {{ Form::text('telephone', '', array('placeholder' => 'Your Telephone', 'required pattern' => '[0-9]', 'MaxLength' => '11')) }}
	    <small class="error">Please enter your telephone number, using only numbers [0-9]</small>
	</div>
    </div>
</fieldset>

{{-- Accountant Details --}}
<fieldset>
    <legend><strong>(4/8)</strong> Your Accountant</legend>
    <div class="row">
	<div class="small-12 columns">
	    {{ Form::text('accountant_name', '', array('placeholder' => 'Your Accountant Name', 'MaxLength' => '90')) }}
	</div>
	<div class="small-12 columns">
	    {{ Form::text('accountant_phone', '', array('placeholder' => 'Your Accountant Number', 'pattern' => '[0-9]', 'MaxLength' => '11')) }}
	    <small class="error">Please enter only numbers [0-9]</small>
	</div>
	<div class="small-12 columns">
	    <hr>
	    <p>We can contact your accountant for all the necessary paperwork and save you the hassle</p>
	</div>
    </div>
</fieldset>
{{-- End Accountant Details --}}

{{-- Reason for Loan --}}
<fieldset>
    <legend><strong>(5/8)</strong> Reason for application</legend>
    <div class="row">
	<div class="small-12 columns">
	    {{ Form::text('reason_for_loan', '', array('placeholder' => 'Enter reason for loan', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
	    <small class="error">Please enter the the reason for a loan</small>
	</div>
    </div>
</fieldset>
{{-- End Reason for Loan --}}

{{-- Income Details --}}
<fieldset>
    <legend><strong>(6/8)</strong> Income Details</legend>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Income</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('income', '', array('id' => 'income', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
</fieldset>
{{-- End Income Details --}}

{{-- Expenditure Details --}}
<fieldset>
    <legend><strong>(7/8)</strong> Expenditure Details</legend>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Rent or Mortgage</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('rent_or_mortgage', '', array('id' => 'rent_or_mortgage', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Utilities</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('utilities', '', array('id' => 'utilities', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Pension and insurances</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('pensions_and_insurances', '', array('id' => 'pensions_and_insurances', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Credit card payments</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('credit_card_payments', '', array('id' => 'credit_card_payments', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Loan repayments</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('loan_repayments', '', array('id' => 'loan_repayments', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Other</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('other', '', array('id' => 'other', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
</fieldset>
{{-- End Expenditure Details --}}

{{-- Final Questions --}}
<fieldset>
    <legend><strong>(8/8)</strong> A few final questions</legend>
    <div class="row">
	<div class="small-12 columns">
	    <p>Do you consent for us to contact your accountant (if applicable) directly to request documentation for the purposes of processing this application?</p>
	    <label for="radio1">{{ Form::radio('accountant_consent', 'yes', '', array('required', 'id' => 'radio1')); }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="radio2">{{ Form::radio('accountant_consent', 'no', '', array('required', 'id' => 'radio2')); }}&nbsp;&nbsp;No</label>
	</div>
	<hr />
	<div class="small-12 columns">
	    <p>Your company has registered offices in Jersey, Guersney or the Isle of Man?</p>
	    <label for="radio3">{{ Form::radio('registered_office', 'yes', '', array('required', 'id' => 'radio3')); }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="radio4">{{ Form::radio('registered_office', 'no', '', array('required', 'id' => 'radio4')); }}&nbsp;&nbsp;No</label>
	</div>
	<hr />
	<div class="small-12 columns">
	    <p>You are authorised to make this application on behalf of the company?</p>
	    <label for="radio5">{{ Form::radio('authorised', 'yes', '', array('required', 'id' => 'radio5')); }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="radio6">{{ Form::radio('authorised', 'no', '', array('required', 'id' => 'radio6')); }}&nbsp;&nbsp;No</label>
	</div>
    </div>
</fieldset>

{{-- Terms --}}
<fieldset>
    <legend>Agreement Terms</legend>
    <div class="row">
	<div class="small-12 columns">
	    <p>Please check the box below to confirm that you have read and accepted the <a href="/privacy-policy/">privacy statement</a> and that you understand that applying for a Qi Finance Loan will mean your company may be subject to a credit check with a trusted 3rd party company.</p>
	</div>
	<div class="small-12 columns">
	    <label for="radio7">{{ Form::radio('agreement', 'yes', '', array('required', 'id' => 'radio7')) }}&nbsp;&nbsp;On behalf of the company I can confirm agreement to the above terms.</label>
	</div>
	<div class="small-12 columns">
	<hr />
	    {{ Form::submit('Apply', array('class' => 'button small radius', 'id' => 'submitButton', 'style' => 'float:right;')) }}
	</div>
    </div>

<script src="{{ url('js/loan_payment_business.js') }}"></script>
{{ Form::close() }}

