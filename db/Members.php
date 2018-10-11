<?php $_SERVER['DOCUMENT_ROOT'] . '/db/Model.php' ?>
<?php
class Members extends Model {
  public $table_name = 'TB_MEMBERS';

  function __construct() {
    parent::__construct();
  }
}
