<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Quidsin Mortgage Application</title>
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
					<td>
						<img height="50px" width="205px;" src="https://qifinance.com/images/skin/qi-mortgages.jpg">
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
					<p>Hello {{ $_POST['name'] }}
                    @if($_POST['second_applicant_name'])
                        and&nbsp;{{ $_POST['second_applicant_name'] }}
                    @endif,
                    </p>

                    <p>Thank you for your mortgage application, your form will be processed by one of our mortgage advisors and we will contact the primary applicant shortly to arrange an informal meeting.</p>
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
