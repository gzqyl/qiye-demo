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

		if(!isset($_GET['paginate']) || $_GET['paginate'] != 1):

			//不使用分页

			$sql = "select * from news"; //查询的sql

			$res = $pdo->query($sql);

			$data = [];

			foreach($res as $v){

				$data[] = $v;

			}

			//$data 所有的新闻数据

			//登录的逻辑结束，输出视图
			include_once 'news.list.view.php';

		else:

			//分页输出

			include_once 'paginate.class.php';

			
			$page = new Page();

			$list = $page->paginate();

			include_once 'news.list.paginate.view.php';

		endif;

	}
