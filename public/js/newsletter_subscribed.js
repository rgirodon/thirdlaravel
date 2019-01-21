$(document).ready( 

	function() {
		$( '#dialog' ).dialog({ autoOpen: false });
		
		$( '#openDialogLink' ).click(function() {
			
		    $('#dialog').dialog('open');
		});
	} 
);