<?php

	//验证是否登录,载入login.auth.php

	include_once 'login.auth.php';


	//执行登录的逻辑

	if(!isLogin()){
		echo "还没有登录<a href='login.php'>请去登录</a>";
	}else{

		//echo "成功进入管理后台";

		$news = "一个随机数: ".mt_rand(100000,999999); //简单的逻辑

		//增加左侧导航栏 child表示所含的二级分类
		
		include_once 'left.nav.php';

		//登录的逻辑结束，输出视图
		include_once 'home.view.php';

	}
