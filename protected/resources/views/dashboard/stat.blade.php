@extends('template/template_dashboard')

@section('title')
<title>Panel Kontrol - Statistik</title>
{!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
{!! Html::style('assets/css/bootstrap-select/bootstrap-select.min.css') !!}
{!! Html::style('assets/css/dashboard/stat.css') !!}
@endsection

@section('sidebar')
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li>
                <a href="{{url()}}/account/dashboard"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Beranda</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/post"><span class="fa-stack fa-lg pull-left"><i class="fa fa-bullhorn fa-stack-1x "></i></span>Pos</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/product"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-shopping-cart fa-stack-1x "></i></span>Produk</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/photo"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-photo fa-stack-1x "></i></span>Foto</a>
            </li>
            <li id="active">
                <a href="{{url()}}/account/dashboard/stat"><span class="fa-stack fa-lg pull-left"><i class="fa fa-line-chart fa-stack-1x "></i></span>Statistik</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/feedback"><span class="fa-stack fa-lg pull-left"><i class="fa fa-retweet fa-stack-1x "></i></span>Umpan Balik</a>
            </li>
            <hr style="border-color: #969696; border-width: 3px;">
            <li id="active">
                <a href="{{url()}}" target="_blank"><span class="fa-stack fa-lg pull-left"><i class="fa fa-home fa-stack-1x "></i></span>Lihat Situs</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')

<div class="container-fluid">
	<div class="isi-post">
		<div class="row">
        <h3 class="page-header"><i class="fa fa-eye fa-lg fa-fw"></i> Statistik Pengunjung</h3>
              <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-log-visitor"><i class="fa fa-file-text-o fa-fw fa-lg"></i> Log</a></li>
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-grafik-visitor"><i class="fa fa-area-chart fa-fw fa-lg"></i> Grafik</a></li>
                        </ul>
                        <div class="tab-content">
							<div id="div-log-visitor" class="tab-pane fade in active" role="tabpanel">
                                <table id="table-log-visitor" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-wifi fa-fw fa-lg "></i> Alamat IP</th>
                                        <th><i class="fa fa-flag fa-fw fa-lg "></i> Negara</th>
                                        <th><i class="fa fa-calendar fa-fw fa-lg "></i> Tanggal</th>
                                        <th><i class="fa fa-th fa-fw fa-lg "></i> Aksi</th>     
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($show_log_guest as $all_log_guest)
                                    <tr>
                                        <td>{{$all_log_guest->ip}}</td>
                                        <td>{{$all_log_guest->country}}</td>
                                        <td>{{$all_log_guest->created_at}}</td>
                                        <td><a href="#mdl_stat" data-toggle="modal" data-passing="{{$all_log_guest->id}}"><i class="fa fa-eye fa-lg fa-fw"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                </table>
							</div>
							<div id="div-grafik-visitor" class="tab-pane fade in" role="tabpanel">
                                <table id="table-grafik-visitor" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-th-list fa-fw"></i> Hasil Perhitungan</th>
                                        <th><i class="fa fa-bar-chart fa-fw "></i> Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Hari Ini</td>
                                        <td>{{$show_log_guest_harian}}</td>
                                    </tr>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Minggu Ini</td>
                                        <td>{{$show_log_guest_mingguan}}</td>
                                    </tr>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Bulan Ini</td>
                                        <td>{{$show_log_guest_bulanan}}</td>
                                    </tr>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Tahun Ini</td>
                                        <td>{{$show_log_guest_tahunan}}</td>
                                    </tr>
                                </tbody>
                                </table>
							</div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
        <h3 class="page-header"><i class="fa fa-eye fa-lg fa-fw"></i> Statistik Admin</h3>
              <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-log-admin"><i class="fa fa-file-text-o fa-fw fa-lg"></i> Log</a></li>
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-grafik-admin"><i class="fa fa-area-chart fa-fw fa-lg"></i> Grafik</a></li>
                        </ul>
                        <div class="tab-content">
							<div id="div-log-admin" class="tab-pane fade in active" role="tabpanel">
                                <table id="table-log-admin" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-wifi fa-fw fa-lg "></i> Alamat IP</th>
                                        <th><i class="fa fa-flag fa-fw fa-lg "></i> Negara</th>
                                        <th><i class="fa fa-calendar fa-fw fa-lg "></i> Tanggal</th>
                                        <th><i class="fa fa-th fa-fw fa-lg "></i> Aksi</th>     
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($show_log_admin as $all_log_admin)
                                    <tr>
                                        <td>{{$all_log_admin->ip}}</td>
                                        <td>{{$all_log_admin->country}}</td>
                                        <td>{{$all_log_admin->created_at}}</td>
                                        <td><a href="#mdl_stat" data-toggle="modal" data-passing="{{$all_log_admin->id}}"><i class="fa fa-eye fa-lg fa-fw"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                </table>
							</div>
							<div id="div-grafik-admin" class="tab-pane fade in" role="tabpanel">
                                <table id="table-grafik-admin" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-th-list fa-fw"></i> Hasil Perhitungan</th>
                                        <th><i class="fa fa-bar-chart fa-fw "></i> Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Hari Ini</td>
                                        <td>{{$show_log_admin_harian}}</td>
                                    </tr>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Minggu Ini</td>
                                        <td>{{$show_log_admin_mingguan}}</td>
                                    </tr>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Bulan Ini</td>
                                        <td>{{$show_log_admin_bulanan}}</td>
                                    </tr>
                                    <tr width="100%">
                                        <td><i class="fa fa-calendar fa-fw fa-lg"></i> Tahun Ini</td>
                                        <td>{{$show_log_admin_tahunan}}</td>
                                    </tr>
                                </tbody>
                                </table>
							</div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
	</div>
</div> <!-- Container Fluid-->
@endsection

@section('mdl_custom')
<!--Modal Testimoni-->
<div class="modal fade" id="mdl_stat" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_stat_title"></h4>
      </div>
    <!-- Body --> 
    <div class="modal-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['class' => 'form-horizontal']) !!}
                <div class="form-group">
                    <label class="col-md-3 col-sm-4 col-xs-4 control-label"><i class="fa fa-wifi fa-fw fa-lg"></i> Alamat IP :</label>
                    <div class="col-md-9 col-sm-8 col-xs-8">
                        {!! Form::text('txt_stat_ip', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-4 col-xs-4 control-label"><i class="fa fa-flag fa-fw fa-lg"></i> Negara :</label>
                    <div class="col-md-9 col-sm-8 col-xs-8">
                        {!! Form::text('txt_stat_country', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-4 col-xs-4 control-label"><i class="fa fa-chrome fa-fw fa-lg"></i> Browser :</label>
                    <div class="col-md-9 col-sm-8 col-xs-8">
                        {!! Form::text('txt_stat_device', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-4 col-xs-4 control-label"><i class="fa fa-calendar fa-fw fa-lg"></i> Tanggal :</label>
                    <div class="col-md-9 col-sm-8 col-xs-8">
                        {!! Form::text('txt_stat_tanggal', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- Footer -->
      <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal, Tutup Ini</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

{!! Html::script('assets/js/bootstrap-filestyle.min.js')!!}
{!! Html::script('assets/js/dashboard/stat.js') !!}
{!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap-select/bootstrap-select.min.js') !!}

<script type="text/javascript">

$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
        $.fn.DataTable.ext.pager.numbers_length = 3;
    });

    $("#table-log-admin").dataTable({});
    $("#table-log-visitor").dataTable({});
    $("#table-grafik-visitor").dataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "filter": false
    });
    $("#table-grafik-admin").dataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "filter": false
    });
</script>
@endsection