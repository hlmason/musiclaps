$(document).ready(function() {

    $('iframe').hide();

    $(window).load(function(){ // Displays modal upon page load
        $('#wantDemo').modal('show');
    });

	$('input').on('click', function() { // Checks whether user wants demo
		if($('input[value="yes"]').is(':checked')) { 
			$('#wantDemo').modal('hide');
			$('iframe').show();
		}
		if($('input[value="no"]').is(':checked')) { 
			$('#wantDemo').modal('hide');
		}
	});

});