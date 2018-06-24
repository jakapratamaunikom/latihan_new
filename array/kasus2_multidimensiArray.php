<?php
	$laptop= array(
		'Lenovo' => array( 'Spesifikasi' => array('I-5',4500000)),
		// 'ASUS' => array( 'I-5',7500000),
		// 'HP' => array( 'I-5',2500000),
			
	);

	// REMEMBER !! Array mulai dari indeks [0]
	/*
		([0][0], [0][1], [0][2],)
		([1][0], [1][1], [1][2],)
		([2][0], [2][1], [2][2],)
			 
	*/

		foreach ($laptop as $merek => $param) {
			# code...

			echo $merek;
		}

		
?>