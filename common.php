<?php

	//公共设置

	//获取logo

	$logo = getOne('logo');

	$template->assign('logo',$logo['file']);

	//获取banner

	$banner = getOne('banner');

	$banner = explode(',',$banner['file']); 

	$template->assign('banner',$banner);