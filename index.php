<?php
$GLOBALS["debug"] = true; /* do we want to run in debug mode? */

/* includes for index.php */
require_once("codeBase/logger.php");
require_once("codeBase/routing.php");
/* we need a logger object and we store the reference in our GLOBALS array*/
$GLOBALS["logger"] = new logger();
/* we need to see all user input in debug mode */
if ($GLOBALS["debug"]) {
	$GLOBALS["logger"]->write("dump user::input:");
	foreach($_POST as $i) {
			$GLOBALS["logger"]->write($i);
	}
	$GLOBALS["logger"]->write("dump finished");
}
$webapp = new routing($_POST);
/* we need to destruct the logger object */
$GLOBALS["logger"]->__descruct();
?>
