{{-- Start form --}}
	{{ Form::open(array('url' => 'personal-success', 'data-abide')) }}
{{-- Start Loan Particulars --}}
	    <fieldset>
		<legend><strong>(1/8)</strong> Loan Particulars</legend>
{{-- Start Amount Slider --}}
		<div class="row collapse">
		    <div class="small-3 columns" style="text-align:left;margin-top:23px;">£1,000</div>
		    <div class="small-6 columns" style="margin-bottom:-10px;">
			{{ Form::text('amount', '', array('id' => 'amount')); }}
		    </div>
		    <div class="small-3 columns" style="text-align:right;margin-top:23px;">£30,000</div>
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
		    <div class="small-3 columns" style="text-align:right;margin-top:23px;">84 months</div>
		</div>
		<div class="row collapse">
		    <div id="term_slider"></div>
		</div>
		<div class="row collapse">
		    <h5 style="text-align:center;font-weight:900;color:#666666;">Loan Length</h5>
		</div>
{{-- End Term Slider --}}
		<hr />
{{-- Start Repayments Box --}}
		<div class="row">
		    <div id="repayments">£244.82</div>
		    <h5 style="text-align:center;font-weight:900;color:#666666;">Monthly Repayments</h5>
		</div>
		<div class="row">
		    <div class="small-10 small-centered columns">
			<div class="loanTCs">*All loans and rates are subject to status.<br />Terms and conditions apply. Qi Finance loan typical APR 16%</div>
		    </div>
		</div>
	    </fieldset>
{{-- End loan information --}}

