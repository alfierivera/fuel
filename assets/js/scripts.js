$(function() {
    // Side Bar Toggle
    $('.hide-sidebar').click(function() {
	  $('#sidebar').hide('fast', function() {
	  	$('#content').removeClass('span9');
	  	$('#content').addClass('span12');
	  	$('.hide-sidebar').hide();
	  	$('.show-sidebar').show();
	  });
	});

	$('.show-sidebar').click(function() {
		$('#content').removeClass('span12');
	   	$('#content').addClass('span9');
	   	$('.show-sidebar').hide();
	   	$('.hide-sidebar').show();
	  	$('#sidebar').show('fast');
	});

// This function loads the json with the information for the modal.
	$('.mview').click(function(e){
		e.preventDefault();
		obj = (this);
		url = $(obj).attr('href');
		modal = $('div#mview');
		modal.find('div.modal-header h3').html('Loading...');
		modal.find('div.modal-body p').html('Loading...');
		$.get(url, function(data){
			modal.find('div.modal-header h3').html(data.title);
			modal.find('div.modal-body p').html(data.body);
		}).fail(function(){
			modal.find('div.modal-header h3').html('Opps!, there was an error.');
			modal.find('div.modal-body p').html("Something bad really happened, but don't worry your plants are safe. Try reloading the page.");
		});

		modal.modal('show');
	})
});