<?php
abstract class model extends multiConstructor {
	private $dbInt;
		
	protected function __construct0() {
		$this->buildDbInterface();
	}
	
	abstract protected function var2array(); // needs to be implemented in subclass
	
	public function index() {
		return $this->dbInt->loadFromDb(preg_replace("/mdl_/", "tbl_", get_class($this)),$this->var2array());
		
	}
	
	public function view($specificId) {
		$this->mdl_company_id = $specificId;
		return $this->dbInt->loadOneFromDb(preg_replace("/mdl_/", "tbl_", get_class($this)),$this->var2array(), array("company_id"=>$this->mdl_company_id));
	}
	
	public function create($array) {
		foreach($this->var2array() as $key => $value) {
			$tmp = "mdl_".$key;
			isset($array[$key]) ? $this->$tmp = $array[$key] : null;
		}
		/* dont give an id to a new db-entry*/
		unset($this->mdl_company_id);
		return $this->dbInt->insertToDb(preg_replace("/mdl_/", "tbl_", get_class($this)), $this->var2array());
	}
	
	public function add() {
		return $this->var2array();
	}
	
	private function buildDbInterface() {
		$this->dbInt = new dbInterface();
	}
}
?>
