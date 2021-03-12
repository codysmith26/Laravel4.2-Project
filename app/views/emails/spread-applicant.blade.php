<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Quidsin Spread the Cost Application</title>
	<style type="text/css">
      html { height: 100%; background-color: #f2f2f2 }
      body { height: 100%; margin: 0; padding: 0; color: #666666; font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif; }
      #header { height: 60px; width: 100%; background-color: #ffffff; padding-top:15px }
      .row { height: auto; width:700px; margin:0 auto; }
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
		<table width="700px" style="text-align:center;">
			<tr>
			    <td width="10%">
				</td>
				<td width="80%">
					<p style="text-shadow: #ffffff 1px 1px 1px;font-weight: 700;font-size: 30px;">Hi {{ $_POST['name'] }},</p>
		      <img height="300px" width="300px;" src="https://qifinance.com/images/skin/spread-the-cost-image.jpg">
		      <p style="text-shadow: #ffffff 1px 1px 1px;font-weight: 700;font-size: 30px;">Congratulations<br>You're Nearly There!</p>
          <p>One of our friendly Finance Managers will be in touch to explain the next steps.</p>
          <div class="buffer"></div>
          <hr>
          <div class="buffer"></div>
          <p style="text-shadow: #ffffff 1px 1px 1px;font-weight: 700;font-size: 30px;">In a hurry?</p>
          <p>You can receive your loan faster if you get the below documents ready:</p>
          <p style="color:#d93f51;">- A copy of your ID (passport or driving license)<br>
            - Your last 3 month's bank statements<br>
            - Proof of address</p>
          <div class="buffer"></div>
          <hr>
          <div class="buffer"></div>
          <p>If you have any questions in the meantime give us a ring on</span>&nbsp;<span style="color:#d93f51;">01534 634001</span></p>
          <div class="buffer"></div>
				</td>
				<td width="10%">
				</td>
			</tr>
		</table>
	</div>

</body>
</html>
