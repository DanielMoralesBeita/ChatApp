<?php 
	$service	=	!empty( $_POST['service']) ? $_POST['service'] : 'Empty';
	$vat	=	!empty( $_POST['vat']) ? $_POST['vat'] : 'Empty Vat';
	$qnt	=	!empty( $_POST['qnt']) ? $_POST['qnt'] : 'Empty Qnt';

	echo "Service Section is " . $service;
	echo "<br>";
	echo "Vat Section is " . $vat;
	echo "<br>";
	echo "Qnt Section is " . $qnt;
	echo "<br>";

	// echo json_encode( $vat );

	
 ?>