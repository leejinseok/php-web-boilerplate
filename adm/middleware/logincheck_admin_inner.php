<?php
session_start();
if (!$_SESSION['_id']) {
  header('Location: /adm/index.php');
}
