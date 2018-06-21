<?php
// VARIABEL Server
	 // untuk membantu dalam identity sebuah website / apps 
echo 'Host : '.$_SERVER['HTTP_HOST'].'<br>';
	// Browser yang digunakan 
echo 'Browser Identity : '.$_SERVER['HTTP_USER_AGENT'].'<br>';

	//server name 
echo 'Server Name  : '.$_SERVER['SERVER_NAME'].'<br>';


	// port server 
echo 'Server Port  : '.$_SERVER['SERVER_PORT'].'<br>';

	// remote address
echo 'Remote Address  : '.$_SERVER['REMOTE_ADDR'].'<br>';



?>