<?php
class multiConstructor {
		protected $mdl_handle; 
		protected $vwe_handle;
		/**
		*  php doesn't allow multiple constructors so we have to decide
		* */
		public function __construct() {
				/* generic include model files */
				file_exists("codeBase/model/mdl_".get_class($this).".php") ? require_once("codeBase/model/mdl_".get_class($this).".php") : NULL;
				file_exists("codeBase/view/vwe_".get_class($this).".php") ? require_once("codeBase/view/vwe_".get_class($this).".php") : NULL;
				/* generic include dbInterface for model classes */
				preg_match("/mdl_/i",get_class($this)) == 1 ? include_once("codeBase/core/dbInterface.php") : NULL;
				//file_exists("codeBase/controller/".get_class($this).".php") ? include_once("codeBase/controller/".get_class($this).".php") : NULL;
				/* map constructor plus args to methode _construt0...n*/
				$in = func_get_args();
				$i = func_num_args();
				if (method_exists($this,$f='__construct'.$i)) {
					call_user_func_array(array($this,$f),$in);
				} 
		}
		
		/**
		 *  constructor for no input
		 * */
		private function __construct0() {
			// to be implemented in subclass
		}
		/**
		 *  constructor for one input value
		 * */
		private function __construct1($inputValue1) {
			// to be implemented in subclass
		}
		/*  constructor for two input value
		 * */
		public function __construct2($inputValue1, $inputValue2) {
			// to be implemented in subclass
		}
		
		/* generic functions */
		/**
		 * creates model 
		 * */
		protected function mdl_create() {
			$str = "mdl_".get_class($this);
			$this->mdl_handle = new $str();	
		}
		
		/**
		 * creates view 
		 * */
		protected function vwe_create() {
			$str = "vwe_".get_class($this);
			$this->vwe_handle = new $str();	
		}
}
?>
