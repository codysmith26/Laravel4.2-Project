<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Business Loan Enquiry</title>
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
					<p>Someone has applied for a Business loan, the details are below:</p>
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
                    <p><b>Loan Amount:</b>&nbsp;{{ $_POST['amount']}}</p>
                    <p><b>Loan Term:</b>&nbsp;{{ $_POST['term']}}</p>
                    <hr />
                    <h3>Business Details</h3>
                    <p><b>Company Name:</b>&nbsp;{{ $_POST['company_name']}}</p>
                    <p><b>Address:</b>&nbsp;{{ $_POST['address_line_1']}}</p>
                    <p><b>Street:</b>&nbsp;{{ $_POST['address_line_2']}}</p>
                    <p><b>Parish/County:</b>&nbsp;{{ $_POST['parish_county']}}</p>
                    <p><b>Jurisdiction:</b>&nbsp;{{ $_POST['jurisdiction']}}</p>
                    <p><b>Postcode:</b>&nbsp;{{ $_POST['postcode']}}</p>
                    <hr />
                    <h3>Company Respresentative</h3>
                    <p><b>Name:</b>&nbsp;{{ $_POST['name']}}</p>
                    <p><b>Position:</b>&nbsp;{{ $_POST['position']}}</p>
                    <p><b>Email:</b>&nbsp;{{ $_POST['email']}}</p>
                    <p><b>Telephone:</b>&nbsp;{{ $_POST['telephone']}}</p>
                    <hr />
					<h3>Accountant</h3>
                    <p><b>Accountant Name:</b>&nbsp;{{ $_POST['accountant_name']}}</p>
                    <p><b>Accountant Number:</b>&nbsp;{{ $_POST['accountant_phone']}}</p>
                    <hr />
					<h3>Reason for application</h3>
                    <p><b>Reason for application:</b>&nbsp;{{ $_POST['reason_for_loan']}}</p>
                    
                    <hr />
                    <h3>Income Details</h3>
                    <p><b>Income:</b>&nbsp;{{ $_POST['income'] }}</p>
                    
                    <hr />
                    <h3>Expenditure Details</h3>
                    <p><b>Rent or mortgage:</b>&nbsp;{{ $_POST['rent_or_mortgage'] }}</p>
                    <p><b>Utilities:</b>&nbsp;{{ $_POST['utilities'] }}</p>
                    <p><b>Pensions and insurances:</b>&nbsp;{{ $_POST['pensions_and_insurances'] }}</p>
                    <p><b>Credit card payments:</b>&nbsp;{{ $_POST['credit_card_payments'] }}</p>
                    <p><b>Loan repayments:</b>&nbsp;{{ $_POST['loan_repayments'] }}</p>
                    <p><b>Other:</b>&nbsp;{{ $_POST['other'] }}</p>
                    
                    <hr />
                    <h3>Final Questions</h3>
                    <p><b>Consent for to contact your accountant:</b>&nbsp;{{ $_POST['accountant_consent']}}</p>
                    <p><b>Registered offices in Jersey, Guersney or the Isle of Man:</b>&nbsp;{{ $_POST['registered_office']}}</p>
                    <p><b>Authorised to make this application on behalf of the company:</b>&nbsp;{{ $_POST['authorised']}}</p>
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
