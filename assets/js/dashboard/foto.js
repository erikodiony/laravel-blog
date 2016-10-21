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

$('#btn_delete_gbr_hidden_1').click(function(){
    var namafile = $('[name="txt_gbr_path"]').val();
    hapus_gbr(namafile);
    $('[name="txt_gbr_path"]').val('');
    $('#gambar_hidden_1').hide();
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