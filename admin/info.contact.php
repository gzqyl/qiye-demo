<?php

	error_reporting(0);

	//验证是否登录,载入login.auth.php

	include_once 'login.auth.php';


	//执行登录的逻辑

	if(!isLogin()){
		echo "还没有登录<a href='login.php'>请去登录</a>";
	}else{

		//将导航栏逻辑单独为一个文件
		
		include_once 'left.nav.php';


		//获取已设置的信息

		include_once 'pdo.php';

		$sql = "select * from info";

		$res = $pdo->query($sql);

		$data = [];

		foreach($res as $v){

			$data[$v['info_name']] = $v['info_content'];

		}

		//登录的逻辑结束，输出视图
		include_once 'info.contact.view.php';

	}
