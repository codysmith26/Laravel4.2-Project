<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Quidsin Loan Cashback Application</title>
	<style type="text/css">
      html { height: 100%; background-color: #f2f2f2 }
      body { height: 100%; margin: 0; padding: 0; color: #666666; font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif; }
      #header { height: 55px; width: 100%; background-color: #ffffff; padding-top: 10px }
      .row { height: auto; width:700px; margin:0 auto }
      .buffer { height: 30px; width: 100% }
    </style>
</head>
<body>
	<div id="header">
		<div class="row">
			<table width="700px">
				<tr>
					<td>
						<img height="35px" width="146px;" src="https://qifinance.com/images/skin/quidsin-finance-logo.jpg">
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="buffer"></div>
	</div>

	<div class="row">
		<table width="700px">
			<tr>
			    <td width="15%">
				</td>
				<td width="70%">
					<h1>Hello {{ $_POST['name'] }}!</h1>

                    <p>Thank you for your loan cashback application, your form will be processed by one of our dedicated team. Once you've fully repaid your loan please contact us on 01534 634001 to claim your cash back!</p>
                    <p>If you have any questions in the meantime give us a ring on</span>&nbsp;<span style="color:#d93f51;">01534 634001</span></p>
          <div class="buffer"></div>
				</td>
				<td width="15%">
				</td>
			</tr>
		</table>
	</div>

</body>
</html>
