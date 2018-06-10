<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// case saya set nilai dari var status itu 'as'
	$status ='as';
	// lakukan pengencekan kondisi 
	if ($status == 'afs') include ('body.php');
	else
		include ('404.php');
	?>

</body>
</html>