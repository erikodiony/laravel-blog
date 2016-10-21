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

$('#mdl_photo').on('show.bs.modal', function (event) {
       $("#img_title").text('');
        var a = $(event.relatedTarget);
        var pass = a.data('pass');
        var modal = $(this);

        $.ajax({
            type: 'GET',
            url: 'photos/view',
            data: 'q=' +pass,
            dataType: 'JSON',
            success: function(data){
                 $("#img_path").attr("src", data.img);
                 $("#img_title").append('<h3> ' + data.judul + '</h3>');
                }
        });

});