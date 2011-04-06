<?php
/**
 * Routing class file.
 *
 * @author Alexander Koehler <lala@k3wl.net>
 * @link 
 * @copyright 
 * @license 
 */

/**
 * Routing is the base class for routing user request to further application
 *
 *
 * @author Alexander Koehler <lala@k3wl.net>
 * @version $Id$
 * @package 
 * @since 0.1
 *
 * @property String $controller 
 * @property int specificId
 * @property Array $postParams
 * @property static Array $map2include is needed for mapping user request to include; add another entry if you add a controller
 */
/* generic includes */
require_once("codeBase/multiConstructor.php");
require_once("codeBase/userInput.php");
class routing extends multiConstructor {
	private $controller;
	private $specificID;
	private $postParms;
	private static $map2include = array("profile" => "codeBase/controller/profile.php", 
										"company" => "codeBase/controller/company.php"
	);
	
	private function __construct0() {
		$this->getInputParams();
		//$userInput = new userInput();
		//$userInput->checkUserInput());
		file_exists(self::$map2include[$this->controller]) ? include_once(self::$map2include[$this->controller]) : die("no controller found");
		/* build object */
		$cntl = new $this->controller();
	}
	
	private function getInputParams() {
		$allParams = explode("/",$_SERVER['PATH_INFO']);
		$this->controller = $allParams[1];
		$this->specificID = $allParams[2];
		$this->postParms = $_POST;
	}
	
	public function getPostParm($param) {
		
	}
}
?>
