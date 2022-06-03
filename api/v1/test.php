<?php
	if($_SERVER['REQUEST_METHOD'] === 'GET') {
		$data = array('status' => 'Successful GET request', 'data' => $_GET['arg']);
		$code = 200;
	}
	elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
		$data = array('status' => 'Successful POST request', 'data' => $_GET['arg']);
		$code = 201;
	}
	elseif($_SERVER['REQUEST_METHOD'] === 'PUT') {
		$data = array('status' => 'Successful PUT request', 'data' => $_GET['arg']);
		$code = 200;
	}
	elseif($_SERVER['REQUEST_METHOD'] === 'DELETE') {
		$data = array('status' => 'Successful DELETE request', 'data' => $_GET['arg']);
		$code = 200;
	}
	else {
		$data = array('status' => 'error - invalid request');
		$code = 400;
	}

	header('Content-Type: application/json; charset=utf-8', true, $code);
	echo json_encode($data);
?>
