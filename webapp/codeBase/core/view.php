<?php
abstract class view extends multiConstructor {
	private $wp;
	/* defines __construct() for view class */
	public function __construct() {
			preg_match("/vwe_/i",get_class($this)) == 1 ? include_once("codeBase/core/html.php") : NULL;
			preg_match("/vwe_/i",get_class($this)) == 1 ? include_once("codeBase/core/webapp.php") : NULL;
			
			$this->wp = new webapp();
			
			/* map constructor plus args to methode _construt0...n*/
			$in = func_get_args();
			$i = func_num_args();
			if (method_exists($this,$f='__construct'.$i)) {
				call_user_func_array(array($this,$f),$in);
			} 
	}
	
	/* prepares data for view */
	public function view($array) {
		$wpIn = "";
		foreach ($array as $i) {
			foreach ($i as $key => $value) {
				$wpIn .= "<li>".$key." => ".$value."</li>";
			}
		}
		echo $this->wp->out($wpIn);
	}
	
	/* creates new  */
	public function create() {
		echo get_class($this) . "=>" . __METHOD__ . "\n";
	}
	
	/* lists all  */
	public function index($cntl, $array) {
		$wpIn = "";
		foreach ($array as $i) {
			foreach ($i as $key => $value) {
				if (preg_match("/company_id/", $key) > 0) {
					$wpIn .= '<li><a href="'.$GLOBALS["webAppPath"].'/'.$cntl.'/view/'.$value.'">'.$key." => ".$value.'</a></li>';
				}
				else { 
					$wpIn .= "<li>".$key." => ".$value."</li>";
				}
			}
		}
		echo $this->wp->out($wpIn);
	}
	/* display form for adding */
	public function add($cntl,$array) {
		echo $this->wp->form($cntl.'/create', "add a new object", $array);	
	}
}
?>
