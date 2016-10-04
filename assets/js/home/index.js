$(document).ready(function() {
  
  $('#nav-affix').on('affix.bs.affix', function () {
    $('#nav-affix + .row').css('margin-top', 72);
  });
  
  $('#nav-affix').on('affix-top.bs.affix', function () {
    $('#nav-affix + .row').css('margin-top', 0);
  });

});

$('#toUp').click(function(){
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
    return false;
});

  $('#masukan-affix').affix({
    offset: {
       bottom: ($('footer').outerHeight() + 50)
   }
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