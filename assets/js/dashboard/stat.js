$('#mdl_stat').on('show.bs.modal', function (event) {
        $('#mdl_stat_title').text('');
        var a = $(event.relatedTarget);
        var pass = a.data('passing');
        var modal = $(this);

        $.ajax({
            type: 'GET',
            url: 'stat/show',
            data: 'id=' +pass,
            dataType: 'JSON',
            success: function(data){
                $('#mdl_stat_title').append('<i class="fa fa-eye fa-fw fa-lg"></i> Statistik ' + data.user );
                $('[name="txt_stat_ip"]').val(data.ip);
                $('[name="txt_stat_country"]').val(data.country);
                $('[name="txt_stat_device"]').val(data.device);
                $('[name="txt_stat_tanggal"]').val(data.created_at);
        }
    });
});