$('.alert-success').hide();
$('.alert-danger').hide();

$('#mdl_testi_pending').on('show.bs.modal', function (event) {
        $('#mdl_testi_pending_title').text('');
        $('#isi_testimoni_pending').text('');
        $('[name="txt_status_testi_pending"] > option').removeAttr('selected');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var pass2 = a.data('passing2');
        var modal = $(this);
        modal.find('#mdl_testi_pending_title').append('<i class="fa fa-feed fa-fw fa-lg"></i> Testimoni ' + pass2 );

        $.ajax({
            type: 'GET',
            url: 'feedback/testimoni_show',
            data: 'q=' +pass,
            dataType: 'JSON',
            success: function(data){
                $("#isi_testimoni_pending").append('<h4>" '+ data.isi +' "</h4>');
                $('[name="txt_id_testi_pending"]').val(data.id);
                $('[name="txt_user_testi_pending"]').val(data.user);
                $('[name="txt_ip_testi_pending"]').val(data.ip);
                $('[name="txt_tanggal_testi_pending"]').val(data.created_at);
                $('select[name="txt_status_testi_pending"] option[value="'+data.status+'"]').attr('selected','selected');
                $('[name="txt_status_testi_pending"]').selectpicker('refresh');
        }
    });
});

$('#btn_frm_testi_pending').click(function(){
    var frm = $("#frm_testi_pending");
        $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_testi_pending").modal("hide");',2500);
            setTimeout(function(){window.location.replace("feedback");}, 3000);
        }
    });
});

$('#mdl_testi').on('show.bs.modal', function (event) {
        $('#mdl_testi_title').text('');
        $('#isi_testimoni').text('');
        $('[name="txt_status_testi"] > option').removeAttr('selected');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var pass2 = a.data('passing2');
        var modal = $(this);
        modal.find('#mdl_testi_title').append('<i class="fa fa-feed fa-fw fa-lg"></i> Testimoni ' + pass2 );

        $.ajax({
            type: 'GET',
            url: 'feedback/testimoni_show',
            data: 'q=' +pass,
            dataType: 'JSON',
            success: function(data){
                $("#isi_testimoni").append('<h4>" '+ data.isi +' "</h4>');
                $('[name="txt_id_testi"]').val(data.id);
                $('[name="txt_user_testi"]').val(data.user);
                $('[name="txt_ip_testi"]').val(data.ip);
                $('[name="txt_tanggal_testi"]').val(data.created_at);
                $('select[name="txt_status_testi"] option[value="'+data.status+'"]').attr('selected','selected');
                $('[name="txt_status_testi"]').selectpicker('refresh');
        }
    });
});

$('#btn_frm_testi').click(function(){
    var frm = $("#frm_testi");
        $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function(){
            $('.alert-success').show();
            $('.alert-success').html('<strong><i class="fa fa-check fa-fw fa-lg"></i> Data berhasil disimpan!</strong>');
            setTimeout('$(".alert").hide(); $("#mdl_testi").modal("hide");',2500);
            setTimeout(function(){window.location.replace("feedback");}, 3000);
        }
    });
});


$('#mdl_testi_hapus').on('show.bs.modal', function (event) {
        $('#mdl_testi_hapus_title').text('');
        $('#isi_testimoni_hapus').text('');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var pass2 = a.data('passing2');
        var modal = $(this);
        modal.find('#mdl_testi_hapus_title').append('<i class="fa fa-feed fa-fw fa-lg"></i> Testimoni ' + pass2 );

        $.ajax({
            type: 'GET',
            url: 'feedback/testimoni_show',
            data: 'q=' +pass,
            dataType: 'JSON',
            success: function(data){
                $("#isi_testimoni_hapus").append('<h4>" '+ data.isi +' "</h4>');
                $('[name="txt_id_testi_hapus"]').val(data.id);
        }
    });
});

$('#btn_testi_hapus').click(function(){
    var id_hapus = $('[name="txt_id_testi_hapus"]').val();
    $.ajax({
        type: 'GET',
        url: 'feedback/testimoni_delete',
        data: 'q='+id_hapus,
        success: function(response){
            setTimeout('$("#mdl_testi_hapus").modal("hide");',2000);
            setTimeout(function(){window.location.replace("feedback");}, 2500);
        }
    });   
});