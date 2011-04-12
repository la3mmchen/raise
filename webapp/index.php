<?php
/**
 * Index file.
 *
 * @author Alexander Koehler <lala@k3wl.net>
 * @link 
 * @copyright 
 * @license 
 */

/**
 * Index is the base script for processing initial zser requests
 * additional: complete debug of input parametes
 *
 * creates Routing object
 *
 * @author Alexander Koehler <lala@k3wl.net>
 * @version $Id$
 * @package 
 * @since 0.1
 *
 */
$_GLOBAL["debug"] = true; /* do we want to run in debug mode? */
/* includes for index.php */
require_once("codeBase/core/logger.php");
require_once("codeBase/routing.php");
/* we need a logger object and we store the reference in our GLOBALS array*/
$_GLOBAL["logger"] = new logger();
/* we need to see all user input in debug mode */
if ($_GLOBAL["debug"]) {
	$_GLOBAL["logger"]->write("dump user::input:");
	foreach($_POST as $i) {
		$_GLOBAL["logger"]->write("POST]".$i);
	}
	foreach (explode("/",$_SERVER['REQUEST_URI']) as $i) {
		$_GLOBAL["logger"]->write("PATH]".$i);
	}
	$_GLOBAL["logger"]->write("dump finished");
}
$webapp = new routing();
/* we need to destruct the logger object */
$_GLOBAL["logger"]->__descruct();
?>
