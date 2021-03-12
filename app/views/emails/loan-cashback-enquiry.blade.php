<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Loan Cashback Enquiry</title>
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
					<p>Someone has applied for a loan cashback, the details are below:</p>
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
					<h3>Applicant Details</h3>
                    <p><b>Name:</b>&nbsp;{{ $_POST['name']}}</p>
                    <p><b>Email:</b>&nbsp;{{ $_POST['email']}}</p>
                    <p><b>Telephone:</b>&nbsp;{{ $_POST['telephone']}}</p>
                    <p><b>Address:</b>&nbsp;{{ $_POST['address_line_1'] }}</p>
                    <p><b>Street:</b>&nbsp;{{ $_POST['address_line_2'] }}</p>
                    <p><b>Parish/County:</b>&nbsp;{{ $_POST['parish_county'] }}</p>
                    <p><b>Jurisdiction:</b>&nbsp;{{ $_POST['jurisdiction'] }}</p>
                    <p><b>Postcode:</b>&nbsp;{{ $_POST['postcode'] }}</p>
                    <hr />
                    <h3>Loan Details</h3>
                    <p><b>Reason for loan:</b>&nbsp;{{ $_POST['reason_for_loan']}}</p>
                    <p><b>Monthly repayments:</b>&nbsp;{{ $_POST['monthly-repayments']}}</p>
                    <p><b>Lender:</b>&nbsp;{{ $_POST['loan-lender']}}</p>
                    <p><b>Total Borrowed:</b>&nbsp;{{ $_POST['total-borrowed']}}</p>
                    <p><b>Total Left to Repay:</b>&nbsp;{{ $_POST['left-to-repay']}}</p>
                    <p><b>Date loan repayments end:</b>&nbsp;{{ $_POST['repayment-month']}}&nbsp;{{ $_POST['repayment-year']}}</p>
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
