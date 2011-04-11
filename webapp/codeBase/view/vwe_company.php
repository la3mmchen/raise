<?php
class vwe_company extends MultiConstructor {
	
	/* prepares data for view */
	public function view($array) {
		echo __CLASS__ . "=>" . __METHOD__ . "\n";
		foreach ($array as $i) {
			foreach ($i as $key => $value) {
				echo "<li>".$key." => ".$value."</li>";
			}
		}
	}
	
	/* creates new company */
	public function create() {
		echo __CLASS__ . "=>" . __METHOD__ . "\n";
	}
	
	/* lists all companies */
	public function index($array) {
		foreach ($array as $i) {
			foreach ($i as $key => $value) {
				if (preg_match("/company_id/", $key) > 0) {
					echo '<li><a href="../index.php/company/view/'.$value.'">'.$key." => ".$value.'</a></li>';
				}
				else { 
					echo "<li>".$key." => ".$value."</li>";
				}
			}
		}
	}

}
?>
