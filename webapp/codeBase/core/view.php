<?php
abstract class view extends multiConstructor {
	/* defines __construct() for view class */
	public function __construct() {
			preg_match("/vwe_/i",get_class($this)) == 1 ? include_once("codeBase/core/html.php") : NULL;
			preg_match("/vwe_/i",get_class($this)) == 1 ? include_once("codeBase/core/webapp.php") : NULL;
			file_exists("codeBase/view/vwe_".get_class($this).".php") ? require_once("codeBase/view/vwe_".get_class($this).".php") : NULL;
			
			/* map constructor plus args to methode _construt0...n*/
			$in = func_get_args();
			$i = func_num_args();
			if (method_exists($this,$f='__construct'.$i)) {
				call_user_func_array(array($this,$f),$in);
			} 
	}
	
	/* prepares data for view */
	public function view($array) {
		foreach ($array as $i) {
			foreach ($i as $key => $value) {
				echo "<li>".$key." => ".$value."</li>";
			}
		}
	}
	
	/* creates new  */
	public function create() {
		echo get_class($this) . "=>" . __METHOD__ . "\n";
	}
	
	/* lists all  */
	public function index($cntl, $array) {
		echo get_class($this) . "=>" . __METHOD__ . "\n";
		foreach ($array as $i) {
			foreach ($i as $key => $value) {
				if (preg_match("/company_id/", $key) > 0) {
					echo '<li><a href="'.$GLOBALS["webAppPath"].'/'.$cntl.'/view/'.$value.'">'.$key." => ".$value.'</a></li>';
				}
				else { 
					echo "<li>".$key." => ".$value."</li>";
				}
			}
		}
	}
	/* display form for adding */
	public function add($cntl,$array) {
		$wp = new webapp();
		echo $wp->form($cntl.'/create', "add a new object", $array);	
	}
}
?>
