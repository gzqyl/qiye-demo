<?php

	class Page{

		private $pdo;

		const PAGE_SIZE = 5; //分页的大小,表示每页5条数据

		public function __construct(){

			global $pdo; //引入全局变量

			$this->pdo = $pdo;

		}

		public function paginate(){
			
			$list = [];

			//当前页

			$curpage = isset($_GET['curpage']) ? $_GET['curpage'] : 1;

			$list['curpage'] = $curpage;

			//总页数

			$sql = "select count(*) as num from news";

			$res = $this->pdo->query($sql);

			foreach($res as $v){

				$totalpage = ceil($v['num']/self::PAGE_SIZE);

				$list['totalpage'] = $totalpage;
				break;

			}

			//是否存在上一页

			if($curpage > 1){
				$list['hasBefore'] = true;
			}else{

				$list['hasBefore'] = false;
			}

			//是否存在下一页

			if($curpage < $totalpage){
				$list['hasAfter'] = true;
			}else{

				$list['hasAfter'] = false;
			}

			$btnLen = $totalpage - $curpage >= 4 ? 5 : ($totalpage - $curpage + 1);


			$list['btnLen'] = $btnLen;

			//使用limit 进行分页

			$start = ($curpage-1)*self::PAGE_SIZE;

			$end = self::PAGE_SIZE;

			$sql = "select * from news limit $start,$end";

			$res = $this->pdo->query($sql);

			$data = [];

			foreach($res as $v){

				$data[] = $v;

			}

			$list['data'] = $data;

			return $list;

		}


	}