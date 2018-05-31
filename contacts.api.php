<?php

	error_reporting(E_ERROR);

	session_start();

	$title = $_POST['title'];

	$name = $_POST['name'];

	$code = $_POST['code'];

	$content = $_POST['content'];


	if($code != $_SESSION['code']){

		echo json_encode(['code'=>'err','msg'=>'验证码不正确']);exit;

	}


	$sql = "insert into message(title,name,content) values('{$title}','{$name}','{$content}')";

	include "pdo.php";

	$pdo->exec($sql);


	echo json_encode(['code'=>'ok','msg'=>'验证码不正确']);exit;


