<?php
class company extends MultiConstructor {
	
	private function __construct0() {
		$this->mdl_create();
		$this->vwe_create();
	}

	
	/* prepares data for view */
	public function view($specificID) {
		echo __CLASS__ . "=>" . __METHOD__ . "\n";
		$this->vwe_handle->view($this->mdl_handle->view($specificID));
	}
	
	/* creates new company */
	public function create() {
		echo __CLASS__ . "=>" . __METHOD__ . "\n";
		$this->vwe_handle->view($this->mdl_handle->view($this->mdl_handle->create($GLOBALS["GET"])));
	}
	/* lists all companies */
	public function index() {
		echo __CLASS__ . "=>" . __METHOD__ . "\n";
		$this->vwe_handle->index($this->mdl_handle->index());
	}
}
?>
