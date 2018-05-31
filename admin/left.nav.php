<?php

	/***

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
	);

	***/

	//不同的用户角色，$nav 的输出应该不一样

	include_once 'pdo.php';

	$sql = "select role_id from admin where id = '{$_SESSION['uid']}'";

	$res = $pdo->query($sql);

	//找出角色id

	foreach($res as $v){
		$role_id = $v['role_id'];
		break;
	}

	//获取该角色下的模块列表输出

	$sql = "select module_id from role where role_id = '{$role_id}'";

	$res = $pdo->query($sql);

	foreach($res as $v){
		$module_id = $v['module_id'];
		break;
	}

	$sql = "select module_id as id,module_pid as pid,module_title as title,module_link as link from module where module_id in (".$module_id.")";

	$res = $pdo->query($sql);

	$nav = [];

	foreach($res as $v){
		$nav[] = $v;
	}


	//递归实现无极分类的输出

	function getNav($nav,$pid){

		$_nav = [];

		foreach($nav as $v){

			if($v['pid'] == $pid){

				$v['child'] = getNav($nav,$v['id']); //递归获取下一个子分类的数据

				$_nav[] = $v;

			}else{

				//终止条件，找不到pid与当前$pid相等直接返回

			}

		}

		return $_nav;

	}

	$left_nav = getNav($nav,0);


	