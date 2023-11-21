<?php
try {
	
	session_start();	
		
	$connexion=new PDO('mysql:dbname=gestion_stock_dk; host=localhost', 'root', '');
	} catch (Exception $e) {
		echo $e;
		
	}
	


?>

