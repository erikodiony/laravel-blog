$('document').ready(function(){
	
	$('[data-toggle="tooltip"]').tooltip();
	$('.alert-success').hide();
    $('.alert-danger').hide();
    $('#gambar_hidden_1').hide();
    $('#gambar_hidden_2').hide();
    $('#gambar_hidden_3').hide();

    $('#gambar_hidden_edit_1').hide();
    $('#gambar_hidden_edit_2').hide();
    $('#gambar_hidden_edit_3').hide();

    $('#gambar_hidden_laman_edit_1').hide();
    $('#gambar_hidden_laman_edit_2').hide();
    $('#gambar_hidden_laman_edit_3').hide();

    $(document).on('show.bs.modal', '.modal', function (event) {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });

    $(document).on('hidden.bs.modal', '.modal', function () {
    	$('.modal:visible').length && $(document.body).addClass('modal-open');
	});

});

function hapus_gbr(namafile) {
    if (namafile != '')
    {
        var img_file = namafile.split('/').pop();
        $.ajax({
            type: 'GET',
            url: 'post/upload/delete',
            data: 'q='+img_file,
            success: function(response){
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
    }
    else
    {}
};

$('#btn_upload').filestyle({
    iconName : 'glyphicon glyphicon-picture',
    buttonText : 'Pilih Gambar',
    buttonName : 'btn-default'
});

$('#btn_upload_clear').click(function() {
    $('#btn_upload').filestyle('clear'); 
});

$('#btn_upload_aksi').click(function(){
    $("#frm_upload").submit();
});


$('#btn_upload_edit').filestyle({
    iconName : 'glyphicon glyphicon-picture',
    buttonText : 'Pilih Gambar',
    buttonName : 'btn-default'
});

$('#btn_upload_clear_edit').click(function() {
    $('#btn_upload_edit').filestyle('clear'); 
});

$('#btn_upload_aksi_edit').click(function(){
    $("#frm_upload_edit").submit();
});


$('#btn_upload_laman_edit').filestyle({
    iconName : 'glyphicon glyphicon-picture',
    buttonText : 'Pilih Gambar',
    buttonName : 'btn-default'
});

$('#btn_upload_clear_laman_edit').click(function() {
    $('#btn_upload_laman_edit').filestyle('clear'); 
});

$('#btn_upload_aksi_laman_edit').click(function(){
    $("#frm_upload_laman_edit").submit();
});


$('#frm_upload').on('submit',(function(e) {
    e.preventDefault();
    var formData = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data:formData,
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

                	if ($("[name='txt_gbr_1']").val() == '')
                    {
                        $('#gambar_hidden_1').show();
                        $('#btn_delete_gbr_hidden_1').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_1']").val(data);
                    }
                    else if ($("[name='txt_gbr_2']").val() == '')
                    {
                        $('#gambar_hidden_2').show();
                        $('#btn_delete_gbr_hidden_2').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_2']").val(data);
                    }
                    else if ($("[name='txt_gbr_3']").val() == '')
                    {
                        $('#gambar_hidden_3').show();
                        $('#btn_delete_gbr_hidden_3').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_3']").val(data);
                    }
                    else {
                        var img_file = data.split('/').pop();
                        $.ajax({
                            type: 'GET',
                            url: 'post/upload/delete',
                            data: 'q='+img_file,
                            success: function(response){
                                $('.alert-danger').show();
                                $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i>Maksimal 3 Gambar yang diperbolehkan dalam setiap Upload, Silahkan hapus salah satu kolom!</strong>');
                                setTimeout('$(".alert").hide();',2500);
                            }
                        });
                    }
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


$('#frm_upload_edit').on('submit',(function(e) {
    e.preventDefault();
    var formData = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data:formData,
            contentType: false,
            processData: false,

            success:function(data){
                $('#btn_upload_edit').filestyle('clear'); 
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

                	if ($("[name='txt_gbr_edit_1']").val() == '')
                    {
                        $('#gambar_hidden_edit_1').show();
                        $('#btn_delete_gbr_hidden_edit_1').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_edit_1']").val(data);
                    }
                    else if ($("[name='txt_gbr_edit_2']").val() == '')
                    {
                        $('#gambar_hidden_edit_2').show();
                        $('#btn_delete_gbr_hidden_edit_2').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_edit_2']").val(data);
                    }
                    else if ($("[name='txt_gbr_edit_3']").val() == '')
                    {
                        $('#gambar_hidden_edit_3').show();
                        $('#btn_delete_gbr_hidden_edit_3').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_edit_3']").val(data);
                    }
                    else {
                        var img_file = data.split('/').pop();
                        $.ajax({
                            type: 'GET',
                            url: 'post/upload/delete',
                            data: 'q='+img_file,
                            success: function(response){
                                $('.alert-danger').show();
                                $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i>Maksimal 3 Gambar yang diperbolehkan dalam setiap Upload, Silahkan hapus salah satu kolom!</strong>');
                                setTimeout('$(".alert").hide();',2500);
                            }
                        });
                    }
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

$('#frm_upload_laman_edit').on('submit',(function(e) {
    e.preventDefault();
    var formData = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data:formData,
            contentType: false,
            processData: false,

            success:function(data){
                $('#btn_upload_laman_edit').filestyle('clear'); 
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

                	if ($("[name='txt_gbr_laman_edit_1']").val() == '')
                    {
                        $('#gambar_hidden_laman_edit_1').show();
                        $('#btn_delete_gbr_hidden_laman_edit_1').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_laman_edit_1']").val(data);
                    }
                    else if ($("[name='txt_gbr_laman_edit_2']").val() == '')
                    {
                        $('#gambar_hidden_laman_edit_2').show();
                        $('#btn_delete_gbr_hidden_laman_edit_2').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_laman_edit_2']").val(data);
                    }
                    else if ($("[name='txt_gbr_laman_edit_3']").val() == '')
                    {
                        $('#gambar_hidden_laman_edit_3').show();
                        $('#btn_delete_gbr_hidden_laman_edit_3').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_laman_edit_3']").val(data);
                    }
                    else {
                        var img_file = data.split('/').pop();
                        $.ajax({
                            type: 'GET',
                            url: 'post/upload/delete',
                            data: 'q='+img_file,
                            success: function(response){
                                $('.alert-danger').show();
                                $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i>Maksimal 3 Gambar yang diperbolehkan dalam setiap Upload, Silahkan hapus salah satu kolom!</strong>');
                                setTimeout('$(".alert").hide();',2500);
                            }
                        });
                    }
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


$('#btn_frm').click(function(){
    if (($('[name="txt_judul"]').val() && $('[name="txt_isi"]').val()) != '')
    {
        var frm = $("#frm_save");
        $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide();',2500);
            setTimeout(function(){window.location.replace("post");}, 3000);
            }
        });    
    }
    else
    {
        $('.alert-danger').show();
        $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Data gagal disimpan ! Masih terdapat kolom yang kosong!</strong>');
        setTimeout('$(".alert").hide();',2500);            
    }
});

$('#btn_eraser_gbr_hidden_1').click(function(){
    $('[name="txt_gbr_1"]').val('');
    $('#btn_delete_gbr_hidden_1').hide();
});

$('#btn_eraser_gbr_hidden_2').click(function(){
    $('[name="txt_gbr_2"]').val('');
    $('#btn_delete_gbr_hidden_2').hide();
});

$('#btn_eraser_gbr_hidden_3').click(function(){
    $('[name="txt_gbr_3"]').val('');
    $('#btn_delete_gbr_hidden_3').hide();
});

$('#btn_delete_gbr_hidden_1').click(function(){
    var namafile = $('[name="txt_gbr_1"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_1"]').val('');
    $('#gambar_hidden_1').hide();
});

$('#btn_delete_gbr_hidden_2').click(function(){
    var namafile = $('[name="txt_gbr_2"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_2"]').val('');
    $('#gambar_hidden_2').hide();
});

$('#btn_delete_gbr_hidden_3').click(function(){
    var namafile = $('[name="txt_gbr_3"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_3"]').val('');
    $('#gambar_hidden_3').hide();
});

$('#btn_show_gbr_hidden_1').click(function(){
    var data = $('[name="txt_gbr_1"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_title').text('');

    $('#mdl_gambar_hidden_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 1'); 

    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }

});

$('#btn_show_gbr_hidden_2').click(function(){
    var data = $('[name="txt_gbr_2"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_title').text('');

    $('#mdl_gambar_hidden_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 2'); 
    
    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }
});

$('#btn_show_gbr_hidden_3').click(function(){
    var data = $('[name="txt_gbr_3"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_title').text('');

    $('#mdl_gambar_hidden_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 3'); 
    
    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }
});


$('#btn_eraser_gbr_hidden_edit_1').click(function(){
    $('[name="txt_gbr_edit_1"]').val('');
    $('#btn_delete_gbr_hidden_edit_1').hide();
});

$('#btn_eraser_gbr_hidden_edit_2').click(function(){
    $('[name="txt_gbr_edit_2"]').val('');
    $('#btn_delete_gbr_hidden_edit_2').hide();
});

$('#btn_eraser_gbr_hidden_edit_3').click(function(){
    $('[name="txt_gbr_edit_3"]').val('');
    $('#btn_delete_gbr_hidden_edit_3').hide();
});

$('#btn_delete_gbr_hidden_edit_1').click(function(){
    var namafile = $('[name="txt_gbr_edit_1"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_edit_1"]').val('');
    $('#gambar_hidden_edit_1').hide();
});

$('#btn_delete_gbr_hidden_edit_2').click(function(){
    var namafile = $('[name="txt_gbr_edit_2"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_edit_2"]').val('');
    $('#gambar_hidden_edit_2').hide();
});

$('#btn_delete_gbr_hidden_edit_3').click(function(){
    var namafile = $('[name="txt_gbr_edit_3"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_edit_3"]').val('');
    $('#gambar_hidden_edit_3').hide();
});

$('#btn_show_gbr_hidden_edit_1').click(function(){
    var data = $('[name="txt_gbr_edit_1"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_edit_title').text('');

    $('#mdl_gambar_hidden_edit_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 1'); 

    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }

});

$('#btn_show_gbr_hidden_edit_2').click(function(){
    var data = $('[name="txt_gbr_edit_2"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_edit_title').text('');

    $('#mdl_gambar_hidden_edit_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 2'); 
    
    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }
});

$('#btn_show_gbr_hidden_edit_3').click(function(){
    var data = $('[name="txt_gbr_edit_3"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_edit_title').text('');

    $('#mdl_gambar_hidden_edit_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 3'); 
    
    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }
});


$('#btn_eraser_gbr_hidden_laman_edit_1').click(function(){
    $('[name="txt_gbr_laman_edit_1"]').val('');
    $('#btn_delete_gbr_hidden_laman_edit_1').hide();
});

$('#btn_eraser_gbr_hidden_laman_edit_2').click(function(){
    $('[name="txt_gbr_laman_edit_2"]').val('');
    $('#btn_delete_gbr_hidden_laman_edit_2').hide();
});

$('#btn_eraser_gbr_hidden_laman_edit_3').click(function(){
    $('[name="txt_gbr_laman_edit_3"]').val('');
    $('#btn_delete_gbr_hidden_laman_edit_3').hide();
});

$('#btn_delete_gbr_hidden_laman_edit_1').click(function(){
    var namafile = $('[name="txt_gbr_laman_edit_1"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_laman_edit_1"]').val('');
    $('#gambar_hidden_laman_edit_1').hide();
});

$('#btn_delete_gbr_hidden_laman_edit_2').click(function(){
    var namafile = $('[name="txt_gbr_laman_edit_2"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_laman_edit_2"]').val('');
    $('#gambar_hidden_laman_edit_2').hide();
});

$('#btn_delete_gbr_hidden_laman_edit_3').click(function(){
    var namafile = $('[name="txt_gbr_laman_edit_3"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_laman_edit_3"]').val('');
    $('#gambar_hidden_laman_edit_3').hide();
});

$('#btn_show_gbr_hidden_laman_edit_1').click(function(){
    var data = $('[name="txt_gbr_laman_edit_1"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_laman_edit_title').text('');

    $('#mdl_gambar_hidden_laman_edit_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 1'); 

    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }

});

$('#btn_show_gbr_hidden_laman_edit_2').click(function(){
    var data = $('[name="txt_gbr_laman_edit_2"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_laman_edit_title').text('');

    $('#mdl_gambar_hidden_laman_edit_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 2'); 
    
    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }
});

$('#btn_show_gbr_hidden_laman_edit_3').click(function(){
    var data = $('[name="txt_gbr_laman_edit_3"]').val();    
    $('#mdl_gambar_hidden').modal('show');
    $('#mdl_gambar_hidden_laman_edit_title').text('');

    $('#mdl_gambar_hidden_laman_edit_title').append('<i class="fa fa-file-photo-o fa-fw fa-lg"></i> Gambar 3'); 
    
    if (data != '')
    {
        $("#img_gbr_tmp").attr("src", data);
    }
    else
    {
        $("#img_gbr_tmp").attr("src", "../../assets/img/no-image.png");
    }
});

$('#mdl_hapus').on('show.bs.modal', function (event) {
    $('#mdl_hapus_title').text('');
    $('#info-hapus').text('');
    var a = $(event.relatedTarget);
    var pass = a.data('passing');
    var pass2 = a.data('passing2');
    var modal = $(this);
    modal.find('#mdl_hapus_title').append('<i class="fa fa-trash fa-fw fa-lg"></i> ' + pass2 );
    modal.find('#info-hapus').append('{ ID : ' + pass + ' || Judul : ' + pass2 + ' }');
    modal.find('[name="txt_hapus"]').val(pass);
});

$('#btn_hapus').click(function(){
    var id_hapus = $('[name="txt_hapus"]').val();
    $.ajax({
        type: 'GET',
        url: 'post/delete',
        data: 'q='+id_hapus,
        success: function(response){
            setTimeout('$("#mdl_hapus").modal("hide");',2000);
            setTimeout(function(){window.location.replace("post");}, 2500);
        }
    });   
});

$('#mdl_edit').on('show.bs.modal', function (event) {
        $('#mdl_edit_title').text('');
        $('[name="txt_label_edit"] > option').removeAttr('selected');
        $('[name="txt_status_edit"] > option').removeAttr('selected');
        $('#info_time_edit').text('');
        $('#info_user_edit').text('');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var pass2 = a.data('passing2');
        var modal = $(this);
        modal.find('#mdl_edit_title').append('<i class="fa fa-edit fa-fw fa-lg"></i> ' + pass2 );

        $.ajax({
            type: 'GET',
            url: 'post/show',
            data: 'q=' +pass,
            dataType: 'JSON',
            success: function(data){
                 $("[name='txt_judul_edit']").val(data.judul);
                 $('select[name="txt_label_edit"] option[value="'+data.tag+'"]').attr('selected','selected');
                 $('select[name="txt_jenis_edit"] option[value="'+data.jenis+'"]').attr('selected','selected');
                 $('select[name="txt_status_edit"] option[value="'+data.status+'"]').attr('selected','selected');
                 tinyMCE.get('txt_isi_edit').setContent(data.isi);
                 $('[name="txt_id_edit"]').val(data.id);
                 $("#info_time_edit").append('<i class="fa fa-calendar fa-fw fa-lg"></i> ' + data.updated_at + ' (GMT +0)');
                 $("#info_user_edit").append('<i class="fa fa-user fa-fw fa-lg"></i> ' + data.user);
                 $('[name="txt_label_edit"]').selectpicker('refresh');
                 $('[name="txt_jenis_edit"]').selectpicker('refresh');
                 $('[name="txt_status_edit"]').selectpicker('refresh');
                }
        });

    });

$('#btn_frm_edit').click(function(){
    if (($('[name="txt_judul_edit"]').val() && $('[name="txt_isi_edit"]').val()) != '')
    {
        var frm = $("#frm_edit");
        $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_edit").modal("hide");',2500);
            setTimeout(function(){window.location.replace("post");}, 3000);
            }
        });    
    }
    else
    {
        $('.alert-danger').show();
        $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Data gagal disimpan ! Masih terdapat kolom yang kosong!</strong>');
        setTimeout('$(".alert").hide();',2500);            
    }
});

