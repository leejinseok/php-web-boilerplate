<?php
header('Content-Type: application/json');
session_start();
session_unset($_SESSION['_id']);
session_destroy();

echo json_encode(array(
  "status" => "success"
));
