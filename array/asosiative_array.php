<?php
$lampu = array
	( 'Philips' => '12',
	  'Neon' => '20',
	  'Petromax' => '35'
	);

	// array asosiative itu menunjukan nilainya
		// output : 3x perulangan dengan menampilkan
		// menampilkan value only
			/*OUTPUT
				12 
				20 
				35
				12 
				20 
				35
				12 
				20 
				35
			*/
	for($i=0; $i<count($lampu); $i++ ){
		echo implode(' <br> ', $lampu);
		echo '<br>';		
	}
	
	echo '<hr>
			<h2> Menampilkan Associative Array dengan ForEach</h2>
	';

	foreach ($lampu as $merek => $watt) {
		# code...
		echo 'Merek : '. $merek. ', Watt : '.$watt;
		echo '<br>';
	}
?>