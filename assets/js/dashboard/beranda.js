$('.alert-success').hide();
$('.alert-danger').hide();
$('#gambar_tmp').hide();

$('#btn_frm_contactme').click(function(){
    var frm = $("#frm_contactme");
    //alert(frm.attr('method') + frm.serialize() + frm.attr('action'));
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert').show();
            $('.alert').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_contactme").modal("hide");',2500);
            setTimeout(function(){window.location.replace("dashboard");}, 3000);
        }
    });
});

$('#btn_frm_aboutme').click(function(){
    var frm = $("#frm_aboutme");
    //alert(frm.attr('method') + frm.serialize() + frm.attr('action'));
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert').show();
            $('.alert').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_aboutme").modal("hide");',2500);
            setTimeout(function(){window.location.replace("dashboard");}, 3000);
        }
    });
});

$('#btn_frm_slide').click(function(){
    var frm = $("#frm_slide");
    //alert(frm.attr('method') + frm.serialize() + frm.attr('action'));
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_slide").modal("hide");',2500);
            setTimeout(function(){window.location.replace("dashboard");}, 3000);
        }
    });
});

$('#btn_upload_aksi').click(function(){
    $("#frm_upload").submit();
});

$('#btn_u_set').click(function(){
    var string_img_upload = $('#img_tmp').attr('src');
    var nm_slide = $("[name='txt_slide']").val();
    $("[name='txt_url']").val(string_img_upload);
    $('.alert-success').show();
    $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> File berhasil diterapkan sbg Gambar '+nm_slide+' !</strong>');
    setTimeout('$(".alert").hide();',2500);

});

$('#btn_u_del').click(function(){
    var string_img_upload = $('#img_tmp').attr('src');
    var img_file = string_img_upload.split('/').pop();
    $.ajax({
        type: 'GET',
        url: 'dashboard/upload/delete',
        data: 'q='+img_file,
        success: function(response){
            //console.log(response);
            if (response == 'success')
            {
                $('#gambar_tmp').hide();
                $('.alert-success').show();
                $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> File yang Anda unggah berhasil dihapus!</strong>');
                setTimeout('$(".alert").hide();',2500);
            }
            else
            {
                $('.alert-danger').show();
                $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Gagal menghapus gambar !</strong>');
                setTimeout('$(".alert").hide();',2500);
            }
        }
    });

});


$('#frm_upload').on('submit',(function(e) {
    e.preventDefault();
    $('#img_tmp').remove();
    var formData = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,

            success:function(data){
                $('#btn_upload').filestyle('clear'); 
                if (data == 'error_null')
                {
                    $('.alert-danger').show();
                    $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> File yang Anda unggah masih kosong!</strong>');
                    setTimeout('$(".alert").hide();',2500);
                }
                else if (data == 'error_max_size')
                {
                    $('.alert-danger').show();
                    $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> File yang Anda unggah melebihi 2MB !</strong>');
                    setTimeout('$(".alert").hide();',2500);
                }
                else if (data == 'error_not_valid')
                {
                    $('.alert-danger').show();
                    $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> File yang Anda unggah tidak valid !</strong>');
                    setTimeout('$(".alert").hide();',2500);
                }
                else {
                    $('#gambar_tmp').show();
                    $('.alert-success').show();
                    $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                    setTimeout('$(".alert").hide();',2500);
                    $('#gambar_tmp').prepend('<img id="img_tmp" class="img-responsive" src="'+data+'" />');
                }
            },
            statusCode: {
                500: function() {
                    $('.alert-danger').show();
                    $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> File yang Anda unggah mengalami masalah silahkan reload ulang halaman ini !</strong>');
                    setTimeout('$(".alert").hide();',2500);
                }
            }

        });
    }));


$('#mdl_slide').on('show.bs.modal', function (event) {
    $('#mdl_slide_title').text('');
    $('#info_time').text('');
    $('#info_user').text('');
    $('#btn_u_set').text('');
    var button = $(event.relatedTarget);
    var tmp = button.data('var');
    var pass = button.data('passing');
    var modal = $(this);
    modal.find('#mdl_slide_title').append('<i class="fa fa-desktop fa-fw fa-lg"></i> Gambar ' + tmp);
    modal.find('#btn_u_set').append('<i class="fa fa-check fa-fw fa-lg"></i> Set sbg Gambar ' + tmp);

    $.ajax({
        type: 'GET',
        url: 'dashboard/slide?q=' +pass,
        dataType: 'JSON',
        success: function(data){
             $("[name='txt_slide']").val(data.slide_ke);
             $("[name='txt_judul']").val(data.judul);
             $("[name='txt_isi']").val(data.isi);
             $("[name='txt_url']").val(data.string_url);
             $("#info_time").append('<i class="fa fa-calendar fa-fw fa-lg"></i> ' + data.updated_at + ' (GMT +0)');
             $("#info_user").append('<i class="fa fa-user fa-fw fa-lg"></i> ' + data.user);
            }
    });
    
});

$('#btn_upload').filestyle({
    iconName : 'glyphicon glyphicon-picture',
    buttonText : 'Pilih Gambar',
    buttonName : 'btn-default'
});

$('#btn_upload_clear').click(function() {
    $('#btn_upload').filestyle('clear'); 
});

