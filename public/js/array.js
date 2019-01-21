$(document).ready( 

	function() {
		
		$( '#submit' ).click(
											
				function() {
					
					 $( "#result" ).empty();
					
					let number = $('#number').val();
					
					$.get( "array/" + number, function( data ) {
						
						for (let i = 0; i < data.numbers.length; i++) {
							
						    let number = data.numbers[i];
						    
						    $( "#result" ).append( number + ' ' );
						}
					});
				}
		);
	} 
);