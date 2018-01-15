<?php
//beaver builder fix

 	add_filter( 'option_active_plugins', 'atfo_bb_compatibility' );

	function atfo_bb_compatibility( $plugins ){
		
		if( isset($_GET['fl_builder']) ){
		
		$atfo_index = array_search( 'above-the-fold-optimization/abovethefold.php', $plugins );
			
				unset( $plugins[$atfo_index] );
			
			}
		
		return $plugins;
	}
//end beaver builder fix
?>