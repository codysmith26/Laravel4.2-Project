<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Personal Loan Enquiry</title>
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
					<p>Someone has applied for a Personal loan, the details are below:</p>
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
          					<h3>Loan Details</h3>
                    <p><b>Loan Amount:</b> {{ $_POST['amount'] }}</p>
                    <p><b>Loan Term:</b>&nbsp;{{ $_POST['term'] }}</p>
                    <hr />
                    <h3>Personal Details</h3>
                    <p><b>Name:</b>&nbsp;{{ $_POST['name'] }}</p>
                    <p><b>Any Previous names:</b>&nbsp;{{ $_POST['previous_name'] }}</p>
                    <p><b>Date of birth:</b>&nbsp;{{ $_POST['date_of_birth'] }}&nbsp;{{ $_POST['month'] }}&nbsp;{{ $_POST['year'] }}</p>
                    <p><b>Place of birth:</b>&nbsp;{{ $_POST['birth_place'] }}</p>
                    <p><b>Marital Status:</b>&nbsp;{{ $_POST['marital_status'] }}</p>
                    <p><b>Residential Status:</b>&nbsp;{{ $_POST['residential_status'] }}</p>
                    <p><b>Number of dependants:</b>&nbsp;{{ $_POST['number_of_dependants'] }}</p>
                    <p><b>Length of residency in juristiction:</b>&nbsp;{{ $_POST['residency_length_juristiction_years']}}&nbsp;years&nbsp;{{ $_POST['residency_length_juristiction_months']}}&nbsp;months</p>
                  
                    <hr />
                    <h3>Contact Details</h3>
                    <p><b>Email:</b>&nbsp;{{ $_POST['email'] }}</p>
                    <p><b>Telephone:</b>&nbsp;{{ $_POST['telephone'] }}</p>
                    <p><b>Address:</b>&nbsp;{{ $_POST['address_line_1'] }}</p>
                    <p><b>Street:</b>&nbsp;{{ $_POST['address_line_2'] }}</p>
                    <p><b>Parish/County:</b>&nbsp;{{ $_POST['parish_county'] }}</p>
                    <p><b>Jurisdiction:</b>&nbsp;{{ $_POST['jurisdiction'] }}</p>
                    <p><b>Postcode:</b>&nbsp;{{ $_POST['postcode'] }}</p>
                    <p><b>Time at current address:</b>&nbsp;{{ $_POST['current_address_length_years']}}&nbsp;years&nbsp;{{ $_POST['current_address_length_months']}}&nbsp;months</p>
                    <br>
                    <p><b>Previous Address</b></p>
                    <p><b>Address:</b>&nbsp;{{ $_POST['prev_address_line_1'] }}</p>
                    <p><b>Street:</b>&nbsp;{{ $_POST['prev_address_line_2'] }}</p>
                    <p><b>Parish/County:</b>&nbsp;{{ $_POST['prev_parish_county'] }}</p>
                    <p><b>Jurisdiction:</b>&nbsp;{{ $_POST['prev_jurisdiction'] }}</p>
                    <p><b>Postcode:</b>&nbsp;{{ $_POST['prev_postcode'] }}</p>
                    <p><b>Time at previous address:</b>&nbsp;{{ $_POST['prev_address_length_years']}}&nbsp;years&nbsp;{{ $_POST['prev_address_length_months']}}&nbsp;months</p>
                    
                    <hr />
                    <h3>Employment Details</h3>
                    <p><b>Occupation:</b>&nbsp;{{ $_POST['occupation'] }}</p>
                    <p><b>Current employer:</b>&nbsp;{{ $_POST['current_employer'] }}</p>
                    <p><b>Time at current employer:</b>&nbsp;{{ $_POST['time_current_employer_years']}}&nbsp;years&nbsp;{{ $_POST['time_current_employer_months']}}&nbsp;months</p>
                    <p><b>Previous employer:</b>&nbsp;{{ $_POST['previous_employer'] }}</p>
                    <p><b>Time at previous employer:</b>&nbsp;{{ $_POST['time_previous_employer_years']}}&nbsp;years&nbsp;{{ $_POST['time_previous_employer_months']}}&nbsp;months</p>
                    
                    
                    <hr />
                    <h3>Reason for application</h3>
                    <p><b>Reason for application:</b>&nbsp;{{ $_POST['reason_for_loan'] }}</p>
                    
                    <hr />
                    <h3>Income Details</h3>
                    <p><b>Basic Income:</b>&nbsp;{{ $_POST['basic_income'] }}</p>
                    <p><b>Other Income:</b>&nbsp;{{ $_POST['other_income'] }}</p>
                    
                    <hr />
                    <h3>Expenditure Details</h3>
                    <p><b>Rent or mortgage:</b>&nbsp;{{ $_POST['rent_or_mortgage'] }}</p>
                    <p><b>Utilities:</b>&nbsp;{{ $_POST['utilities'] }}</p>
                    <p><b>Pensions and insurances:</b>&nbsp;{{ $_POST['pensions_and_insurances'] }}</p>
                    <p><b>Food / general living:</b>&nbsp;{{ $_POST['food_general_living'] }}</p>
                    <p><b>Credit card payments:</b>&nbsp;{{ $_POST['credit_card_payments'] }}</p>
                    <p><b>Loan repayments:</b>&nbsp;{{ $_POST['loan_repayments'] }}</p>
                    <p><b>Other:</b>&nbsp;{{ $_POST['other'] }}</p>
                    
                    <hr />
                    <h3>Final Questions</h3>
                    <p><b>Preferred Contact Method:</b>&nbsp;{{ $_POST['preferred_contact']}}</p>
                    <p><b>Used a pay day lending company more than once in the last 3 months:</b>&nbsp;{{ $_POST['used_payday_lending'] }}</p>

                    <p><b>Resident in Jersey/Guernsey or Isle of Man for over 3 years:</b>&nbsp;{{ $_POST['resident_for_3_years'] }}</p>
                    <p><b>Good credit history:</b>&nbsp;{{ $_POST['good_credit_history'] }}</p>
                    <p><b>Can provide 3 months of bank statements that are free of any unpaid cheques, standing orders or direct debits:</b>&nbsp;{{ $_POST['bank_statements'] }}</p>
                    <hr />
                </td>
			</tr>
		</table>
	</div>

	<div class="row">
		<div class="buffer"></div>
	</div>

</body>
</html>
