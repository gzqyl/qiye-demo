<?php

	//home 数据
	
	include 'template.class.php';

	$template = new Template();

	include 'common.php';

	$template->assign('css','news');

	$template->assign('js','news');

	$template->display('news.view.php');