<!DOCTYPE html>
<html lang="ko" ng-app="myApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="/static/images/cherry-thumbnail3.png">
  <link rel="stylesheet" href="/static/css/adm/app.css">
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <?php foreach ($css as $value) : ?>
    <link rel="stylesheet" href="<?= $value ?>?v=<?= $version ?>">
  <?php endforeach ?>

  <script src="/static/js/jquery-3.3.1.min.js"></script>
  <script src="/static/js/angular.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
  <script src="/static/js/adm/app.js"></script>
  <?php foreach ($js as $value) : ?>
    <script src="<?= $value ?>?v=<?= $version ?>"></script>
  <?php endforeach ?>
  <title>관리자페이지</title>
</head>
