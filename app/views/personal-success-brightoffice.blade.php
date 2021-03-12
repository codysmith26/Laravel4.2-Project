@extends('layouts.base')
@section('body')
<?php
function getXMLInput()
{
    $XML = '';
    $XML.='<Application><Cases><Case>';
    $XML.='<CreateCase>1</CreateCase>';
    $XML .= '<Username>' . "ben" . '</Username>';
    $XML .= '<Title>' . "ben" . '</Title>';
    $XML .= '<FirstName>' . "ben" . '</FirstName>';
    $XML .= '<Surname>' . "ben" . '</Surname>';
    $XML .= '<Address1>' . "ben" . '</Address1>';
    $XML .= '<Address2>' . "ben" . '</Address2>';
    $XML .= '<Address3>' . "ben" . '</Address3>';
    $XML .= '<Address4>' . "ben" . '</Address4>';
    $XML .= '<PostCode>' . "ben" . '</PostCode>';
    $XML .= '<State>' . "ben" . '</State>';
    $XML .= '<Telephone>' . "ben" . '</Telephone>';
    $XML .= '<Telephone2>' . "ben" . '</Telephone2>';
    $XML .= '<Email>' . "ben" . '</Email>';
    $XML .= '<CompanyName>' . "ben" . '</CompanyName>';
    $XML .= '<CompanyAddress1>' . "ben" . '</CompanyAddress1>';
    $XML .= '<CompanyAddress2>' . "ben" . '</CompanyAddress2>';
    $XML .= '<CompanyAddress3>' . "ben" . '</CompanyAddress3>';
    $XML .= '<CompanyAddress4>' . "ben" . '</CompanyAddress4>';
    $XML .= '<CompanyPostCode>' . "ben" . '</CompanyPostCode>';
    $XML .= '<CompanyState>' . "ben" . '</CompanyState>';
    $XML .= '<Referer>' . "ben" . '</Referer>';
    $XML .= '<Notes>' . "ben" . '</Notes>';
    $XML.='</Case></Cases></Application>';
    return $XML;
};

function PostTest(){
    //$source = file_get_contents('in.xml', true);
    $source = getXMLInput();
    $fp = fsockopen("www.qifinanceoffice.co.uk",80,$errno,$errstr,60);

    fputs($fp,"POST /xmlreceive.asmx/CaseApplication HTTP/1.1\n");

    $strlength = strlen($source)+strlen("XMLApplication=");

    fputs($fp, "Host: www.qifinanceoffice.co.uk\n");
    fputs($fp, "Content-type: application/x-www-form-urlencoded\n");
    fputs($fp, "Content-length:".$strlength."\n\n");
    fputs($fp, "XMLApplication=".$source);

}

PostTest();

?>


<!-- START MAIN CONTENT -->
<div class="row">
    <div class="medium-3 columns"><p>&nbsp;</p></div>
    <div class="medium-6 columns" id="successMessage">
		<img src="{{ asset('/images/skin/personal-finance-circle-image.jpg') }}">
    	<h2>Get £50 of M&S vouchers for free!</h2>
    	<p>Your email application is being processed, please check your inbox<br>for instructions of how to claim your vouchers.</p>
	</div>
    <div class="medium-3 columns"><p>&nbsp;</p></div>
</div>
<!-- END MAIN CONTENT -->
@stop