<?php

	$left_nav = [

			'news'=>['title'=>'新闻列表','link'=>'javascript:void(0);','child'=>[
				'add'=>['title'=>'新增','link'=>'/admin/news.add.php'],
				'list'=>['title'=>'查询 删除 修改','link'=>'/admin/news.list.php'],
				'list_page'=>['title'=>'分页','link'=>'/admin/news.list.php?paginate=1'],
				
			]],

			'site'=>['title'=>'网站管理','link'=>'javascript:void(0);','child'=>[
				'logo'=>['title'=>'首页logo图片设置','link'=>'/admin/set.logo.php'],
				'banner'=>['title'=>'首页轮播图设置','link'=>'/admin/set.banner.php'],
				'news'=>['title'=>'首页新闻图设置','link'=>'/admin/set.news.php'],
				
			]],

			'info'=>['title'=>'企业信息管理','link'=>'javascript:void(0);','child'=>[
				'about'=>['title'=>'公司详情设置','link'=>'/admin/info.company.php'],
				
			]],


		];