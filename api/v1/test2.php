<?php

switch($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		$data = array('status' => 'Successful GET request', 'data' => $_GET['arg']);
		$code = 200;
		break;
	case 'POST':
		$data = array('status' => 'Successful POST request', 'data' => $_GET['arg']);
		$code = 201;
		break;
	case 'PUT':
		$data = array('status' => 'Successful PUT request', 'data' => $_GET['arg']);
		$code = 200;
		break;
	case 'DELETE':
		$data = array('status' => 'Successful DELETE request', 'data' => $_GET['arg']);
		$code = 200;
		break;
	default:
		$data = array('status' => 'error - invalid request');
		$code = 400;
		break;
}

header('Content-Type: application/json; charset=utf-8', true, $code);
echo json_encode($data);

