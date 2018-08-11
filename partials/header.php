<!DOCTYPE html>
<html lang="ko" ng-app="myApp" ng-controller="globalCtrl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="naver-site-verification" content="b4992f218b0f043cd620cfba6d4f7ddab0614bb7"/>
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:description" content="">

  <link rel="canonical" href="">
  <link rel="icon" href="">

  <link rel="stylesheet" href="/static/fontawesome-free-5.2.0/css/all.min.css">
  <link rel="stylesheet" href="/static/css/reset.css">
  <link rel="stylesheet" href="/static/css/app.css">
  <?php foreach ($css as $value) : ?>
    <link rel="stylesheet" href="<?= $value ?>?v<?= $version ?>">
  <?php endforeach ?>

  <script src="/static/js/jquery-3.3.1.min.js"></script>
  <script src="/static/js/angular.min.js"></script>
  <script src="/static/js/app.js?v<?= $version ?>"></script>
  <?php foreach ($js as $value) : ?>
    <script src="<?= $value ?>?v<?= $version ?>"></script>
  <?php endforeach ?>
  <title>PHP Web Boilerplate</title>
</head>
<body>
