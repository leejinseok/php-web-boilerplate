<?php
class Members {
  public $table_name = 'TB_MEMBERS';
  public $con;

  function __construct($host, $user, $pwd, $db) {
    $this->con = new mysqli($host, $user, $pwd, $db);
    if ($this->con->connect_error) {
      die ('Connect Error (' . $this->con->connect_errno . ') '
            . $this->con->connect_error);
    }
  }

  public function query ($sql) {
    return $this->con->query($sql);
  }
}
