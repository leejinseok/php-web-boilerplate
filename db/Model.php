<?php
class Model {
  protected $con;
  protected function __construct ($host, $user, $pwd, $db) {
    $this->con = new mysqli($host, $user, $pwd, $db);
    if ($this->con->connect_error) {
      die ('Connect Error (' . $this->con->connect_errno . ') '
            . $this->con->connect_error);
    }
  }

  protected function query ($sql) {
    return $this->con->query($sql);
  }

  protected function start_transaction () {
    return $this->con->query("START TRANSACTION");
  }

  protected function rollback () {
    return $this->con->query("ROLLBACK");
  }

  protected function commit () {
    return $this->con->query("COMMIT");
  }

  protected function get_con () {
    return $this->con;
  }
}