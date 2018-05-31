<?php

	//home 数据
	
	include 'template.class.php';

	$template = new Template();

	include 'pdo.php';

	include 'common.php';

	$template->assign('css','news');

	$template->assign('js','news');

	$template->display('news.view.php');