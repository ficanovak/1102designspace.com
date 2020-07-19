$(function(){
  var hash = window.location.hash;
  hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show');
  $('ul.nav.nav-pills a').click(function (e) {
     $(this).tab('show');
     return false;
  });
});

$(window).on('hashchange', function(e){
  var hash = window.location.hash;
  hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show');
  $('ul.nav.nav-pills a').click(function (e) {
     $(this).tab('show');
     return false;
  });
});
