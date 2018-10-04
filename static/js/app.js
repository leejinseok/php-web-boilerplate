var app = angular.module("myApp", []);

app.filter('nl2br', function ($sce) {
  return function(msg, is_xhtml) {
    var is_xhtml = is_xhtml || true;
    var breakTag = (is_xhtml) ? '<br />' : '<br>';
    var msg = (msg + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
    return $sce.trustAsHtml(msg);
  }
});

app.controller('globalCtrl', function ($scope) {
  $scope.sidemenu = false;

  /**
   * activeSideMenu
   * @return {[type]} [description]
   */
  $scope.activeSideMenu = function () {
    $scope.sidemenu = true;
  }

  /**
   * disableSideMenu
   * @return {void}
   */
  $scope.disableSideMenu = function () {
    $scope.sidemenu = false;
  }
});

/**
 * [getParameterByName description]
 * @param  {String} name
 * @param  {String} url
 * @return {String}
 */
function getParameterByName (name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

/**
 * get angular scope
 * @param {String} ctrlName
 */
function getScope (ctrlName) {
  var sel = '[ng-controller="' + ctrlName + '"]';
  return angular.element(sel).scope();
}


/**
 * scrollToTop
 * @return void
 */
function scrollToTop () {
  var body = $("html, body");
  body.stop().animate({scrollTop:0}, 500, 'swing', function() {
  });
}
