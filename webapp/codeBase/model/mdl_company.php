<?php
class mdl_company extends MultiConstructor {
	private $mdl_company_id;
	private $mdl_company_name;
	private $mdl_company_contact;
	private $mdl_company_description;
	private static $dbInt;
	
	private function __construct0() {
		$this->buildDbInterface();
	}
	
	private function var2array () {
		$tmpArra = array();
		foreach($this as $key => $value) {
			if (preg_match("/handle/", $key) == 0) {
				$key = preg_replace("/mdl_/", "", $key);
				$tmpArra[$key] = $value;
			}
		}
		return $tmpArra;
	}
	
	public function index() {
		return self::$dbInt->loadFromDb(preg_replace("/mdl_/", "tbl_", __CLASS__),$this->var2array());
		
	}
	
	public function view($specificId) {
		$this->mdl_company_id = $specificId;
		return self::$dbInt->loadOneFromDb(preg_replace("/mdl_/", "tbl_", __CLASS__),$this->var2array(), array("company_id"=>$this->mdl_company_id));
	}
	
	private function buildDbInterface() {
		self::$dbInt = new dbInterface();
	}
	
}
?>
