<?php
$laptop= array(
		array('Lenovo', 'I-5',4500000),
		array('ASUS', 'I-5',7500000),
		array('HP', 'I-5',2500000),
			
	);
    // perulangan dengan menampilkan array dalam array
    for($i=0; $i<count($laptop); $i++){
            echo $laptop[$i][0]. ' - '. $laptop[$i][1].' - '. $laptop[$i][2].'<br>';
        }

    // cara 'elegan' untuk menampilkan array
    foreach($laptop as $row){
        foreach($row as $value){
            echo $value.' ';
        }
        echo '</br>';
    }
 ?>