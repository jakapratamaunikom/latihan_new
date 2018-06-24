<?php
	$laptop= array(
		array('Lenovo', 'I-5',4500000),
		array('ASUS', 'I-5',7500000),
		array('HP', 'I-5',2500000),
			
	);
	// Belum Nemu klo tanpa indeks bagaimana and gabungin pake LOOP {UN-RESOLVED}
	// REMEMBER !! Array mulai dari indeks [0]
	/*
		([0][0], [1][1], [1][2],)
		([2][0], [2][1], [2][2],)
		([3][0], [3][1], [3][2],)
			 
	*/

		for($i=0; $i<count($laptop); $i++) {
			# code...
		echo $laptop[0][0]. ' - '. $laptop[0][1].' - '. $laptop[0][2].'<br>';
		// echo($laptop[2][0]);
		
		}
?>