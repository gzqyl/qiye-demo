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

		$id = $_GET['id'];

		//使用sql语句 delete 完成新闻的删除

		$sql = "delete from news where id = '{$id}'"; //查询的sql

		$res = $pdo->exec($sql);

		//跳转到列表页面
		header("location:news.list.php");

	}
