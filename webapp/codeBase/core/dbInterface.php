<?php 
class dbInterface {
	private static $dbHost;
	private static $dbUser;
	private static $dbPw;
	private static $dbDatabase;
		
	public function __construct() {
			//constructor needs to load values from file
			require_once("dbConfig.php");
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

	public function insertToDb($table, $array) {
		$sql  = "INSERT INTO `raise`.`".$table."`";	
		$sql .= " (`".implode("`, `", array_keys($array))."`)";
		$sql .= " VALUES ('".implode("', '", $array)."') ";
		var_dump($sql);
		return $this->executeQuery($sql);
	}
	
	public function loadFromDb($table, $array) {	
		$sql  = "SELECT ";
		$sql .= " `".implode("`, `", array_keys($array))."`";
		$sql .= " from `raise`.`".$table."`";
		return $this->loadQuery($sql);
	}
	
	public function loadOneFromDb($table, $array, $whereArray) {	
		$sql  = "select ";
		$sql .= " `".implode("`, `", array_keys($array))."`";
		$sql .= " from `raise`.`".$table."`";	
		$sql .= " where `".implode("`, `", array_keys($whereArray))."` = ".implode(", ", $whereArray)."";
		return $this->loadQuery($sql);
	}
	
	private function loadQuery($iQ) {
			$rc = array();
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
			while ($row=mysql_fetch_assoc($mysqlResult)) {
				array_push($rc, $row);
			}
			/* close db*/
			mysql_close($dbHandle);
			return $rc;
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
			$rc = mysql_insert_id();
			/* close db*/
			mysql_close($dbHandle);
			return $rc;
	}
}
?>
