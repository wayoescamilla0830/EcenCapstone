<?php
	$serverName = "DESKTOP-KICTQ76\\sqlexpress"; //serverName\instanceName
	$connectionInfo = array( "Database"=>"Teambuilder", "UID"=>"admin", "PWD"=>"TB2022");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	if( $conn ) {
		 echo "Connection established.<br />";
	}else{
		 echo "Connection could not be established.<br />";
		 die( print_r( sqlsrv_errors(), true));
	}
?>