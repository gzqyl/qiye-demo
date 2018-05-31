<?php

	//home 数据
	
	include 'template.class.php';

	$template = new Template();

	include 'pdo.php';

	include 'common.php';

	$template->assign('css','contact_us');

	$template->assign('js','contact_us');

	$template->display('contacts.view.php');