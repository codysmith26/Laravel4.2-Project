<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Mortgage Enquiry</title>
	<style type="text/css">
      html { height: 100%; background-color: #f2f2f2 }
      body { height: 100%; margin: 0; padding: 0; color: #666666; font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif; }
      .row { height: auto; width:700px; margin:0 auto }
      .buffer { height: 30px; width: 100% }
    </style>
</head>
<body>
	<div class="row">
		<div class="buffer"></div>
	</div>
	
	<div class="row">
		<table width="600px">
			<tr>
				<td>
					<p><span style="font-weight:700;font-size:22px;">Hello Qi Finance,</span></p>
					<p>Someone has applied for a Mortgage, the details are below:</p>
				</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<table width="600px">
			<tr style="background-color:#e6e6e6;">
				<td style="padding:15px;">
                    <h2>DETAILS</h2>
					<hr />
					<h3>Mortgage Type</h3>
                    <p><b>Sole or Joint:</b>&nbsp;{{ $_POST['sole_or_joint']}}</p>
                    <hr />
                    <h2>FIRST APPLICANT</h2>
					<hr />
                    <h3>Personal Details - First Applicant</h3>
                    <p><b>Name:</b>&nbsp;{{ $_POST['name']}}</p>
                    <p><b>Date of birth:</b>&nbsp;{{ $_POST['date_of_birth']}}/{{ $_POST['month']}}/{{ $_POST['year']}}</p>
                    <p><b>Place of birth:</b>&nbsp;{{ $_POST['birth_place']}}</p>
                    <p><b>Email:</b>&nbsp;{{ $_POST['email']}}</p>
                    <p><b>Telephone:</b>&nbsp;{{ $_POST['telephone']}}</p>
                    <hr>
                    <h3>Address Details - First Applicant</h3>
                    <p><b>Address:</b>&nbsp;{{ $_POST['address_line_1']}}</p>
                    <p><b>Street:</b>&nbsp;{{ $_POST['address_line_2']}}</p>
                    <p><b>Parish/County:</b>&nbsp;{{ $_POST['parish_county']}}</p>
                    <p><b>Jurisdiction:</b>&nbsp;{{ $_POST['jurisdiction']}}</p>
                    <p><b>Postcode:</b>&nbsp;{{ $_POST['postcode']}}</p>
                    <p><b>Lived at address for more than 3 years:</b>&nbsp;{{ $_POST['years_at_address']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if no:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Time at current address:</b>&nbsp;{{ $_POST['current_address_length_years']}}&nbsp;years&nbsp;{{ $_POST['current_address_length_months']}}&nbsp;months</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Address:</b>&nbsp;{{ $_POST['prev_address_line_1'] }}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Street:</b>&nbsp;{{ $_POST['prev_address_line_2'] }}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Parish/County:</b>&nbsp;{{ $_POST['prev_parish_county'] }}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jurisdiction:</b>&nbsp;{{ $_POST['prev_jurisdiction'] }}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Postcode:</b>&nbsp;{{ $_POST['prev_postcode'] }}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Time at previous address:</b>&nbsp;{{ $_POST['prev_address_length_years']}}&nbsp;years&nbsp;{{ $_POST['prev_address_length_months']}}&nbsp;months</p>
                    <hr>
                    <h3>Employment Details - First Applicant</h3>
                    <p><b>Employment Status:</b>&nbsp;{{ $_POST['employment_status']}}</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if employed:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Employer Name:</b>&nbsp;{{ $_POST['employer_name']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Occupation:</b>&nbsp;{{ $_POST['employment_occupation']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Employment Length:</b>&nbsp;{{ $_POST['employment_length_years']}}&nbsp;years&nbsp;{{ $_POST['employment_length_months']}}&nbsp;months</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if self-employed:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Accountant Name:</b>&nbsp;{{ $_POST['self_employment_accountant']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Happy for accountant to be contacted directly:</b>&nbsp;{{ $_POST['self_employment_contact_accountant']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Time Trading:</b>&nbsp;{{ $_POST['self_employment_trading_years']}}&nbsp;years&nbsp;{{ $_POST['self_employment_trading_months']}}&nbsp;months</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If other:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>if other:</b>&nbsp;{{ $_POST['other_status']}}</p>
                    <hr>
                    <h3>Income and Outgoings - First Applicant</h3>
                    <p><b>Income from salary:</b>&nbsp;&pound;{{ $_POST['basic_salary']}}</p>
                    <p><b>Any other income:</b>&nbsp;&pound;{{ $_POST['other_income']}}</p>
                    <p><b>Total Outgoings:</b>&nbsp;&pound;{{ $_POST['outgoings']}}</p>
                    <hr>
                    
                    <h2>SECOND APPLICANT</h2>
                    <hr>
                    <h3>Personal Details - Second Applicant</h3>
                    <p><b>Name:</b>&nbsp;{{ $_POST['second_applicant_name']}}</p>
                    <p><b>Date of birth:</b>&nbsp;{{ $_POST['second_applicant_date_of_birth']}}/{{ $_POST['second_applicant_month']}}/{{ $_POST['second_applicant_year']}}</p>
                    <p><b>Place of birth:</b>&nbsp;{{ $_POST['second_applicant_birth_place']}}</p>
                    <p><b>Email:</b>&nbsp;{{ $_POST['second_applicant_email']}}</p>
                    <p><b>Telephone:</b>&nbsp;{{ $_POST['second_applicant_telephone']}}</p>
                    <hr>
                    <h3>Address Details - Second Applicant</h3>
                    <p><b>Address:</b>&nbsp;{{ $_POST['second_applicant_address_line_1']}}</p>
                    <p><b>Street:</b>&nbsp;{{ $_POST['second_applicant_address_line_2']}}</p>
                    <p><b>Parish/County:</b>&nbsp;{{ $_POST['second_applicant_parish_county']}}</p>
                    <p><b>Jurisdiction:</b>&nbsp;{{ $_POST['second_applicant_jurisdiction']}}</p>
                    <p><b>Postcode:</b>&nbsp;{{ $_POST['second_applicant_postcode']}}</p>
                    <p><b>Lived at address for more than 3 years:</b>&nbsp;{{ $_POST['second_applicant_years_at_address']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if no:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Time at current address:</b>&nbsp;{{ $_POST['second_applicant_current_address_length_years']}}&nbsp;years&nbsp;{{ $_POST['second_applicant_current_address_length_months']}}&nbsp;months</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Address:</b>&nbsp;{{ $_POST['second_applicant_prev_address_line_1']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Street:</b>&nbsp;{{ $_POST['second_applicant_prev_address_line_2']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Parish/County:</b>&nbsp;{{ $_POST['second_applicant_prev_parish_county']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jurisdiction:</b>&nbsp;{{ $_POST['second_applicant_prev_jurisdiction']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Postcode:</b>&nbsp;{{ $_POST['second_applicant_prev_postcode']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Time at previous address:</b>&nbsp;{{ $_POST['second_applicant_prev_address_length_years']}}&nbsp;years&nbsp;{{ $_POST['second_applicant_prev_address_length_months']}}&nbsp;months</p>
                    <hr>
                    <h3>Employment Details - Second Applicant</h3>
                    <p><b>Employment Status:</b>&nbsp;{{ $_POST['second_applicant_employment_status']}}</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if employed:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Employer Name:</b>&nbsp;{{ $_POST['second_applicant_employer_name']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Occupation:</b>&nbsp;{{ $_POST['second_applicant_employment_occupation']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Employment Length:</b>&nbsp;{{ $_POST['second_applicant_employment_length_years']}}&nbsp;years&nbsp;{{ $_POST['second_applicant_employment_length_months']}}&nbsp;months</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if self-employed:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Accountant Name:</b>&nbsp;{{ $_POST['second_applicant_self_employment_accountant']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Happy for accountant to be contacted directly:</b>&nbsp;{{ $_POST['second_applicant_self_employment_contact_accountant']}}</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Time Trading:</b>&nbsp;{{ $_POST['second_applicant_self_employment_trading_years']}}&nbsp;years&nbsp;{{ $_POST['second_applicant_self_employment_trading_months']}}&nbsp;months</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If other:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>if other:</b>&nbsp;{{ $_POST['second_applicant_other_status']}}</p>
                    <hr>
                    <h3>Income and Outgoings - Second Applicant</h3>
                    <p><b>Income from salary:</b>&nbsp;&pound;{{ $_POST['second_applicant_basic_salary']}}</p>
                    <p><b>Any other income:</b>&nbsp;&pound;{{ $_POST['second_applicant_other_income']}}</p>
                    <p><b>Total Outgoings:</b>&nbsp;&pound;{{ $_POST['second_applicant_outgoings']}}</p>
                    <hr>
                    
                    <h2>PREFERRED CONTACT METHOD</h2>
                    <hr>
                    <p><b>Preferred Contact Method:</b>&nbsp;{{ $_POST['preferred_contact']}}</p>
                    
                    
				
			</tr>
		</table>
	</div>
	
	<div class="row">
		<div class="buffer"></div>
	</div>
	
</body>
</html>