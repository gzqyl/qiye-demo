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
		break;

	}
	
	//输出视图

	$template->display('news_detail.view.php');