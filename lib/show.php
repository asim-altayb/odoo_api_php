<?php 
	require_once('lib/ripcord.php');

	$db = "school13";
	$uid = 2;
	$password = "admin";

	$models = ripcord::client("http://localhost:8069/xmlrpc/2/object");

	$name = "Alwathig";
	
	$result = $models->execute_kw($db, $uid, $password,
			    "school.student", 'search_read',
			    array(array(array('name','=','Ahmed'))),
			    array('fields'=>array('id','name','age')));

	// echoing JSON response
	echo json_encode($result);

?>