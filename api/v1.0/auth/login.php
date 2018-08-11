
<?php include $_SERVER['DOCUMENT_ROOT'] . '/db/config.php' ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/db/Members.php' ?>
<?php
header('Content-Type: application/json');
$id = $_POST['id'];
$pwd = $_POST['pwd'];

$Members = new Members($mysql_host, $mysql_user, $mysql_pwd, $mysql_db);
$sql = "SELECT * FROM {$Members->table_name} WHERE id = '{$id}'";

$result = $Members->query($sql);
if (!$result->num_rows) {
  echo json_encode(array(
    status => "failed",
    msg => "no exist",
  ));
  return;
}

$row = $result->fetch_assoc();

$hashed = $row['pwd'];
if (crypt($pwd,$hashed) !== $hashed) {
  echo json_encode(array(
    status => "failed",
    msg => "not matched"
  ));
  return;
}
session_start();
$_SESSION['_id'] = $row['_id'];

echo json_encode(array(
  status => "success",
  msg => "matched"
));
