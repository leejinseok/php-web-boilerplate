<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="naver-site-verification" content=""/>
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:description" content="">

  <link rel="canonical" href="">
  <link rel="icon" href="">

  <link rel="stylesheet" href="/static/fontawesome-free-5.2.0/css/all.min.css">
  <link rel="stylesheet" href="/static/css/reset.css">
  <link rel="stylesheet" href="/static/css/app.css?v=<?= $version ?>">
  <?php foreach ($css as $value) : ?>
    <link rel="stylesheet" href="<?= $value ?>?v<?= $version ?>">
  <?php endforeach ?>

  <title>PHP Web Boilerplate</title>
</head>
<body>
<div id="app">