{{-- Start personal details --}}
	    <fieldset>
		<legend><strong>(2/8)</strong> Personal Details</legend>
		    <div class="row">
			<div class="small-12 columns">
			    {{ Form::text('name', '', array('id' => 'name', 'placeholder' => 'Enter your Full Name', 'required', 'MaxLength' => '90')) }}
			    <small class="error">Your name is required</small>
			</div>
			<div class="small-12 columns">
			    {{ Form::text('previous_name', '', array('id' => 'previous_name', 'placeholder' => 'Enter any Previous Names', 'MaxLength' => '90')) }}
			</div>
		    </div>
		    <div class="row">
			<div class="large-3 columns">
			    <span style="margin-top:20px;">{{ Form::label('date_of_birth', 'Date of Birth') }}</span>
			</div>
			<div class="large-3 columns">
			    {{ Form::select('date_of_birth', array('01' => '01','02' => '02','03' => '03','04' => '04','05' => '05','06' => '06','07' => '07','08' => '08','09' => '09','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31',)) }}
			</div>
			<div class="large-3 columns">
			    {{ Form::selectMonth('month') }}
			</div>
			<div class="large-3 columns">
			    {{ Form::selectYear('year', date('Y')-100, date('Y')-18) }}
			</div>
		    </div>
		    <div class="row">
			<div class="small-12 columns">
			    {{ Form::text('birth_place', '', array('id' => 'birth_place', 'placeholder' => 'Enter your Place of Birth', 'required', 'MaxLength' => '90')) }}
			    <small class="error">Place of birth is required and must be a valid city</small>
			</div>
		  </div>
		  <div class="row">
		    <div class="medium-6 columns">
			    <span style="margin-top:20px;">{{ Form::label('marital_status', 'Marital Status') }}</span>
			</div>
			<div class="medium-6 columns">
			    {{ Form::select('marital_status', array('default' => 'Please Select', 'married' => 'Married','cohabiting' => 'Cohabiting','single' => 'Single','divorced' => 'Divorced','widowed' => 'Widowed')) }}
			</div>
		  </div>
			<div class="row">
		    <div class="medium-6 columns">
			    <span style="margin-top:20px;">{{ Form::label('residential_status', 'Residential Status') }}</span>
  			</div>
  			<div class="medium-6 columns">
  			    {{ Form::select('residential_status', array('default' => 'Please Select', 'home_owner' => 'Home Owner','renting' => 'Renting','living_with_parents' => 'Living with Parents',)) }}
  			</div>
		  </div>
		  
		  
  		<div class="row">
        <div class="small-6 columns">
          <p>Number of dependants</p>
        </div>
        <div class="small-6 columns">
      		{{ Form::text('number_of_dependants', '', array('id' => 'number_of_dependants', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
          <small class="error">Field required, using numbers only [0-9]</small>
        </div>
      </div>
		  
		  <div class="row">
		    <div class="small-12 columns">
            <p>How long have you been resident in Jersey / Guernsey / IOM?</p>
            <div class="row collapse">
              <div class="small-2 columns">
                {{ Form::text('residency_length_juristiction_years', '', array('id' => 'residency_length_juristiction_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
            	<div class="small-3 columns">
                 <span class="postfix">Years</span>
              </div>
              <div class="small-2 columns">
                  <p>&nbsp;</p>
              </div>
              <div class="small-2 columns">
                  {{ Form::text('residency_length_juristiction_months', '', array('id' => 'residency_length_juristiction_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
              <div class="small-3 columns">
                  <span class="postfix">Months</span>
              </div>
          </div>
		    </div>
  		</div>

		  
	    </fieldset>
{{-- End personal details --}}

{{-- Start contact details --}}
	<fieldset>
	    <legend><strong>(3/8)</strong> Contact Details</legend>
	    <div class="row">
	    <div class="small-12 columns">
			    {{ Form::email('email', '', array('id' => 'email_address', 'placeholder' => 'Enter your Email', 'required', 'MaxLength' => '90')) }}
			    <small class="error">Email is required and must be a valid email address</small>
			</div>
			<div class="small-12 columns">
			    {{ Form::text('telephone', '', array('id' => 'telephone', 'placeholder' => 'Enter your Phone Number', 'pattern' => '[0-9]', 'required', 'MaxLength' => '11')) }}
			    <small class="error">Your phone number is required, using numbers only [0-9]</small>
			</div>
		<div class="small-12 columns">
		    {{ Form::text('address_line_1', '', array('placeholder' => 'Enter your Address', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
		    <small class="error">Please enter the your address</small>
		</div>
		<div class="small-12 columns">
		    {{ Form::text('address_line_2', '', array('placeholder' => 'Enter your Street', 'MaxLength' => '90')) }}
		</div>
		<div class="small-12 columns">
		    {{ Form::text('parish_county', '', array('placeholder' => 'Enter your Parish / County', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
		    <small class="error">Please enter your parish or county</small>
		</div>
		<div class="small-12 large-8 columns">
		    {{ Form::select('jurisdiction', array('jersey' => 'Jersey', 'guernsey' => 'Guernsey', 'isle_of_man' => 'Isle of Man')) }}
		</div>
		<div class="small-12 large-4 columns">
		    {{ Form::text('postcode', '', array('placeholder' => 'Postcode', 'required pattern' => 'alpha_numeric', 'MaxLength' => '8')) }}
		    <small class="error">Please enter your postcode</small>
		</div>
		    <div class="small-12 columns">
            <p>Time at current address</p>
            <div class="row collapse">
              <div class="small-2 columns">
                {{ Form::text('current_address_length_years', '', array('id' => 'current_address_length_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
            	<div class="small-3 columns">
                 <span class="postfix">Years</span>
              </div>
              <div class="small-2 columns">
                  <p>&nbsp;</p>
              </div>
              <div class="small-2 columns">
                  {{ Form::text('current_address_length_months', '', array('id' => 'current_address_length_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
              <div class="small-3 columns">
                  <span class="postfix">Months</span>
              </div>
          </div>
		    </div>
          
		    <div class="small-12 columns">
		    <hr>
		    <p>Previous address details</p>
			{{ Form::text('prev_address_line_1', '', array('placeholder' => 'Enter Previous Address', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 columns">
			{{ Form::text('prev_address_line_2', '', array('placeholder' => 'Enter Previous Street', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 columns">
			{{ Form::text('prev_parish_county', '', array('placeholder' => 'Enter Previous Parish / County', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 large-8 columns">
		    {{ Form::text('prev_jurisdiction', '', array('placeholder' => 'Enter Previous Country / Island', 'pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 large-4 columns">
        {{ Form::text('prev_postcode', '', array('placeholder' => 'Postcode', 'MaxLength' => '8')) }}
		    </div>
		        
		    <div class="small-12 columns">
            <p>Time at previous address</p>
            <div class="row collapse">
              <div class="small-2 columns">
                {{ Form::text('prev_address_length_years', '', array('id' => 'prev_address_length_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
            	<div class="small-3 columns">
                 <span class="postfix">Years</span>
              </div>
              <div class="small-2 columns">
                  <p>&nbsp;</p>
              </div>
              <div class="small-2 columns">
                  {{ Form::text('prev_address_length_months', '', array('id' => 'prev_address_length_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
              <div class="small-3 columns">
                  <span class="postfix">Months</span>
              </div>
          </div>
		</div>
	</fieldset>
{{-- End contact details --}}

{{-- Employment details --}}
	<fieldset>
	    <legend><strong>(4/8)</strong> Employment Details</legend>
	    <div class="row">
    <div class="small-12 columns">
		    {{ Form::text('occupation', '', array('id' => 'occupation', 'placeholder' => 'Enter your Occupation' , 'required', 'MaxLength' => '90')) }}
		    <small class="error">Please enter the your occupation</small>
		</div>
		<div class="small-12 columns">
		    {{ Form::text('current_employer', '', array('id' => 'current_employer', 'placeholder' => 'Enter your Current Employer' , 'required', 'MaxLength' => '90')) }}
		    <small class="error">Please enter the your current employer</small>
		</div>
		
		<div class="small-12 columns">
      <p>Time at current employer</p>
      <div class="row collapse">
        <div class="small-2 columns">
            {{ Form::text('time_current_employer_years', '', array('id' => 'time_current_employer_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
        </div>
        <div class="small-3 columns">
            <span class="postfix">Years</span>
        </div>
        <div class="small-2 columns">
            <p>&nbsp;</p>
        </div>
        <div class="small-2 columns">
            {{ Form::text('time_current_employer_months', '', array('id' => 'time_current_employer_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
        </div>
        <div class="small-3 columns">
            <span class="postfix">Months</span>
        </div>
    </div>
    
    <div class="row">
  		<div class="small-12 columns">
    		<hr>
    		<p>Previous employer</p>
  			{{ Form::text('previous_employer', '', array('id' => 'previous_employer', 'placeholder' => 'Enter your Previous Employer', 'MaxLength' => '90')) }}
  		</div>
  		
  		<div class="small-12 columns">
        <p>Time at previous employer</p>
        <div class="row collapse">
          <div class="small-2 columns">
              {{ Form::text('time_previous_employer_years', '', array('id' => 'time_previous_employer_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
          </div>
          <div class="small-3 columns">
              <span class="postfix">Years</span>
          </div>
          <div class="small-2 columns">
              <p>&nbsp;</p>
          </div>
          <div class="small-2 columns">
              {{ Form::text('time_previous_employer_months', '', array('id' => 'time_previous_employer_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
          </div>
          <div class="small-3 columns">
              <span class="postfix">Months</span>
          </div>
      </div>
    
		</div>
		
	</fieldset>
{{-- End employment details --}}

{{-- Reason for Loan --}}
<fieldset>
    <legend><strong>(5/8)</strong> Reason for application</legend>
    <div class="row">
	<div class="small-12 columns">
	    {{ Form::text('reason_for_loan', '', array('placeholder' => 'Enter reason for loan', 'required pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
	    <p style="font-size:12px;">*please note that if you are applying for a holiday the maximum loan term will be 24 months.</p>
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
        <p>Basic income</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('basic_income', '', array('id' => 'basic_income', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
        <small class="error">Field required, using numbers only [0-9]</small>
      </div>
    </div>
    <div class="row collapse">
      <div class="small-7 columns">
        <p>Other income</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('other_income', '', array('id' => 'other_income', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
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
        <p>Food / general living</p>
      </div>
      <div class="small-1 columns"><p>&nbsp;</p>
      </div>
      <div class="small-1 columns">
        <span class="prefix">&pound;</span>
      </div>
      <div class="small-3 columns">
    		{{ Form::text('food_general_living', '', array('id' => 'food_general_living', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
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
		    <div class="large-6 columns">
			    <span style="margin-top:20px;">{{ Form::label('preferred_contact', 'Preferred method of contact') }}</span>
  			</div>
  			<div class="small-6 columns">
  			    {{ Form::select('preferred_contact', array('email' => 'Email','phone' => 'Phone',)) }}
  			</div>
		  </div>
	    <div class="row">
	      
    		<hr />
    		<div class="large-12 columns">
    		    <p>I have used a pay day lending company more than once in the last 3 months</p>
    		    <label for="radio5">{{ Form::radio('used_payday_lending', 'yes', '', array('required', 'id' => 'radio5')) }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
    		    <label for="radio6">{{ Form::radio('used_payday_lending', 'no', '', array('required', 'id' => 'radio6')) }}&nbsp;&nbsp;No</label>
    		</div>
    		<hr />
    		<div class="large-12 columns">
    		    <p>I have been a resident in Jersey / Guernsey or Isle of Man for over 3 years</p>
    		    <label for="radio11">{{ Form::radio('resident_for_3_years', 'yes', '', array('required', 'id' => 'radio11')) }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
    		    <label for="radio12">{{ Form::radio('resident_for_3_years', 'no', '', array('required', 'id' => 'radio12')) }}&nbsp;&nbsp;No</label>
    		</div>
    		<hr />
    		<div class="large-12 columns">
    		    <p>To the best of my knowledge, I have good credit history</p>
    		    <label for="radio13">{{ Form::radio('good_credit_history', 'yes', '', array('required', 'id' => 'radio13')) }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
    		    <label for="radio14">{{ Form::radio('good_credit_history', 'no', '', array('required', 'id' => 'radio14')) }}&nbsp;&nbsp;No</label>
    		</div>
    		<hr />
    		<div class="large-12 columns">
    		    <p>I can provide 3 months of bank statements that are free of any unpaid cheques, standing orders or direct debits</p>
    		    <label for="radio15">{{ Form::radio('bank_statements', 'yes', '', array('required', 'id' => 'radio15')) }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
    		    <label for="radio16">{{ Form::radio('bank_statements', 'no', '', array('required', 'id' => 'radio16')) }}&nbsp;&nbsp;No</label>
    		</div>
	    </div>
	</fieldset>

{{-- Terms --}}
<fieldset>
    <legend>Agreement Terms</legend>
    <div class="row">
	<div class="small-12 columns">
	    <p>Please check the box below to confirm that you have read and accepted the <a href="/privacy-policy/">privacy statement</a> and that you understand that applying for a Qi Finance Mortgage will mean you may be subject to a credit check with a trusted 3rd party company, your details may also be passed onto a third party lender in the case of brokered loans.</p>
	</div>
	<div class="small-12 columns">
	        <label for="radio17">{{ Form::radio('agreement', 'yes', '', array('required', 'id' => 'radio17')) }}&nbsp;&nbsp;I understand and agree to the above terms.</label>
	</div>
	<hr />
	<div class="small-12 columns">
	    {{ Form::submit('Apply', array('class' => 'button small radius', 'id' => 'submitButton', 'style' => 'float:right;')) }}
	</div>
    </div>
</fieldset>


<script src="{{ url('js/loan_payment.js') }}"></script>
{{ Form::close() }}


