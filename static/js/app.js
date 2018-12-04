Vue.config.devtools = true;

var mixin = {
  data: {
    menuModal: false,
  },
  methods: {
  },
  created: function () {
    console.log('mixin hook called')
  }
}

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
 * scrollToTop
 * @return void
 */
function scrollToTop () {
  var body = $("html, body");
  body.stop().animate({scrollTop:0}, 500, 'swing', function() {
  });
}
