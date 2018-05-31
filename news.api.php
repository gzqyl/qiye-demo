<?php
	
	include 'pdo.php';

	include 'paginate.class.php';

	$page  = $_GET['page'];

	$obj = new Page();

	$data = $obj->paginate($page);

	echo json_encode($data);

