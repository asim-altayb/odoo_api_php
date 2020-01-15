<?php 
	require_once('lib/ripcord.php');

	$db = "airsystem";
	$uid = 1;
	$password = "admin";

	$models = ripcord::client("http://localhost:8069/xmlrpc/2/object");

	// $name = $_POST["name"];

	// $result = $models->execute_kw($db, $uid, $password,
	// 	    'alber.areas', 'search_read',
	// 	    array(array('id'=>1)));

	$result = $models->execute_kw($db, $uid, $password,
		    'school.student', 'create',
		    array(array('gender'=>'male','phone'=>'203003434','number'=>2)));

	// $result = $models->execute_kw($db, $uid, $password,
	// 	    'purchase.order.line', 'create',
	// 	    array(array('order_id'=>29,'product_id'=>2,'product_qty'=>4,'name'=>'test','date_planned'=>'04/30/2019 21:38:31','product_uom'=>1,'price_unit'=>1)));

	// echoing JSON response
	echo json_encode($result);
?>