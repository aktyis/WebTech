<?php
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'tutorial_site');
define('DB_USER', 'root');
define('DB_PASS', '');

class Database {
	 function __construct() {
       // Create connection
		$this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		    exit();
		}
   }
   function select($sql)
   {
   		$result = $this->conn->query($sql);



		// output data of each row
		$data=array();
		if($result)
		{
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$data[]=$row;
				}
			}
		}
		return $data;
   }

   function insert($table, $column, $value)
   {
		$sql = "INSERT INTO ".$table." (".$column.") VALUES (".$value.") ";

		if ($this->conn->query($sql) === TRUE) {
		    return true;
		} else {
		    return false;
		}
   }

   function update($table,$column,$value,$field,$where)
   {
   		$sql = "UPDATE $table SET $column=$value WHERE $field = $where";
   		echo $sql;

		if ($this->conn->query($sql) === TRUE) {
		    return true;
		} else {
		    return false;
		}
   }

   function delete($table,$field,$where)
   {
   		$sql = "DELETE FROM $table WHERE $field = $where";

		if ($this->conn->query($sql) === TRUE) {
		    return true;
		} else {
		    return false;
		}
   }

   public function updateBulk($table, $data, $where)
    {        
        ksort($data);
        
        $fieldDetails = NULL;
        foreach($data as $key=> $value) {
            $fieldDetails .= "`$key`= '$value',";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        
        $sql = "UPDATE $table SET $fieldDetails WHERE $where";

		if ($this->conn->query($sql) === TRUE) {
		    return true;
		} else {
		    return false;
		}
    }


   function __destruct() {
 	$this->conn->close();
   }


}

?>