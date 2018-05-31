<?php

	//home 数据
	
	include 'template.class.php'; //单独视图分离的逻辑到类

	$template = new Template();

	include 'pdo.php';

	include 'common.php'; //获取logo等

	$template->assign('css','news_details');

	$template->assign('js','index');


	//获取详情

	$sql = "select * from news where id = '{$_GET['id']}'";


	$res = $pdo->query($sql);

	foreach($res as $v){

		$template->assign('news',$v);

		$sql = "select * from admin where id = '{$v['uid']}'"; //获取发布者的信息

		$user_res = $pdo->query($sql);

		foreach($user_res as $vv){

			$template->assign('publish_user',$vv['name']);

			break;

		}

		break;

	}

	//获取上一篇

	if($upNews = hasOne("select * from news where id =".($_GET['id']-1))){

		$template->assign('upNews',$upNews);

		$template->assign('upNewsShow',true);

	}else{

		$template->assign('upNewsShow',false);

	}


	//获取下一篇

	if($nextNews = hasOne("select * from news where id =".($_GET['id']+1))){

		$template->assign('nextNews',$nextNews);

		$template->assign('nextNewsShow',true);

	}else{

		$template->assign('nextNewsShow',false);

	}
	
	//输出视图

	$template->display('news_detail.view.php');