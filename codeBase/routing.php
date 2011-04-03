<?php
/* generic includes */
$GLOBALS["debug"] ? null : require_once("codeBase/dbInterface.php");
$GLOBALS["debug"] ? null : require_once("codeBase/userInput.php");
require_once("codeBase/multiConstructor.php");

class routing extends multiConstructor {
	
	private function __constructor1 ($inputArray) {
		$userInput = new userInput();
		$userInput->checkArray($_GET);
	}
}
?>
