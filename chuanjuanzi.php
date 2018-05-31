<?php

	//传卷子的函数 @param object $student 学生类,
	//@param integer $paperNum 卷子数量

	function chuandi($student,$paperNum){
		
		//在小明拿了一张卷子后的余下卷子数
		$paperNum = $student->takeOnePaper($paperNum);
		
		if(!$student->hasNext()){

			//如果小明后面没有人了,返回卷子数
			//终止条件
			return "剩余卷子数量: ".$paperNum;
		}else{
			
			//关键，调用本身，此处可见学生已经是小明后面的那个，数量已经减少了
			//子问题须与原始问题为同样的事，且更为简单
			return chuandi($student->next(),$paperNum);
		}

	}

	

	//student类

	class Student{

		const TOTAL = 100; //总学生数

		public static $curTotal = 1; //当前传递到的学生数

		public function takeOnePaper($paperNum){

			if($paperNum <= 0){

				throw new Exception("老师！这里没试卷了！");

			}

			return --$paperNum;

		}

		public function hasNext(){

			if(self::$curTotal < self::TOTAL){

				self::$curTotal = self::$curTotal + 1;

				return true;
			}else{
				return false;
			}

		}

		public function next(){

			//一个新的学生实例

			return new Student;


		}


	}


	//测试调用，获取剩余的卷子的数

	$student = new Student; 

	echo chuandi($student,101);

	