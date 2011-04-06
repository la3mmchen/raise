<?php 
class dbInterface {
	private static $dbHost;
	private static $dbUser;
	private static $dbPw;
	private static $dbDatabase;
		
	public function __construct() {
			//constructor needs to load values from file
			require_once("../dbConfig.php");
			self::$dbHost = $conf_dbHost;
			self::$dbUser = $conf_dbUser;
			self::$dbPw = $conf_dbPw;
			self::$dbDatabase = $conf_dbDatabase;
			// drop values from file
			unset($conf_dbDatabase);
			unset($conf_dbHost);
			unset($conf_dbPw);
			unset($conf_dbUser);
	}

	public function insertDb($table, $array) {
		// array containing data
		$sql  = "INSERT INTO `ideacloud`.`".$table."`";	
		$sql .= " (`".implode("`, `", array_keys($array))."`)";
		$sql .= " VALUES ('".implode("', '", $array)."') ";
		
		return $this->executeQuery($sql);
	}
	/**
	 * 
	 * TODO need a smarter solution
	 * 
	 * **/
	private function executeQuery($iQ) {
			$rc = 0;
			/* connect to dbms */
			$dbHandle = mysql_connect(self::$dbHost, self::$dbUser,self::$dbPw);
			if (!$dbHandle) {
				die("no db connection" . mysql_error());
			}
			/* select db */
			mysql_select_db(self::$dbDatabase) or die("wrong databse");
			/* execute query */
			$mysqlResult = mysql_query($iQ);
			/* return id on insert */
			preg_match("/INSERT/i",$iQ) == 1 ? $rc = mysql_insert_id() : $rc = mysql_fetch_assoc($mysqlResult);
			/* close db*/
			mysql_close($dbHandle);
			return $rc;
	}
}
?>
