<?php 
	function autoload($className) {
		$diretorios = array(
			'Model/',
			'Dao/'
			
		); //array dos locais onde estão as classes
		
	 foreach ($diretorios as $diretorio){//laço para listar o diretorios
		set_include_path($diretorio);
		spl_autoload($className); //funciona com inclue/require
	 }
	
	}	
	
	spl_autoload_extensions('.php'); // defino a extensão
	spl_autoload_register('autoload'); 
	
 ?>
