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
 * @property String $action
 * @property int specificId
 * @property Array $postParams
 * @property static Array $map2include is needed for mapping user request to include; add another entry if you add a controller
 */
/* generic includes */
require_once("codeBase/config.php");
/* generic classes */
require_once($GLOBALS'filePath_base']."multiConstructor.php");
require_once($GLOBALS['filePath_base']."userInput.php");
$GLOBALS["lala"] = "lelel";
class routing extends multiConstructor {
	private $controller;
	private $action;
	private $specificID;
	private $postParms;
	private static $map2include = array("profile" => "codeBase/controller/profile.php", 
										"company" => "codeBase/controller/company.php"
										);
										/* TODO: 
										 * what's wrong with this?:
										 * "profile" => $GLOBALS['filePath_base']./controller/profile.php" **/
	private static $map2default = array("profile" => "index", 
										"company" => "index"
										);
	
	private function __construct0() {
		$this->getInputParams();
		/**
		 * TODO: what about user input? **/
		/* include controller before building a controller object 
		 * TODO implement some default action if no / only wrong controller is given */
		file_exists(self::$map2include[$this->controller]) ? include_once(self::$map2include[$this->controller]) : die("no controller found");
		/* build object */
		$cntl = new $this->controller();
		$funct = $this->action;
		$funct_def = self::$map2default[$this->controller]; /* default action */
		method_exists($cntl, $funct) ? $cntl->$funct($this->specificID) : $cntl->$funct_def();
	}
	
	private function getInputParams() {
		//$allParams = explode("/","/company/view/1");
		$allParams = explode("/",$_SERVER['PATH_INFO']); 		
		/** 
		 * default format : default controller/action/id
		 * */
		$this->controller = $allParams[1];
		$this->action = $allParams[2];
		$this->specificID = $allParams[3];
		$this->postParms = $_GET;
	}
	
	public function getPostParm($param) {
		return $this->postParms[$param];
	}
}
?>
