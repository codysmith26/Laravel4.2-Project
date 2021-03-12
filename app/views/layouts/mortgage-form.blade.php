{{ Form::open(array('url' => 'mortgage-success', 'data-abide')) }}

{{-- Start Mortgage Calculator --}}
<fieldset>
    <legend>Mortgage Calulator</legend>

{{-- Start Monthly Repayment --}}
    <div class="row collapse">
	<div class="medium-6 medium-uncentered small-8 small-centered columns">

	    <div id="repayment">
	        <div class="row">
                <div class="small-2 columns">
                  <span style="background:none;box-shadow:none;border:none;font-size:40px;height:50px;font-weight:900;text-shadow:#fff 1px 1px 1px;color:#666666;">&pound;</span>
                </div>
                <div class="small-10 columns">
                  <input type="text" id="repayment-label" name="" style="margin:0 0 0 -10px;background:none;box-shadow:none;border:none;font-size:40px;height:50px;font-weight:900;text-shadow:#fff 1px 1px 1px;color:#666666;padding-top:0px;padding-left:0px;padding-right:0px;" value="0.00">
                </div>
            </div>
	    </div>
	    <span><p>*Monthly Capital Repayments</p></span>
	</div>
{{-- Start Monthly Interest --}}
	<div class="medium-6 medium-uncentered small-8 small-centered columns">
	    <div id="interest">
	        <div class="row">
                <div class="small-2 columns">
                  <span style="background:none;box-shadow:none;border:none;font-size:40px;height:50px;font-weight:900;text-shadow:#fff 1px 1px 1px;color:#666666;">&pound;</span>
                </div>
                <div class="small-10 columns">
                  <input type="text" id="repayment-label" style="margin:0 0 0 -10px;background:none;box-shadow:none;border:none;font-size:40px;height:50px;font-weight:900;text-shadow:#fff 1px 1px 1px;color:#666666;padding-top:0px;padding-left:0px;padding-right:0px;" value="0.00">
                </div>
            </div>
	    </div>
	    <span><p>*Interest Only Repayments<br /><small>(if you opted for an interest only mortgage)</small></p></span>
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
	    <span style="">Deposit</span>&nbsp;<span style="" id="depositDisplay">&pound;0</span>
	    <small><span style="">(Percentage of House Price</span>&nbsp;<span style="" id="percentDisplay">0</span>%)</small><br /><br />
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

{{-- Start Disclaimer --}}
    <div class="row collapse">
      <p>*Example monthly repayments are based on an interest rate of 5% APR. They are to be used as guidance only. All mortgages are subject to status.</p>
      <p>Don’t worry if you’re not sure how much you want to borrow. Just leave sliders at zero and complete the form below. We’ll be in touch to talk you through the rest of the process.</p>
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
		    priceDisplay.text("£" + addCommas(val));
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
		    depositDisplay.text("£" + addCommas(val));
		    depositValue = val;
		    total();
	    }

	    price.slider({value:195000, min: 10000, max: 2000000, step: 10000, slide: updateprice});
	    duration.slider({value:11, min: 10, max: 35, slide: updateDuration});
	    deposit.slider({value:40000, min: 20000, max: 1000000, step: 5000, slide: updateDeposit});


	    function total()
	    {
		    var
		    d = durationValue * 12;
		    r = rateValue / 1200;
		    mortgageValue = priceValue - depositValue;
		    $("#repayment input").val(addCommas(((mortgageValue * (r * Math.pow(1 + r, d))) / (Math.pow(1 + r, d) -1 )).toFixed(0)));
		    $("#interest input").val(addCommas((((mortgageValue * rateValue) / 12) / 100).toFixed(0)));
		    $("#percentDisplay").text(((depositValue / priceValue) * 100).toFixed(0));
	    }

	    function addCommas(nStr)
	    {
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;

		while (rgx.test(x1)) {
		    x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}

		return x1 + x2;
	    }
	});


    </script>
{{-- End mortgage calculator --}}



