<?php 
	require_once('lib/ripcord.php');

	$db = "school13";
	$uid = 2;
	$password = "admin";

	$models = ripcord::client("http://localhost:8069/xmlrpc/2/object");

	$result = $models->execute_kw($db, $uid, $password,"school.student", 'search',array(array(array('name','=','Ahmed'))));

	// echo json_encode($result);
// 0
	// $result2 = $models->execute_kw($db, $uid, $password,
	// 			'product.template', 'write',
	// 			array(array($result[0]), array('list_price'=>'2000')));

	// echoing JSON response
	echo json_encode($result);

?>