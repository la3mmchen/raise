<?php
class multiConstructor {
		/**
		*  php doesn't allow multiple constructors so we have to decide
		* */
		public function __construct() {
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
}
?>
