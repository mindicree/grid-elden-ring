<?php
	if($_SERVER['REQUEST_METHOD'] === 'GET') {
		$data = array('status' => 'Successful GET request');
		$code = 200;
	}
	elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
		$data = array('status' => 'Successful POST request');
		$code = 200;
	}
	elseif($_SERVER['REQUEST_METHOD'] === 'PUT') {
		$data = array('status' => 'Successful PUT request');
		$code = 201;
	}
	elseif($_SERVER['REQUEST_METHOD'] === 'DELETE') {
		$data = array('status' => 'Successful DELETE request');
		$code = 200;
	}
	else {
		$data = array('status' => 'error - invalid request');
		$code = 400;
	}

	header('Content-Type: application/json; charset=utf-8', true, $code);
	echo json_encode($data);
?>
