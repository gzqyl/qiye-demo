<?php

	//home 数据
	
	include 'template.class.php'; //单独视图分离的逻辑到类

	$template = new Template();

	include 'pdo.php';

	include 'common.php'; //获取logo等

	$template->assign('css','index');

	$template->assign('js','index');

	//获取新闻数据

	//取 3 条记录
	$sql = "select *,year(publish_time) as y,month(publish_time) as m,day(publish_time) as d from news limit 0,3";

	$res = $pdo->query($sql);

	$newsList = [];

	foreach($res as $v){

		$v['content'] = substr($v['content'],0,30)."...";

		$newsList[] = $v;

	}


	$template->assign('newsList',$newsList);

	//获取新闻图

	$newsImg = getOne('news_logo');

	$template->assign('newsImg',$newsImg['file']);

	//获取公司首页详情

	$company = getOne('company');

	$template->assign('home_img',$company['home_img']);


	$template->assign('home_content',$company['sum']);

	//输出视图

	$template->display('index.view.php');