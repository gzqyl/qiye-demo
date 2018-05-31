<?php

	//公共设置

	//获取logo

	$logo = getOne('logo');

	$template->assign('logo',$logo['file']);

	//获取banner

	$banner = getOne('banner');

	$banner = explode(',',$banner['file']); 

	$template->assign('banner',$banner);

	//标题，公司信息

	include_once 'pdo.php';

	$sql = "select * from info";

	$res = $pdo->query($sql);

	$data = [];

	foreach($res as $v){

		$data[$v['info_name']] = $v['info_content'];

	}

	$template->assign('data_s',$data);