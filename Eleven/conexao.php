<?php
	$serverName = "DEDÉ-PC\SQLEXPRESS";
	$database = "ElevenDB";
	$uid = "Deverson";
	$pwd = "123";
	$connectionInfo = array( "UID"=>$uid,"PWD"=>$pwd,"Database"=>$database,"CharacterSet"=>'UTF-8');
	
	$conn = sqlsrv_connect($serverName, $connectionInfo );
	ini_set('error_reporting',e_all);
	ini_set('display_errors',1);	
?>