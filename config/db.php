<?php 

  class Connection {
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'practice';
    private $connection;

    public function connect() {
      $connection = new mysqli($this->server, $this->user, $this->password, $this->dbname);
      return $connection;
    }

    public function disconnect() {
      $this->connection->close();
    }
  
  }
  // $db = mysqli_connect($server, $user, $password, $dbname)

?>