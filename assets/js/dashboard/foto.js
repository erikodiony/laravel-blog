$('document').ready(function(){
	$('.alert-success').hide();
	$('.alert-danger').hide();
	$('#gambar_hidden_1').hide();
});


$('#btn_upload').filestyle({
    iconName : 'glyphicon glyphicon-picture',
    buttonText : 'Pilih Gambar',
    buttonName : 'btn-default'
});

$('#btn_upload_clear').click(function() {
    $('#btn_upload').filestyle('clear'); 
});

$('#btn_delete_gbr_hidden').click(function(){
    var namafile = $('[name="txt_gbr_path"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_path"]').val('');
    $('#gambar_hidden_1').hide();
});

$('#btn_show_gbr_hidden').click(function(){
    var data = $('[name="txt_gbr_path"]').val();    
    $('#mdl_preview_upload').modal('show');
    if (data != '')
    {
        $("#img_tmp_path").attr("src", "../../" + data);
    }
    else
    {
        $("#img_tmp_path").attr("src", "../../assets/img/no-image.png");
    }

});

$('#btn_upload_aksi').click(function(){
    $("#frm_upload").submit();
});

function hapus_gbr(namafile) {
    if (namafile != '')
    {
        var img_file = namafile.split('/').pop();
        $.ajax({
            type: 'GET',
            url: 'photo/upload/delete',
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
                	if ($("[name='txt_gbr_path']").val() == '')
                    {
                        $('#gambar_hidden_1').show();
                        $('#btn_delete_gbr_hidden_1').show();
                        $('.alert-success').show();
                        $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Gambar berhasil diunggah!</strong>');
                        setTimeout('$(".alert").hide();',2500);
                        $("[name='txt_gbr_path']").val(data);
                    }
                    else {
                        var img_file = data.split('/').pop();
                        $.ajax({
                            type: 'GET',
                            url: 'photo/upload/delete',
                            data: 'q='+img_file,
                            success: function(response){
                                $('.alert-danger').show();
                                $('.alert-danger').html('<strong><i class="fa fa-times fa-fw fa-lg"></i>Upload Gagal! Foto sebelumnya masih belum disimpan / dihapus!</strong>');
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
    if (($('[name="txt_judul"]').val() && $('[name="txt_gbr_path"]').val()) != '')
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
            setTimeout(function(){window.location.replace("photo");}, 3000);
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


$('#mdl_preview_photo').on('show.bs.modal', function (event) {
       $("#img_head").text('');
       $("#img_title").text('');
        var a = $(event.relatedTarget);
        var pass = a.data('pass');
        var modal = $(this);

        $.ajax({
            type: 'GET',
            url: 'photo/show',
            data: 'id=' +pass,
            dataType: 'JSON',
            success: function(data){
                 $("#img_path").attr("src", "../../" + data.img);
                 $("#img_title").append('<h3> ' + data.judul + '</h3>');
                 $("#img_head").append('<i class="fa fa-photo fa-fw fa-lg"></i> Gambar ' + data.jenis);
                }
        });

});

$('#mdl_edit_photo').on('show.bs.modal', function (event) {
        $("#img_edit_head").text('');
        $("#img_edit_path").text('');
        $('#info_time_edit').text('');
        $('#info_user_edit').text('');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var modal = $(this);

        $.ajax({
            type: 'GET',
            url: 'photo/show',
            data: 'id=' +pass,
            dataType: 'JSON',
            success: function(data){
                $("#img_edit_head").append('<i class="fa fa-photo fa-fw fa-lg"></i> Gambar ' + data.jenis);
                $("#img_edit_path").attr("src", "../../" + data.img);
                $("[name='txt_edit_id']").val(data.id);
                $("[name='txt_edit_judul']").val(data.judul);
                $('select[name="txt_edit_jenis"] option[value="'+data.jenis+'"]').attr('selected','selected');
                $("#info_time_edit").append('<i class="fa fa-calendar fa-fw fa-lg"></i> ' + data.updated_at + ' (GMT +0)');
                $("#info_user_edit").append('<i class="fa fa-user fa-fw fa-lg"></i> ' + data.user);
                $('[name="txt_edit_jenis"]').selectpicker('refresh');
            }
        });

});

$('#mdl_hapus_photo').on('show.bs.modal', function (event) {
        $("#img_hapus_head").text('');
        $("#img_hapus_path").text('');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var modal = $(this);

        $.ajax({
            type: 'GET',
            url: 'photo/show',
            data: 'id=' +pass,
            dataType: 'JSON',
            success: function(data){
                $("#img_hapus_head").append('<i class="fa fa-photo fa-fw fa-lg"></i> Gambar ' + data.jenis);
                $("#img_hapus_path").attr("src", "../../" + data.img);
                $("[name='txt_hapus_id']").val(data.id);
            }
        });

});


$('#btn_frm_edit_photo').click(function(){
    if ($('[name="txt_edit_judul"]').val() != '')
    {
        var frm = $("#frm_edit_photo");
        $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_edit_photo").modal("hide");',2500);
            setTimeout(function(){window.location.replace("photo");}, 3000);
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

$('#btn_hapus_photo').click(function(){
    var id_hapus = $('[name="txt_hapus_id"]').val();
    $.ajax({
        type: 'GET',
        url: 'photo/delete',
        data: 'id='+id_hapus,
        success: function(response){
            setTimeout('$("#mdl_hapus_photo").modal("hide");',2000);
            setTimeout(function(){window.location.replace("photo");}, 2500);
        }
    });   
});
