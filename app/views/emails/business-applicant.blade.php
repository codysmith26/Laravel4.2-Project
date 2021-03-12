<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Quidsin Bank Statement</title>
	<style type="text/css">
      html { height: 100%; background-color: #f2f2f2 }
      body { height: 100%; margin: 0; padding: 0; color: #666666; font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif; }
      #header { height: 70px; width: 100%; background-color: #ffffff; padding-top: 10px }
      .row { height: auto; width:700px; margin:0 auto }
      .buffer { height: 30px; width: 100% }
    </style>
</head>
<body>
	<div id="header">
		<div class="row">
			<table width="700px">
				<tr>
					<td width="50%">
						<img height="50px" width="150px;" src="https://qifinance.com/images/skin/qi-bank.jpg">
					</td>
					<td width="50%">
						<p><span style="float:right;font-size:20px;font-weight:700;">{{ $_POST['company_name'] }}</span></p>
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
			<tr style="background-color:#cccccc;">
				<td width="30%" style="padding-left:10px;">
					<p><span style="font-weight:700;">My Account</span></p>
				</td>
				<td width="70%" style="padding-left:10px;">
					<table width="100%">
						<tr>
							<td width="50%">
								<p>Description</p>
							</td>
							<td width="25%">
								<p>Paid Out</p>
							</td>
							<td width="25%">
								<p>Paid In</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class="row">
		<table width="700px">
			<tr valign="top">
				<td width="30%" style="padding-left:10px;">
					<table width="100%">
						<tr>
							<td style="border-bottom:1px solid #cccccc;"><p>Recent Transactions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#10095;</p></td>
						</tr>
						<tr>
							<td style="border-bottom:1px solid #cccccc;"><p>Show Balance</p></td>
						</tr>
						<tr>
							<td style="border-bottom:1px solid #cccccc;"><p>Make a payment</p></td>
						</tr>
						<tr>
							<td style="border-bottom:1px solid #cccccc;"><p>Transfer money</p></td>
						</tr>
					</table>
				</td>
				<td width="70%" height="300px" style="padding-left:10px;background-color:#e6e6e6;">
					<table width="100%">
						<tr>
							<td style="border-bottom:1px solid #cccccc;">
								<table width="100%">
									<tr>
										<td width="50%">
											<p><span style="color:#2e2e2e;">Qi Finance Business Loan</span></p>
										</td>
										<td width="25%">
											<p>&nbsp;</p>
										</td>
										<td width="25%">
											<p><span style="color:#2e2e2e;">{{ $_POST['amount'] }}</span></p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="border-bottom:1px solid #cccccc;height:80px;">
			<p><b><span style="color:#2e2e2e;font-size:20px;">Your Qi Account Balance is: {{ $_POST['amount'] }}</span></b></p>
							</td>
						</tr>
						<tr>
							<td style="height:130px;"><p><span style="font-size:20px;color:#6ebdd2;font-weight:700;">Congratulations</span></p><p><span style="color:#2e2e2e;">One of our friendly advisors will be in touch soon to explain how to access your funds. If you have any questions in the meantime give us a ring on</span>&nbsp;<span style="color:#d93f51;">01534 634001</span></p></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>
