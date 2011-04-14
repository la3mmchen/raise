<?php
abstract class controller extends multiConstructor {
		protected $mdl_handle; 
		protected $vwe_handle;
		
		protected function __construct0() {
			$this->mdl_create();
			$this->vwe_create();
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
		
		
		/**
		 *  prepares data for view 
		 * */
		public function view($specificID) {
			echo get_class($this) . "=>" . __METHOD__ . "\n";
			$this->vwe_handle->view($this->mdl_handle->view($specificID));
		}
		
		/**
		 *  creates new company 
		 * */
		public function create() {
			var_dump($GLOBALS["PARAMS"]);
			echo get_class($this) . "=>" . __METHOD__ . "\n";
			$this->vwe_handle->view($this->mdl_handle->view($this->mdl_handle->create($GLOBALS["PARAMS"])));
		}
		/**
		 *  lists all companies 
		 * */
		public function index() {
			echo get_class($this) . "=>" . __METHOD__ . "\n";
			$this->vwe_handle->index(get_class($this), $this->mdl_handle->index());
		}
		
		/**
		 * create a form for adding a new object 
		 * */
		 public function add() {
			echo get_class($this) . "=>" . __METHOD__ . "\n";
			$this->vwe_handle->add(get_class($this), $this->mdl_handle->add());
		 }
}
?>
