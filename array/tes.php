 <?php
'mobil1' => array('namamobil' => array('kijang','panther'))
);
//untuk menampilkannya
foreach($kendaraan as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ': ' . $value[0] . '-' . $value[1].'<br> ';
 }
 echo '<br/>';
}

?>