{{-- Start Application Type details --}}
	<fieldset>
	    <legend><strong>(1/6)</strong> Application Type</legend>
	    <div class="row">
		<div class="small-12 columns">
		    <p>Is this a sole or joint application?</p>
		    <label for="radio1">{{ Form::radio('sole_or_joint', 'sole', '', array('onclick' => 'ShowJointApplication(this.value);', 'required', 'id' => 'radio1')); }}&nbsp;&nbsp;Sole&nbsp;&nbsp;&nbsp;&nbsp;</label>
		    <label for="radio2">{{ Form::radio('sole_or_joint', 'joint', '', array('onclick' => 'ShowJointApplication(this.value);', 'required', 'id' => 'radio2')); }}&nbsp;&nbsp;Joint</label>
		</div>
<script>
function ShowJointApplication(val) {
    if (!document.getElementById('jointApplicationShow'))
    return;
    if (val != 'joint')
	document.getElementById('jointApplicationShow').style.display = 'none';
    else
     	document.getElementById('jointApplicationShow').style.display = 'inline';
}
</script>
	    </div>
	</fieldset>
{{-- End Application Type details --}}

{{-- Start personal details --}}
	    <fieldset>
		<legend><strong>(2/6)</strong> Personal Details - Primary applicant</legend>
		  <div class="row">
  			<div class="small-12 columns">
  			    {{ Form::text('name', '', array('id' => 'name', 'placeholder' => 'Enter Full Name', 'required', 'MaxLength' => '90')) }}
  			    <small class="error">Your name is required</small>
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
			<div class="small-12 columns">
			    {{ Form::email('email', '', array('id' => 'email_address', 'placeholder' => 'Enter your Email', 'required', 'MaxLength' => '90')) }}
			    <small class="error">Email is required and must be a valid email address</small>
			</div>
			<div class="small-12 columns">
			    {{ Form::text('telephone', '', array('id' => 'telephone', 'placeholder' => 'Enter your Phone Number', 'pattern' => '[0-9]', 'MaxLength' => '11', 'required')) }}
			    <small class="error">Your phone number is required, using only numbers [0-9]</small>
			</div>
		    </div>
	    </fieldset>
{{-- End personal details --}}

