<?php
abstract class controller extends multiConstructor {
		protected $mdl_handle; 
		protected $vwe_handle;
		
		private function __construct0() {
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
			echo __CLASS__ . "=>" . __METHOD__ . "\n";
			$this->vwe_handle->view($this->mdl_handle->view($specificID));
		}
		
		/**
		 *  creates new company 
		 * */
		public function create() {
			echo __CLASS__ . "=>" . __METHOD__ . "\n";
			$this->vwe_handle->view($this->mdl_handle->view($this->mdl_handle->create($GLOBALS["GET"])));
		}
		/**
		 *  lists all companies 
		 * */
		public function index() {
			echo __CLASS__ . "=>" . __METHOD__ . "\n";
			$this->vwe_handle->index($this->mdl_handle->index());
		}
}
?>
