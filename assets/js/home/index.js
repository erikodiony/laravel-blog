$('.alert-success').hide();
$('.alert-danger').hide();

$(document).ready(function() {
  
    $('#nav-affix').on('affix.bs.affix', function () {
    $('#nav-affix + .row').css('margin-top', 72);
  });
  
  $('#nav-affix').on('affix-top.bs.affix', function () {
    $('#nav-affix + .row').css('margin-top', 0);
  });

  $('#item_text_1').addClass('active');

});

$('#toClose').click(function() {
  $('#banner-masukan').remove();
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

$('#btn_frm_testimoni').click(function() {
    var user_testi = $("[name='txt_user']").val();
    var isi_testi = $("[name='txt_isi']").val();
    if ((user_testi && isi_testi) == '')
    {
      $('.alert-danger').show();
      $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Masih Terdapat Kolom yang Kosong !</strong>');
      setTimeout('$(".alert").hide();',2500);
    } 
    else if (isi_testi.length >= 300)
    {
      $('.alert-danger').show();
      $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Input Lebih dari 300 Karakter !</strong>');
      setTimeout('$(".alert").hide();',2500);
    }
    else {
    var frm = $("#frm_testimoni");
    //console.log(frm.serialize());
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(response){
          if (response == 'error_token')
          {
            $('.alert-danger').show();
            $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Anda telah mengirimkan data sebelumnya!</strong>');
            setTimeout('$(".alert").hide();',2500);
          }
          else if (response == 'success')
          {
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Testimoni berhasil dikirim ! <i>(Menunggu Persetujuan Admin)</i></strong>');
            setTimeout('$(".alert").hide(); $("#mdl_testimoni").modal("hide");',2500);
          }
        }
      });
    }
  });

$('#btn_frm_poll').click(function(){
  var frm = $('#frm_poll');
  $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(response){
          if (response == 'error_token')
          {
            $('.alert-danger').show();
            $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Anda telah mengirimkan data sebelumnya!</strong>');
            setTimeout('$(".alert").hide();',2500);
          }
          else if (response == 'success')
          {
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil dikirim ! <i>(Terima Kasih atas partisipasi Anda!)</i></strong>');
            setTimeout('$(".alert").hide(); $("#mdl_poll").modal("hide");',2500);
          }
        }
      });
});