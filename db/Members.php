<?php
class Members {
  public $table_name = 'TB_MEMBERS';

  function __construct($host, $user, $pwd, $db) {
    parent::__construct($host, $user, $pwd, $db);
  }
}
