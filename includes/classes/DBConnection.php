<?php 
	
$servername = "ns8139.hostgator.com";
$db_username = "cmeehan_rqs_adm";
$db_password = "Wadiver15!";

try{
	$conn = new PDO("mysql:host=$servername;dbname=cmeehan_kline_rqs", $db_username, $db_password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
		
}catch(PDOException $ex){
	echo "Connection failed: " . $ex->getMessage();
}