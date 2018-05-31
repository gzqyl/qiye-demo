<?php
	
	include_once 'digui.nav.php';

	include 'login.auth.php';

	if(!isLogin())
		header("location:/admin/login.php");

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

	//输出结构

	/**
	
		array(3) {
		  [0]=>
		  array(5) {
		    ["id"]=>
		    int(1)
		    ["pid"]=>
		    int(0)
		    ["title"]=>
		    string(12) "新闻列表"
		    ["link"]=>
		    string(19) "javascript:void(0);"
		    ["child"]=>
		    array(3) {
		      [0]=>
		      array(5) {
		        ["id"]=>
		        int(4)
		        ["pid"]=>
		        int(1)
		        ["title"]=>
		        string(6) "新增"
		        ["link"]=>
		        string(19) "/admin/news.add.php"
		        ["child"]=>
		        array(0) {
		        }
		      }
		      [1]=>
		      array(5) {
		        ["id"]=>
		        int(5)
		        ["pid"]=>
		        int(1)
		        ["title"]=>
		        string(20) "查询 删除 修改"
		        ["link"]=>
		        string(20) "/admin/news.list.php"
		        ["child"]=>
		        array(0) {
		        }
		      }
		      [2]=>
		      array(5) {
		        ["id"]=>
		        int(6)
		        ["pid"]=>
		        int(1)
		        ["title"]=>
		        string(6) "分页"
		        ["link"]=>
		        string(31) "/admin/news.list.php?paginate=1"
		        ["child"]=>
		        array(0) {
		        }
		      }
		    }
		  }
		  [1]=>
		  array(5) {
		    ["id"]=>
		    int(2)
		    ["pid"]=>
		    int(0)
		    ["title"]=>
		    string(12) "网站管理"
		    ["link"]=>
		    string(19) "javascript:void(0);"
		    ["child"]=>
		    array(3) {
		      [0]=>
		      array(5) {
		        ["id"]=>
		        int(7)
		        ["pid"]=>
		        int(2)
		        ["title"]=>
		        string(22) "首页logo图片设置"
		        ["link"]=>
		        string(19) "/admin/set.logo.php"
		        ["child"]=>
		        array(0) {
		        }
		      }
		      [1]=>
		      array(5) {
		        ["id"]=>
		        int(8)
		        ["pid"]=>
		        int(2)
		        ["title"]=>
		        string(21) "首页轮播图设置"
		        ["link"]=>
		        string(21) "/admin/set.banner.php"
		        ["child"]=>
		        array(0) {
		        }
		      }
		      [2]=>
		      array(5) {
		        ["id"]=>
		        int(9)
		        ["pid"]=>
		        int(2)
		        ["title"]=>
		        string(21) "首页新闻图设置"
		        ["link"]=>
		        string(19) "/admin/set.news.php"
		        ["child"]=>
		        array(0) {
		        }
		      }
		    }
		  }
		  [2]=>
		  array(5) {
		    ["id"]=>
		    int(3)
		    ["pid"]=>
		    int(0)
		    ["title"]=>
		    string(18) "企业信息管理"
		    ["link"]=>
		    string(19) "javascript:void(0);"
		    ["child"]=>
		    array(1) {
		      [0]=>
		      array(5) {
		        ["id"]=>
		        int(10)
		        ["pid"]=>
		        int(3)
		        ["title"]=>
		        string(18) "公司详情设置"
		        ["link"]=>
		        string(23) "/admin/info.company.php"
		        ["child"]=>
		        array(0) {
		        }
		      }
		    }
		  }
		}

	**/

	//登录的逻辑结束，输出视图
	include_once 'digui.view.php';