<?php

	include 'pdo.php';

	$nav = array(
	    1 => array('id' => 1, 'pid' => 0, 'title' => '新闻列表','link'=>'javascript:void(0);'),
	    2 => array('id' => 2, 'pid' => 0, 'title' => '网站管理','link'=>'javascript:void(0);'),
	    3 => array('id' => 3, 'pid' => 0, 'title' => '企业信息管理','link'=>'javascript:void(0);'),
	    4 => array('id' => 4, 'pid' => 1, 'title' => '新增','link'=>'/admin/news.add.php'),
	    5 => array('id' => 5, 'pid' => 1, 'title' => '查询 删除 修改','link'=>'/admin/news.list.php'),
	    6 => array('id' => 6, 'pid' => 1, 'title' => '分页','link'=>'/admin/news.list.php?paginate=1'),
	    7 => array('id' => 7, 'pid' => 2, 'title' => '首页logo图片设置','link'=>'/admin/set.logo.php'),
	    8 => array('id' => 8, 'pid' => 2, 'title' => '首页轮播图设置','link'=>'/admin/set.banner.php'),
	    9 => array('id' => 9, 'pid' => 2, 'title' => '首页新闻图设置','link'=>'/admin/set.news.php'),
	    10 => array('id' => 10, 'pid' => 3, 'title' => '公司详情设置','link'=>'/admin/info.company.php'),
	    11 => array('id' => 11, 'pid' => 3, 'title' => '公司信息设置','link'=>'/admin/info.contact.php'),
	);

	foreach($nav as $v){

		$sql = "insert into module(module_id,module_pid,module_title,module_link) 
		values('{$v['id']}','{$v['pid']}','{$v['title']}','{$v['link']}')";

		$pdo->exec($sql);

	}