$('#nav-affix').on('affix.bs.affix', function () {
  $('#nav-affix + .row').css('margin-top', 71);
  $('#to-top').removeClass('affix-top');
  $('#to-top').addClass('affix');
});

$('#nav-affix').on('affix-top.bs.affix', function () {
  $('#nav-affix + .row').css('margin-top', 0);
});

$('#menu-dobel').hover(
  function() {
    $(this).text('');
    $( this ).append('<i class="fa fa-folder-open fa-fw fa-lg"></i> Info');
  },
  function() {
    $(this).text('');
    $( this ).append('<i class="fa fa-folder fa-fw fa-lg"></i> Info');
  }
);

  $('#menu-dobel').focus(
  function() {
    $(this).text('');
    $( this ).append('<i class="fa fa-folder-open fa-fw fa-lg"></i> Info');
  }
);

$('#toUp').click(function(){
  $('html, body').animate({
      scrollTop: 0
  }, 1500);
  return false;
  });




