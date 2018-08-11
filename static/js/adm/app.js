var app = angular.module("myApp", []);
app.filter('nl2br', function ($sce) {
  return function(msg, is_xhtml) {
    var is_xhtml = is_xhtml || true;
    var breakTag = (is_xhtml) ? '<br />' : '<br>';
    var msg = (msg + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
    return $sce.trustAsHtml(msg);
  }
});

/**
 * [getParameterByName description]
 * @param  {[type]} name [description]
 * @param  {[type]} url  [description]
 * @return {[type]}      [description]
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


function logout () {
  if (!confirm('정말 로그아웃 하시겠습니까?')) return;
  $.post('/api/v1.0/auth/logout.php').done(function (response) {
    if (response.status === 'success') {
      window.location.href = '/adm';
    }
  }).fail(function (err) {
    console.log(err);
  });
}
