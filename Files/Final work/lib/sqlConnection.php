<?php
class  SQLConnection
{
    private $servername = "localhost";
    private $username = "";
    private $password = "";
    private $conn = null;
  public function __construct()
  {
    // Create connection
  $conn = new mysqli($this->servername, $this->username, $this->password);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  }

  public function __destruct()
  {
    $this->conn->close();
  }
}

$x = new SQLConnection();
?>
