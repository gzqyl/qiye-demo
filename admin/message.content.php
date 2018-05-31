<?php

	//验证是否登录,载入login.auth.php

	include_once 'login.auth.php';


	//执行登录的逻辑

	if(!isLogin()){
		echo "还没有登录<a href='login.php'>请去登录</a>";
	}else{

		//将导航栏逻辑单独为一个文件
		
		include_once 'left.nav.php';

		include_once 'pdo.php';

		//不使用分页

		$sql = "select * from message where id = '{$_GET['id']}'"; //查询的sql

		$res = $pdo->query($sql);

		$data = [];

		foreach($res as $v){

			$data = $v;

			break;

		}

		//登录的逻辑结束，输出视图
		include_once 'message.content.view.php';

	}