{{-- Start contact details --}}
	<fieldset>
	    <legend><strong>(3/6)</strong> Address details - Primary applicant</legend>
	    <div class="row">
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
		<div class="small-12 columns">
		    <p>Have you lived at this address for more than 3 years?</p>
		    <label for="radio3">{{ Form::radio('years_at_address', 'yes', '', array('onclick' => 'ShowPrevAddress(this.value);', 'required', 'id' => 'radio3')); }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;</label>
		    <label for="radio4">{{ Form::radio('years_at_address', 'no', '', array('onclick' => 'ShowPrevAddress(this.value);', 'required', 'id' => 'radio4')); }}&nbsp;&nbsp;No</label>

		</div>
		<div id="prevAddressShow" style="display:none;">
		   <div class="small-12 columns">
		        <hr>
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

		</div>
<script>
function ShowPrevAddress(val) {
    if (!document.getElementById('prevAddressShow'))
    return;
    if (val != 'no')
	    document.getElementById('prevAddressShow').style.display = 'none';
    else
     	document.getElementById('prevAddressShow').style.display = 'inline';
}
</script>
	    </div>
	</fieldset>
{{-- End contact details --}}

{{-- Start employment details --}}
	<fieldset>
	    <legend><strong>(4/6)</strong> Employment Details - Primary applicant</legend>
	    <div class="row">
		<div class="small-12 columns">
		    <p>Employment Status</p>
		    <div class="row collapse">
                <div class="large-3 small-6 columns">
                    <label for="radio5">{{ Form::radio('employment_status', 'employed', '', array('onclick' => 'EmploymentStatus(this.value);', 'required', 'id' => 'radio5')); }}&nbsp;&nbsp;Employed</label>
                </div>
                <div class="large-4 small-6 columns">
                    <label for="radio6">{{ Form::radio('employment_status', 'self_employed', '', array('onclick' => 'EmploymentStatus(this.value);', 'required', 'id' => 'radio6')); }}&nbsp;&nbsp;Self&nbsp;Employed</label>
                </div>
                <div class="large-5 small-6 columns">
                    <label for="radio7">{{ Form::radio('employment_status', 'student', '', array('onclick' => 'EmploymentStatus(this.value);', 'required', 'id' => 'radio7')); }}&nbsp;&nbsp;Student</label>
                </div>
                <div class="large-3 small-6 columns">
                    <label for="radio8">{{ Form::radio('employment_status', 'retired', '', array('onclick' => 'EmploymentStatus(this.value);', 'required', 'id' => 'radio8')); }}&nbsp;&nbsp;Retired</label>
                </div>
                <div class="large-9 small-12 columns">
                    <label for="radio9">{{ Form::radio('employment_status', 'other', '', array('onclick' => 'EmploymentStatus(this.value);', 'required', 'id' => 'radio9')); }}&nbsp;&nbsp;Other</label>
                </div>
            </div>
		</div>

		<div class="small-12 columns" id="employmentStatusEmployed" style="display:none;">
		    <div class="row collapse">
		        <div class="small-12 columns">
    			    {{ Form::text('employer_name', '', array('id' => 'employer_name', 'placeholder' => 'Employer Name', 'MaxLength' => '90')) }}
    		    </div>
    		    <div class="small-12 columns">
    			    {{ Form::text('employment_occupation', '', array('id' => 'employment_occupation', 'placeholder' => 'Occupation', 'MaxLength' => '90')) }}
    		    </div>
                <div class="small-12 columns">
                    <p>Length of Employment?</p>
                    <div class="row collapse">
                        <div class="small-2 columns">
                			{{ Form::text('employment_length_years', '', array('id' => 'employment_length_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Years</span>
                        </div>
                        <div class="small-2 columns">
                            <p>&nbsp;</p>
                        </div>
                        <div class="small-2 columns">
                			{{ Form::text('employment_length_months', '', array('id' => 'employment_length_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Months</span>
                        </div>
                    </div>
                </div>
            </div>
		</div>

		<div id="employmentStatusSelfEmployed" style="display:none;">

    		    <div class="small-12 columns">
    			    {{ Form::text('self_employment_accountant', '', array('id' => 'self_employment_accountant', 'placeholder' => 'Enter Name of Accountant', 'MaxLength' => '90')) }}
    		    </div>
    		    <div class="small-12 columns">
        		    <p>Are you happy for us to contact your accountant directly for relevant financial information?</p>
    		        {{ Form::radio('self_employment_contact_accountant', 'yes', ''); }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;
        		    {{ Form::radio('self_employment_contact_accountant', 'no', ''); }}&nbsp;&nbsp;No
        		    {{ Form::radio('self_employment_contact_accountant', 'notapplicable', '', array('class' => 'hide', 'checked')) }}
        		</div>
    		    <div class="small-12 columns">
                    <p>How long have you been trading?</p>
                    <div class="row collapse">
                        <div class="small-2 columns">
                			{{ Form::text('self_employment_trading_years', '', array('id' => 'self_employment_trading_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Years</span>
                        </div>
                        <div class="small-2 columns">
                            <p>&nbsp;</p>
                        </div>
            		    <div class="small-2 columns">
                			{{ Form::text('self_employment_trading_months', '', array('id' => 'self_employment_trading_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Months</span>
                        </div>
                    </div>
    		    </div>

                <div class="small-12 columns">
                    <hr>
        		    <p>Please note: If self employed we will normally require 2 years' audited accounts</p>
                </div>
		</div>

		<div id="employmentStatusOther" style="display:none;">
		    <div class="small-12 columns">
			    {{ Form::text('other_status', '', array('id' => 'other_status', 'placeholder' => 'Please Specify', 'MaxLength' => '90')) }}
		    </div>
		</div>
	   </div>
<script>
function EmploymentStatus(val) {
    if (!document.getElementById('employmentStatusOther'))
    return;
    if (val != 'other')
	    document.getElementById('employmentStatusOther').style.display = 'none';
    else
     	document.getElementById('employmentStatusOther').style.display = 'inline';

    if (!document.getElementById('employmentStatusEmployed'))
    return;
    if (val != 'employed')
	    document.getElementById('employmentStatusEmployed').style.display = 'none';
	else
     	document.getElementById('employmentStatusEmployed').style.display = 'inline';

    if (!document.getElementById('employmentStatusSelfEmployed'))
    return;
    if (val != 'self_employed')
	    document.getElementById('employmentStatusSelfEmployed').style.display = 'none';
	else
     	document.getElementById('employmentStatusSelfEmployed').style.display = 'inline';
}

function EmploymentLength(val) {
    if (!document.getElementById('prevEmployment'))
    return;
    if (val != 'no')
	    document.getElementById('prevEmployment').style.display = 'none';
    else
     	document.getElementById('prevEmployment').style.display = 'inline';
}
</script>
	</fieldset>
{{-- End employment details --}}

{{-- Start primary income details --}}
	<fieldset>
	    <legend><strong>(5/6)</strong> Income Details - Primary applicant</legend>
		    <div class="row collapse">
                <div class="small-7 columns">
                    <p>Income from salary</p>
                </div>
                <div class="small-1 columns"><p>&nbsp;</p>
                </div>
    		    <div class="small-1 columns">
                  <span class="prefix">&pound;</span>
                </div>
                <div class="small-3 columns">
    			{{ Form::text('basic_salary', '', array('id' => 'basic_salary', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
			    <small class="error">Field required, using numbers only [0-9]</small>
    		    </div>
		    </div>
		    <div class="row collapse">
                <div class="small-7 columns">
                    <p>Any other income</p>
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
	</fieldset>
{{-- End primary income details --}}

{{-- Start primary applicant data --}}
	<fieldset>
	    <legend><strong>(6/6)</strong> Outgoings - Primary applicant</legend>
	    <div class="row collapse">
		    <div class="small-7 columns">
		      <p>Total monthly Outgoings<br>(e.g. rent, other loans, child maintenance, school fees)</p>
            </div>
            <div class="small-1 columns"><p>&nbsp;</p>
            </div>
            <div class="small-1 columns">
                  <span class="prefix">&pound;</span>
            </div>
            <div class="small-3 columns">
                    {{ Form::text('outgoings', '', array('id' => 'outgoings', 'placeholder' => 'Enter', 'required', 'pattern' => '[0-9]', 'MaxLength' => '7')) }}
			    <small class="error">Field required, using numbers only [0-9]</small>
            </div>
        </div>
	</fieldset>
{{-- End primary applicant data --}}

{{-- Start Second Applicant details --}}
<div id="jointApplicationShow" style="display:none;">
    <h4><br>Second Applicant</h4>
    <hr>

{{-- Start Second Applicant personal details --}}
	    <fieldset>
		<legend><strong>Additional (1/5)</strong> Personal Details - Secondary applicant</legend>
		    <div class="row">
			<div class="small-12 columns">
			    {{ Form::text('second_applicant_name', '', array('id' => 'second_applicant_name', 'placeholder' => 'Enter Full Name', 'MaxLength' => '90')) }}
			</div>
		    </div>
		    <div class="row">
			<div class="large-3 columns">
			    <span style="margin-top:20px;">{{ Form::label('second_applicant_date_of_birth', 'Date of Birth') }}</span>
			</div>
			<div class="large-3 columns">
			    {{ Form::select('second_applicant_date_of_birth', array('01' => '01','02' => '02','03' => '03','04' => '04','05' => '05','06' => '06','07' => '07','08' => '08','09' => '09','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31',)) }}
			</div>
			<div class="large-3 columns">
			    {{ Form::selectMonth('second_applicant_month') }}
			</div>
			<div class="large-3 columns">
			    {{ Form::selectYear('second_applicant_year', date('Y')-100, date('Y')-18) }}
			</div>
		    </div>
		    <div class="row">
			<div class="small-12 columns">
			    {{ Form::text('second_applicant_birth_place', '', array('id' => 'second_applicant_birth_place', 'placeholder' => 'Enter your Place of Birth', 'MaxLength' => '90')) }}
			</div>
			<div class="small-12 columns">
			    {{ Form::email('second_applicant_email', '', array('id' => 'email_address', 'placeholder' => 'Enter your Email', 'MaxLength' => '90')) }}
			</div>
			<div class="small-12 columns">
			    {{ Form::text('second_applicant_telephone', '', array('id' => 'second_applicant_telephone', 'placeholder' => 'Enter your Phone Number', 'pattern' => '[0-9]', 'MaxLength' => '11')) }}
                <small class="error">Please enter only numbers [0-9]</small>
			</div>
		    </div>
	    </fieldset>
{{-- End Second Applicant personal details --}}

{{-- Start Second Applicant contact details --}}
	<fieldset>
	    <legend><strong>Additional (2/5)</strong> Address details - Secondary applicant</legend>
	    <div class="row">
		<div class="small-12 columns">
		    {{ Form::text('second_applicant_address_line_1', '', array('placeholder' => 'Enter Address', 'MaxLength' => '90')) }}
		</div>
		<div class="small-12 columns">
		    {{ Form::text('second_applicant_address_line_2', '', array('placeholder' => 'Enter Street', 'MaxLength' => '90')) }}
		</div>
		<div class="small-12 columns">
		    {{ Form::text('second_applicant_parish_county', '', array('placeholder' => 'Enter Parish / County', 'MaxLength' => '90')) }}
		</div>
		<div class="small-12 large-8 columns">
		    {{ Form::select('second_applicant_jurisdiction', array('jersey' => 'Jersey', 'guernsey' => 'Guernsey', 'isle_of_man' => 'Isle of Man')) }}
		</div>
		<div class="small-12 large-4 columns">
		    {{ Form::text('second_applicant_postcode', '', array('placeholder' => 'Postcode', 'MaxLength' => '8')) }}
		</div>
		<div class="small-12 columns">
		    <p>Have you lived at this address for more than 3 years?</p>
		    {{ Form::radio('second_applicant_years_at_address', 'yes', '', array('onclick' => 'ShowPrevAddressSecond(this.value);')); }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;
		    {{ Form::radio('second_applicant_years_at_address', 'no', '', array('onclick' => 'ShowPrevAddressSecond(this.value);')); }}&nbsp;&nbsp;No
            {{ Form::radio('second_applicant_years_at_address', 'notapplicable', '', array('class' => 'hide', 'checked')) }}
		</div>
		<div id="prevAddressShowSecond" style="display:none;">
		    <div class="small-12 columns">
		        <hr>
            <p>Time at current address</p>
            <div class="row collapse">
              <div class="small-2 columns">
                {{ Form::text('second_applicant_current_address_length_years', '', array('id' => 'second_applicant_current_address_length_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
            	<div class="small-3 columns">
                 <span class="postfix">Years</span>
              </div>
              <div class="small-2 columns">
                  <p>&nbsp;</p>
              </div>
              <div class="small-2 columns">
                  {{ Form::text('second_applicant_current_address_length_months', '', array('id' => 'second_applicant_current_address_length_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
              <div class="small-3 columns">
                  <span class="postfix">Months</span>
              </div>
          </div>
        </div>
		    <div class="small-12 columns">
		    <hr>
			{{ Form::text('second_applicant_prev_address_line_1', '', array('placeholder' => 'Enter Previous Address', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 columns">
			{{ Form::text('second_applicant_prev_address_line_2', '', array('placeholder' => 'Enter Previous Street', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 columns">
			{{ Form::text('second_applicant_prev_parish_county', '', array('placeholder' => 'Enter Previous Parish / County', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 large-8 columns">
		    {{ Form::text('second_applicant_prev_jurisdiction', '', array('placeholder' => 'Enter Previous Country / Island', 'pattern' => 'alpha_numeric', 'MaxLength' => '90')) }}
		    </div>
		    <div class="small-12 large-4 columns">
        {{ Form::text('second_applicant_prev_postcode', '', array('placeholder' => 'Postcode', 'MaxLength' => '8')) }}
		    </div>
		    <div class="small-12 columns">
            <p>Time at previous address</p>
            <div class="row collapse">
              <div class="small-2 columns">
                {{ Form::text('second_applicant_prev_address_length_years', '', array('id' => 'second_applicant_prev_address_length_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
            	<div class="small-3 columns">
                 <span class="postfix">Years</span>
              </div>
              <div class="small-2 columns">
                  <p>&nbsp;</p>
              </div>
              <div class="small-2 columns">
                  {{ Form::text('second_applicant_prev_address_length_months', '', array('id' => 'second_applicant_prev_address_length_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            	</div>
              <div class="small-3 columns">
                  <span class="postfix">Months</span>
              </div>
          </div>
        </div>

		    
		</div>
<script>
function ShowPrevAddressSecond(val) {
    if (!document.getElementById('prevAddressShowSecond'))
    return;
    if (val != 'no')
	    document.getElementById('prevAddressShowSecond').style.display = 'none';
    else
     	document.getElementById('prevAddressShowSecond').style.display = 'inline';
}
</script>
	    </div>
	</fieldset>
{{-- End Second Applicant contact details --}}

{{-- Start Second Applicant employment details --}}
	<fieldset>
	    <legend><strong>Additional (3/5)</strong> Employment Details - Secondary applicant</legend>
	    <div class="row">
		<div class="small-12 columns">
		    <p>Employment Status</p>
            <div class="row collapse">
                <div class="large-3 small-6 columns">
                    {{ Form::radio('second_applicant_employment_status', 'employed', '', array('onclick' => 'EmploymentStatusSecond(this.value);')); }}&nbsp;&nbsp;Employed
                </div>
                <div class="large-4 small-6 columns">
                    {{ Form::radio('second_applicant_employment_status', 'self_employed', '', array('onclick' => 'EmploymentStatusSecond(this.value);')); }}&nbsp;&nbsp;Self&nbsp;Employed
                </div>
                <div class="large-5 small-6 columns">
                    {{ Form::radio('second_applicant_employment_status', 'student', '', array('onclick' => 'EmploymentStatusSecond(this.value);')); }}&nbsp;&nbsp;Student
                </div>
                <div class="large-3 small-6 columns">
                    {{ Form::radio('second_applicant_employment_status', 'retired', '', array('onclick' => 'EmploymentStatusSecond(this.value);')); }}&nbsp;&nbsp;Retired
                </div>
                <div class="large-9 small-12 columns">
                    {{ Form::radio('second_applicant_employment_status', 'other', '', array('onclick' => 'EmploymentStatusSecond(this.value);')); }}&nbsp;&nbsp;Other
                    {{ Form::radio('second_applicant_employment_status', 'notapplicable', '', array('class' => 'hide', 'checked')) }}

                </div>
            </div>
		</div>

		<div class="small-12 columns" id="employmentStatusEmployedSecond" style="display:none;">
		    <div class="row collapse">
		        <div class="small-12 columns">
    			    {{ Form::text('second_applicant_employer_name', '', array('id' => 'second_applicant_employer_name', 'placeholder' => 'Employer Name', 'MaxLength' => '90')) }}
    		    </div>
    		    <div class="small-12 columns">
    			    {{ Form::text('second_applicant_employment_occupation', '', array('id' => 'second_applicant_employment_occupation', 'placeholder' => 'Occupation', 'MaxLength' => '90')) }}
    		    </div>
    		    <div class="small-12 columns">
                    <p>Length of Employment?</p>
                    <div class="row collapse">
                        <div class="small-2 columns">
                			{{ Form::text('second_applicant_employment_length_years', '', array('id' => 'second_applicant_employment_length_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Years</span>
                        </div>
                        <div class="small-2 columns">
                            <p>&nbsp;</p>
                        </div>
            		    <div class="small-2 columns">
                			{{ Form::text('second_applicant_employment_length_months', '', array('id' => 'second_applicant_employment_length_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Months</span>
                        </div>
                    </div>
                </div>
            </div>
		</div>

		<div id="employmentStatusSelfEmployedSecond" style="display:none;">

    		    <div class="small-12 columns">
    			    {{ Form::text('second_applicant_self_employment_accountant', '', array('id' => 'second_applicant_self_employment_accountant', 'placeholder' => 'Enter Name of Accountant', 'MaxLength' => '90')) }}
    		    </div>
    		    <div class="small-12 columns">
        		    <p>Are you happy for us to contact your accountant directly for relevant financial information?</p>
    		        {{ Form::radio('second_applicant_self_employment_contact_accountant', 'yes'); }}&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;
        		    {{ Form::radio('second_applicant_self_employment_contact_accountant', 'no'); }}&nbsp;&nbsp;No
        		    {{ Form::radio('second_applicant_self_employment_contact_accountant', 'notapplicable', '', array('class' => 'hide', 'checked')) }}

        		</div>
    		    <div class="small-12 columns">
                    <p>How long have you been trading?</p>
                    <div class="row collapse">
                        <div class="small-2 columns">
                			{{ Form::text('second_applicant_self_employment_trading_years', '', array('id' => 'second_applicant_self_employment_trading_years', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Years</span>
                        </div>
                        <div class="small-2 columns">
                            <p>&nbsp;</p>
                        </div>
            		    <div class="small-2 columns">
                			{{ Form::text('second_applicant_self_employment_trading_months', '', array('id' => 'second_applicant_self_employment_trading_months', 'placeholder' => 'No. of', 'MaxLength' => '2')) }}
            		    </div>
            		    <div class="small-3 columns">
                          <span class="postfix">Months</span>
                        </div>
                    </div>
    		    </div>
                <div class="small-12 columns">
                    <hr>
        		    <p>Please note: If self employed we will normally require 2 years' audited accounts</p>
                </div>
		</div>

		<div id="employmentStatusOtherSecond" style="display:none;">
		    <div class="small-12 columns">
			    {{ Form::text('second_applicant_other_status', '', array('id' => 'second_applicant_other_status', 'placeholder' => 'Please Specify', 'MaxLength' => '90')) }}
		    </div>
		</div>

	   </div>
<script>
function EmploymentStatusSecond(val) {
    if (!document.getElementById('employmentStatusOtherSecond'))
    return;
    if (val != 'other')
	    document.getElementById('employmentStatusOtherSecond').style.display = 'none';
    else
     	document.getElementById('employmentStatusOtherSecond').style.display = 'inline';

    if (!document.getElementById('employmentStatusEmployedSecond'))
    return;
    if (val != 'employed')
	    document.getElementById('employmentStatusEmployedSecond').style.display = 'none';
	else
     	document.getElementById('employmentStatusEmployedSecond').style.display = 'inline';

    if (!document.getElementById('employmentStatusSelfEmployedSecond'))
    return;
    if (val != 'self_employed')
	    document.getElementById('employmentStatusSelfEmployedSecond').style.display = 'none';
	else
     	document.getElementById('employmentStatusSelfEmployedSecond').style.display = 'inline';
}

function EmploymentLengthSecond(val) {
    if (!document.getElementById('prevEmploymentSecond'))
    return;
    if (val != 'no')
	    document.getElementById('prevEmploymentSecond').style.display = 'none';
    else
     	document.getElementById('prevEmploymentSecond').style.display = 'inline';
}
</script>
	</fieldset>
{{-- End Second Applicant employment details --}}

{{-- Start secondary income details --}}
	<fieldset>
	    <legend><strong>Additional (4/5)</strong> Income Details - Secondary applicant</legend>
		    <div class="row collapse">
                <div class="small-7 columns">
                    <p>Income from salary</p>
                </div>
                <div class="small-1 columns"><p>&nbsp;</p>
                </div>
    		    <div class="small-1 columns">
                  <span class="prefix">&pound;</span>
                </div>
                <div class="small-3 columns">
    			{{ Form::text('second_applicant_basic_salary', '', array('id' => 'second_applicant_basic_salary', 'placeholder' => 'Enter')) }}
    		    </div>
		    </div>
		    <div class="row collapse">
                <div class="small-7 columns">
                    <p>Any other income</p>
                </div>
                <div class="small-1 columns"><p>&nbsp;</p>
                </div>
    		    <div class="small-1 columns">
                  <span class="prefix">&pound;</span>
                </div>
                <div class="small-3 columns">
    			{{ Form::text('second_applicant_other_income', '', array('id' => 'second_applicant_other_income', 'placeholder' => 'Enter')) }}
    		    </div>
		    </div>
	</fieldset>
{{-- End secondary income details --}}

{{-- Start secondary applicant data --}}
	<fieldset>
	    <legend><strong>Additional (5/5)</strong> Outgoings - Secondary applicant</legend>
	    <div class="row collapse">
		    <div class="small-7 columns">
		      <p>Total monthly Outgoings<br>(e.g. rent, other loans, child maintenance, school fees)</p>
            </div>
            <div class="small-1 columns"><p>&nbsp;</p>
            </div>
            <div class="small-1 columns">
                  <span class="prefix">&pound;</span>
            </div>
            <div class="small-3 columns">
                    {{ Form::text('second_applicant_outgoings', '', array('id' => 'second_applicant_outgoings', 'placeholder' => 'Enter')) }}
            </div>
        </div>
	</fieldset>
{{-- End secondary applicant data --}}


</div>
{{-- End Second Applicant details --}}

{{-- Start Preferred Contact --}}
<fieldset>
	    <div class="row">
		    <div class="large-6 columns">
			    <span style="margin-top:20px;">{{ Form::label('preferred_contact', 'Preferred method of contact') }}</span>
  			</div>
  			<div class="small-6 columns">
  			    {{ Form::select('preferred_contact', array('email' => 'Email','phone' => 'Phone',)) }}
  			</div>
		  </div>
</fieldset>
{{-- End Preferred Contact --}}

{{-- Start Terms --}}
<fieldset>
    <legend>Agreement Terms</legend>
    <div class="row">
	<div class="small-12 columns">
	    <p>Please check the box below to confirm that you have read and accepted the <a href="/privacy-policy/">privacy statement</a> and that you understand that applying for a Qi Finance Mortgage will mean you may be subject to a credit check with a trusted 3rd party company, your details may also be passed onto a third party lender in the case of brokered mortgages.</p>
	</div>
	<div class="small-12 columns">
	    <label for="radio10">{{ Form::radio('agreement', 'yes', '', array('required', 'id' => 'radio10')) }}&nbsp;&nbsp;I&nbsp;/&nbsp;We understand and agree to the above terms.</label>
	</div>
	<hr />
	<div class="small-12 columns">
	    {{ Form::submit('Apply', array('class' => 'button small radius', 'id' => 'submitButton', 'style' => 'float:right;')) }}
	</div>
    </div>
</fieldset>
{{-- End Terms --}}

