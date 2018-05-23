
<?php

	class Template{

		private $data = [];

		public function assign($key,$value){

			$this->data[$key] = $value;

		}

		public function display($file){

			extract($this->data);

			include $file;

		}


	}