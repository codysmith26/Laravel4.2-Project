$( document ).ready(function() {
$( "#loanButton" ).click(function() {
  $( "#loanParticulars" ).hide('slow');
  $( "#personalDetails" ).show( "slow" );
  $( "#progressbar" ).progressbar({value:20});
});
$( "#backPersonalButton" ).click(function() {
  $( "#personalDetails" ).hide( "slow" );
  $( "#loanParticulars" ).show( "slow" );
  $( "#progressbar" ).progressbar({value:00});
});
$( "#personalButton" ).click(function() {
  $( "#personalDetails" ).hide( "slow" );
  $( "#contactDetails" ).show( "slow" );
  $( "#progressbar" ).progressbar({value:40});
});
$( "#backContactButton" ).click(function() {
  $( "#contactDetails" ).hide( "slow" );
  $( "#personalDetails" ).show( "slow" );
  $( "#progressbar" ).progressbar({value:20});
});
$( "#contactButton" ).click(function() {
  $( "#contactDetails" ).hide( "slow" );
  $( "#employmentDetails" ).show( "slow" );
  $( "#progressbar" ).progressbar({value:60});
});
$( "#backEmploymentButton" ).click(function() {
  $( "#employmentDetails" ).hide( "slow" );
  $( "#contactDetails" ).show( "slow" );
});
$( "#employmentButton" ).click(function() {
  $( "#employmentDetails" ).hide( "slow" );
  $( "#agreements" ).show( "slow" );
  $( "#progressbar" ).progressbar({value:80});
});
$( "#backSubmitButton" ).click(function() {
  $( "#agreements" ).hide( "slow" );
  $( "#employmentDetails" ).show( "slow" );
  $( "#progressbar" ).progressbar({value:80});
});
});
