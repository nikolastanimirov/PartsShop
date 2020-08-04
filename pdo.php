
<?php
//creating an object and using PDO to connect to the database
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "carsalesmanagement";
	private $conn= null;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	//connect to db
	function connectDB() {
		$conn = new PDO("mysql:host=$this->host;dbname=$this->database",$this->user, $this->password);
		return $conn;
  }
	
	function runQuery($query) {
	
		$stmt=$this->connectDB()->query($query)->fetchAll();
		return $stmt;
	 	$resultset=$stmt->fetchAll();
			
		if(count($resultset)>0)
			return $resultset;
	}
	//number of rows
	function numRows($query) {
	
		$result= $conn->query($query);
		
		$rowcount-> rowCount ();
		return $rowcount;	
	}
}
?>