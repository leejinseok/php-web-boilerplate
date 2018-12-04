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
