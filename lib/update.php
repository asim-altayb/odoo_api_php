<?php 
	require_once('lib/ripcord.php');

	$db = "school13";
	$uid = 2;
	$password = "admin";

	$models = ripcord::client("http://localhost:8069/xmlrpc/2/object");

	$result = $models->execute_kw($db, $uid, $password,
				'school.student', 'write',
				array(array(13), array('number'=>23,'classroom'=>1)));

	// echoing JSON response
	echo json_encode($result);

?>