$('#mdl_laman_edit').on('show.bs.modal', function (event) {
        $('#mdl_laman_edit_title').text('');
        $('#info_time_laman_edit').text('');
        $('#info_user_laman_edit').text('');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var pass2 = a.data('passing2');
        var modal = $(this);
        modal.find('#mdl_laman_edit_title').append('<i class="fa fa-edit fa-fw fa-lg"></i> ' + pass2 );
        console.log(pass +'|'+ pass2);
        $.ajax({
            type: 'GET',
            url: 'post/laman_show',
            data: 'q=' +pass,
            dataType: 'JSON',
            success: function(data){
                 //$("[name='txt_judul_edit']").val(data.judul);
                 //$('select[name="txt_label_edit"] option[value="'+data.tag+'"]').attr('selected','selected');
                 //$('select[name="txt_jenis_edit"] option[value="'+data.jenis+'"]').attr('selected','selected');
                 //$('select[name="txt_status_edit"] option[value="'+data.status+'"]').attr('selected','selected');
                 tinyMCE.get('txt_isi_laman_edit').setContent(data.isi);
                 $('[name="txt_id_laman_edit"]').val(data.id);
                 $("#info_time_laman_edit").append('<i class="fa fa-calendar fa-fw fa-lg"></i> ' + data.updated_at + ' (GMT +0)');
                 $("#info_user_laman_edit").append('<i class="fa fa-user fa-fw fa-lg"></i> ' + data.user);
                 //$('[name="txt_label_edit"]').selectpicker('refresh');
                 //$('[name="txt_jenis_edit"]').selectpicker('refresh');
                 //$('[name="txt_status_edit"]').selectpicker('refresh');
                }
        });
});

$('#btn_frm_laman_edit').click(function(){
    if ($('[name="txt_isi_laman_edit"]').val() != '')
    {
        var frm = $("#frm_laman_edit");
        $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_laman_edit").modal("hide");',2500);
            setTimeout(function(){window.location.replace("post");}, 3000);
            }
        });    
    }
    else
    {
        $('.alert-danger').show();
        $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i> Data gagal disimpan ! Masih terdapat kolom yang kosong!</strong>');
        setTimeout('$(".alert").hide();',2500);            
    }
});