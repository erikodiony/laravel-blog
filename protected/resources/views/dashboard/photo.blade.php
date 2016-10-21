@extends('template/template_dashboard')

@section('title')
<title>Panel Kontrol - Foto</title>
{!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
{!! Html::style('assets/css/bootstrap-select/bootstrap-select.min.css') !!}
{!! Html::style('assets/css/dashboard/foto.css') !!}
@endsection

@section('form_gambar_hidden')
<div class="form-group" id="gambar_hidden_1">
    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-picture-o fa-fw fa-lg"></i> Gambar :</label>
    <div class="col-lg-10 col-md-10 col-xs-8">
        <div class="input-group input-group-sm">
        {!! Form::text('txt_gbr_path', '', ['class' => 'form-control' , 'readonly'])!!}
          <span class="input-group-btn">
          <button class="btn btn-default" type="button" id="btn_show_gbr_hidden_1" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
          <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden_1" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
          </span>
        </div>
    </div>
</div>
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
            <li id="active">
                <a href="{{url()}}/account/dashboard/photo"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-photo fa-stack-1x "></i></span>Foto</a>
            </li>
            <li>
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
        <h3 class="page-header"><i class="fa fa-photo fa-lg fa-fw"></i> Arsip Foto</h3>
              <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-arsip"><i class="fa fa-photo fa-fw fa-lg"></i> Arsip</a></li>
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-galeri"><i class="fa fa-photo fa-fw fa-lg"></i> Galeri</a></li>
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-produk"><i class="fa fa-photo fa-fw fa-lg"></i> Produk</a></li>
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-slide"><i class="fa fa-photo fa-fw fa-lg"></i> Slide</a></li>
                        </ul>
                        <div class="tab-content">
							<div id="div-arsip" class="tab-pane fade in active" role="tabpanel">

							</div>
							<div id="div-galeri" class="tab-pane fade in" role="tabpanel">

							</div>
							<div id="div-produk" class="tab-pane fade in" role="tabpanel">

							</div>
							<div id="div-slide" class="tab-pane fade in" role="tabpanel">

							</div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <div class="row">
        <h3 class="page-header"><i class="fa fa-file-image-o fa-lg fa-fw"></i> Tambah Foto</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-upload"><i class="fa fa-plus fa-fw fa-lg"></i> Baru</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="div-upload" class="tab-pane fade in active" role="tabpanel">
                                <div class="row">   
                                    <div class="col-lg-12 col-xs-12">
                                        <div class="alert alert-success"></div>
                                        <div class="alert alert-danger" ></div>
                                    </div>
                                    <div class="col-lg-12 col-xs-12">
                                        {!! Form::open(['url'=>'account/dashboard/photo/upload','method'=>'POST', 'files'=>true , 'class' => 'form-horizontal', 'id' => 'frm_upload']) !!}
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-upload fa-fw fa-lg"></i> Upload :</label>
                                            <div class="col-lg-10 col-md-10 col-xs-8">
                                                <input type="file" name="txt_gambar" id="btn_upload">
                                                <label class="control-label">Ukuran maksimal 2MB (.jpg | .png | .gif) (Ukuran disarankan: 640x480)</label>           
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-xs-8 col-xs-offset-4" style="margin-bottom:15px; margin-top:-10px;">
                                        <button id="btn_upload_aksi" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-send fa-fw"></i> Unggah</button>
                                        <button id="btn_upload_clear" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-eraser fa-fw"></i> Reset</button>  
                                    </div>
                                    <div class="col-lg-12 col-xs-12">
                                        {!! Form::open(['url' => '/account/dashboard/photo/save', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_save']) !!}

                                        @yield('form_gambar_hidden')

                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-pencil fa-fw fa-lg"></i> Judul :</label>
                                            <div class="col-lg-10 col-md-10 col-xs-8">
                                                {!! Form::text('txt_judul', '', ['class' => 'form-control'])!!}
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-tasks fa-fw fa-lg"></i> Jenis :</label>
                                            <div class="col-lg-10 col-md-10 col-xs-8">
                                                <select name="txt_jenis" class="selectpicker">
                                                    <option value="Arsip">Arsip</option>
                                                    <option value="Galeri">Galeri</option>
                                                    <option value="Produk">Produk</option>
                                                    <option value="Slide">Slide</option>
                                                </select>
                                            </div> 
                                        </div>
                                        {!! Form::close() !!}
                                    </div>  
                                    <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                                        <div class="well well-xs">
                                            <button id="btn_frm" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>


    </div> <!-- Row -->
</div>
@endsection

@section('script')
{!! Html::script('assets/js/bootstrap-filestyle.min.js')!!}
{!! Html::script('assets/js/dashboard/foto.js') !!}
{!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap-select/bootstrap-select.min.js') !!}
@endsection