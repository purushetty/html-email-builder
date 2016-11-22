// JavaScript Document

jQuery(document).ready(function() {

	$( ".datepicker" ).datepicker( { minDate: 0 } );
	$( ".datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy" ); 

	$("#logo").on("change", function() {
		$("#logo-input").toggle();
	});
	
	$("#banner").on("change", function() {
		$("#banner-input").toggle();
	});
				
	$("#intro").on("change", function() {
		$("#intro-text").toggle();
	});
	
	$("#event-d-1").on("change", function() {
		$("#event-input-1").toggle();
		$("#event-input-2").hide();
	});	

	$("#event-d-2").on("change", function() {
		$("#event-input-2").toggle();
		$("#event-input-1").hide();		
	});	
	
	$("#event-d-skip").on("change", function() {
		$("#event-input-1").hide();
		$("#event-input-2").hide();		
	});	
				
	$("#cta").on("change", function() {
		$("#cta-input").toggle();
	});
						
	$( "#spk4" ).on( "change", function() {
		$( "#speaker-group-4" ).show();
		$( "#speaker-group-3" ).hide();
		$( "#speaker-group-3" ).hide();				
	});

    $( "#spk3" ).on( "change", function() {
		$( "#speaker-group-3" ).show();
		$( "#speaker-group-4" ).hide();				
		$( "#speaker-group-2" ).hide();				
	}); 

	$( "#spk2" ).on( "change", function() {
		$( "#speaker-group-2" ).show();
		$( "#speaker-group-3" ).hide();				
		$( "#speaker-group-4" ).hide();				
	}); 
	
	$( "#skip-speakers" ).on( "change", function() {
		$( "#speaker-group-2" ).hide();
		$( "#speaker-group-3" ).hide();				
		$( "#speaker-group-4" ).hide();				
	}); 

	$("#venues").on("change", function() {
		$("#venue-1").toggle();
	});

	$("#signoff").on("change", function() {
		$("#signoff-input").toggle();
	});
						
});