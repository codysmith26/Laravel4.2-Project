$(function() {
    $( "#slider" ).slider({
	value: 5000,
	min: 1000,
	max: 30000,
	step: 100,
	slide: function( event, ui ) {
	    $( "#amount" ).val( "£" + addCommas(ui.value) );
	    updateLoanTotals();
	    }
	});
    $( "#amount" ).val( "£" + $( "#slider" ).slider( "value" ) );

    $( "#term_slider" ).slider({
	value:24,
	min: 12,
	max: 84,
	step: 6,
	slide: function( event, ui ) {
	    $( "#term" ).val( ui.value );
	    updateLoanTotals();
	    }
	});
    $( "#term" ).val( $( "#term_slider" ).slider( "value" ) );
});

function updateLoanTotals() {

    var loanTotalVal = removePounds( removeCommas( $('#amount').val() ));
    var loanTotalPeriod = parseInt( $('#term').val() );
    var loanRate = 16;

    //calc totals
    var monthly = calculateTotalRepay(loanTotalVal, loanRate, loanTotalPeriod);

    $('#repayments').html('£' + monthly);
}

function calculateTotalRepay(principle, rate, term) {

	var intr = rate / 1200;
	var totalRepay = principle * intr / (1 - (Math.pow ( 1 / (1 + intr), term)));

	return totalRepay.toFixed(2);
}

function addCommas(nStr) {

    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) {
	x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }

    return x1 + x2;
}

function removeCommas(nStr) {

	return nStr.replace(/\,/g,'');
}

function removePounds(nStr) {
    return nStr.replace('£', '')
}



 