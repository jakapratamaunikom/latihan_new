<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
		
</body>
</html>

<?php
	// DOKUMENTASI MANIPULASI STRING
		/*
			ltrim() : menghilangkan spasi sblm huruf pertama string (on Left) 
			rtrim() : menghilangkan spasi sblm huruf pertama string (on right)
		*/ 
	echo ' "Jaka Pratama Ganteng"  STRLEN() : '.strlen('Jaka Pratama Ganteng');
	echo '<br> <br>';
	echo substr('PD KEBERSIHAN', 3);
	echo '<br> <br>';
	echo trim('Selamat Datang'.'Saya Jaka '.'Pratama 25 Juli 1995'.'I LOVE U');
	echo '<br> <br>';
	echo strtolower('Buku itu harus dibaca yaa');
	echo '<br> <br>';
	echo strtoupper('jadilah yang satu-satunya');
	echo '<br> <br>';
	echo 'Karakter awal menjadi kapital : '.ucfirst('jadilah yang satu-satunya');
	echo '<br> <br>';
	echo 'Membalikan kata "Kuda Jingkrak : "'.strrev('Kuda Jingkrak');
	echo '<br> <br>';
	echo 'String Replace : "Haloha"  Menjadi : "'.str_replace('asf', 'olala', 'asf');
?>