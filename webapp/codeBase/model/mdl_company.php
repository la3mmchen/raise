<?php
class mdl_company extends model {
	protected $mdl_company_id;
	protected $mdl_company_name;
	protected $mdl_company_contact;
	protected $mdl_company_description;

	protected function var2array () {
		$tmpArra = array();
		foreach($this as $key => $value) {
			if (preg_match("/handle/", $key) == 0) {
				$key = preg_replace("/mdl_/", "", $key);
				$tmpArra[$key] = $value;
			}
		}
		return $tmpArra;
	}
}
?>
