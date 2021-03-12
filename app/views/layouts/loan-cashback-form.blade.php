{{ Form::open(array('url' => 'loan-cashback-success', 'data-abide')) }}

{{-- Details --}}
<fieldset>
    <legend>Your Details</legend>
    <div class="row">
    	<div class="small-12 columns">
    	    {{ Form::text('name', '', array('placeholder' => 'Your Name', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
    	    <small class="error">Please enter your name</small>
    	</div>
    	<div class="small-12 columns">
    	    {{ Form::email('email', '', array('placeholder' => 'Your Email', 'required', 'MaxLength' => '90')) }}
    	    <small class="error">Please enter a valid email</small>
    	</div>
    	<div class="small-12 columns">
    	    {{ Form::text('telephone', '', array('placeholder' => 'Your Telephone', 'required pattern' => '[0-9]', 'MaxLength' => '11')) }}
    	    <small class="error">Please enter your telephone number, using only numbers [0-9]</small>
    	</div>
    	<div class="small-12 columns">
		    {{ Form::text('address_line_1', '', array('placeholder' => 'Enter Address', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
		    <small class="error">Please enter the your address</small>
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

{{-- Loan Details --}}
<fieldset>
    <legend>Loan Details</legend>
    <div class="row">
    	<div class="small-12 columns">
    	    {{ Form::text('reason_for_loan', '', array('placeholder' => 'Enter reason for loan', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
    	    <small class="error">Please enter the the reason for a loan</small>
    	</div>
    </div>
    <div class="row">
    	<div class="small-6 columns">
    	    {{ Form::text('monthly-repayments', '', array('placeholder' => 'Your Monthly Repayments', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
            <small class="error">Please enter your monthly repayments</small>
    	</div>
    	<div class="small-6 columns">
    	    {{ Form::text('loan-lender', '', array('placeholder' => 'Your Lender', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
    	    <small class="error">Please enter your lender</small>
    	</div>
    </div>
    <div class="row">
        <div class="small-6 columns">
    	    {{ Form::text('total-borrowed', '', array('placeholder' => 'Total Borrowed', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
            <small class="error">Please enter your total borrowed</small>
    	</div>
    	<div class="small-6 columns">
    	    {{ Form::text('left-to-repay', '', array('placeholder' => 'Total Left to Repay', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
    	    <small class="error">Please enter your total left to repay</small>
    	</div>
    </div>
    <div class="row">
			<div class="large-6 columns">
			    <span style="margin-top:20px;"><p>Date loan repayments end</p></span>
			</div>
			<div class="large-3 columns">
			    {{ Form::selectMonth('repayment-month') }}
			</div>
			<div class="large-3 columns">
			    {{ Form::selectYear('repayment-year', date('Y'), date('Y')+5) }}
        </div>
    </div>
</fieldset>

{{-- Terms --}}
<fieldset>
    <legend>Agreement Terms</legend>
    <div class="row">
	<div class="small-12 columns">
	        <label for="radio1">{{ Form::radio('agreement', 'yes', '', array('required', 'id' => 'radio1')) }}&nbsp;&nbsp;I understand and agree to the terms and conditions.</label>
	</div>
	<hr />
	<div class="small-12 columns">
	    {{ Form::submit('Apply', array('class' => 'button small radius', 'id' => 'submitButton', 'style' => 'float:right;')) }}
	</div>
    </div>
</fieldset>

{{ Form::close() }}

