<?php
	
	session_start();

	//如果获取到的表单数据与数据库用户一致，则存储session[login]=1

	$name = $_POST['user'];

	$psd = $_POST['psd'];

	$dsn = "mysql:host=localhost;dbname=qiye";

	try{
		$pdo = new PDO($dsn,'root','root');
	}catch(PDOException $e){

	}

	$sql = "select * from admin where name = '{$name}'";

	$res = $pdo->query($sql);

	$auth = false;

	$uid = 0; //用户id

	foreach($res as $v){

		if($v['passwd'] == $_POST['psd']){
			$auth = true;
			$uid = $v['id'];
		}

	}

	if($auth){

		$_SESSION['login'] = 1;

		//存储用户id到session

		$_SESSION['uid'] = $uid;
		$_SESSION['name'] = $name; //存储用户名

		header("location:homepage.php");
		echo "已经登录成功";

	}else{

		echo "验证失败<a href='login.php'>重新登录</a>";

	}