<?php

	//home 数据
	
	include 'template.class.php'; //单独视图分离的逻辑到类

	$template = new Template();

	include 'pdo.php';

	include 'common.php'; //获取logo等

	$template->assign('css','about_us');

	$template->assign('js','index');


	//获取公司详情

	$company = getOne('company');

	$template->assign('content',$company['content']);

	//输出视图

	$template->display('about_us.view.php');