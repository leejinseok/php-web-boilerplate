<?php include $_SERVER['DOCUMENT_ROOT'] . '/adm/middleware/logincheck_index.php' ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/variables/globalVar.php' ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/adm/variables/indexVar.php' ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/adm/partials/header.php' ?>

<div class="wrapper-logo">
  <img src="/static/images/main/cherry-logo.svg" class="logo">
</div>

<h3 class="text-center title">
</h3>

<form class="container" ng-controller="formCtrl" ng-submit="submit()">
  <div class="form-group">
    <input type="text" class="form-control" ng-model="id" placeholder="아이디를 입력하세요">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" ng-model="pwd" placeholder="비밀번호를 입력하세요.">
  </div>
  <button type="submit" class="btn btn-primary">로그인</button>
</form>

<?php include $_SERVER['DOCUMENT_ROOT'] . 'amd/partials/footer.php' ?>
