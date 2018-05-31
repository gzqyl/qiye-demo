<?php


	function jc($n){

		if($n == 0)
			return 1; //0! = 1

		return $n*jc($n-1); //递归后只需计算n-1的阶乘

	}

	echo jc(3);