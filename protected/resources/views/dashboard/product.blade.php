@extends('template/template_dashboard')

@section('title')
<title>Panel Kontrol - Produk</title>
{!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
{!! Html::style('assets/css/bootstrap-select/bootstrap-select.min.css') !!}
{!! Html::style('assets/css/dashboard/produk.css') !!}
@endsection

@section('form_gambar_hidden')
<div class="form-group" id="gambar_hidden_1">
    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-picture-o fa-fw fa-lg"></i> Gambar 1 :</label>
    <div class="col-lg-10 col-md-10 col-xs-8">
        <div class="input-group input-group-sm">
        {!! Form::text('txt_gbr_1', '', ['class' => 'form-control' , 'readonly'])!!}
          <span class="input-group-btn">
          <button class="btn btn-default" type="button" id="btn_eraser_gbr_hidden_1" data-toggle="tooltip" data-placement="top" title="Bersihkan Kolom"><i class="fa fa-eraser fa-fw fa-lg"></i></button>
          <button class="btn btn-default" type="button" id="btn_show_gbr_hidden_1" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
          <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden_1" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
          </span>
        </div>
    </div> 
</div>
<div class="form-group" id="gambar_hidden_2">
    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-picture-o fa-fw fa-lg"></i> Gambar 2 :</label>
    <div class="col-lg-10 col-md-10 col-xs-8">
        <div class="input-group input-group-sm">
            {!! Form::text('txt_gbr_2', '', ['class' => 'form-control', 'readonly'])!!}
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_eraser_gbr_hidden_2" data-toggle="tooltip" data-placement="top" title="Bersihkan Kolom"><i class="fa fa-eraser fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_show_gbr_hidden_2" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden_2" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
            </span>
        </div>
    </div> 
</div>
<div class="form-group" id="gambar_hidden_3">
    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-picture-o fa-fw fa-lg"></i> Gambar 3 :</label>
    <div class="col-lg-10 col-md-10 col-xs-8">
        <div class="input-group input-group-sm">
            {!! Form::text('txt_gbr_3', '', ['class' => 'form-control', 'readonly'])!!}
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_eraser_gbr_hidden_3" data-toggle="tooltip" data-placement="top" title="Bersihkan Kolom"><i class="fa fa-eraser fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_show_gbr_hidden_3" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden_3" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
            </span>
        </div>
    </div> 
</div>
@endsection

@section('form_gambar_hidden_edit')
<div class="form-group" id="gambar_hidden_edit_1">
    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-picture-o fa-fw fa-lg"></i> Gambar 1 :</label>
    <div class="col-lg-10 col-md-10 col-xs-8">
        <div class="input-group input-group-sm">
        {!! Form::text('txt_gbr_edit_1', '', ['class' => 'form-control' , 'readonly'])!!}
          <span class="input-group-btn">
          <button class="btn btn-default" type="button" id="btn_eraser_gbr_hidden_edit_1" data-toggle="tooltip" data-placement="top" title="Bersihkan Kolom"><i class="fa fa-eraser fa-fw fa-lg"></i></button>
          <button class="btn btn-default" type="button" id="btn_show_gbr_hidden_edit_1" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
          <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden_edit_1" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
          </span>
        </div>
    </div> 
</div>
<div class="form-group" id="gambar_hidden_edit_2">
    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-picture-o fa-fw fa-lg"></i> Gambar 2 :</label>
    <div class="col-lg-10 col-md-10 col-xs-8">
        <div class="input-group input-group-sm">
            {!! Form::text('txt_gbr_edit_2', '', ['class' => 'form-control', 'readonly'])!!}
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_eraser_gbr_hidden_edit_2" data-toggle="tooltip" data-placement="top" title="Bersihkan Kolom"><i class="fa fa-eraser fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_show_gbr_hidden_edit_2" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden_edit_2" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
            </span>
        </div>
    </div> 
</div>
<div class="form-group" id="gambar_hidden_edit_3">
    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-picture-o fa-fw fa-lg"></i> Gambar 3 :</label>
    <div class="col-lg-10 col-md-10 col-xs-8">
        <div class="input-group input-group-sm">
            {!! Form::text('txt_gbr_edit_3', '', ['class' => 'form-control', 'readonly'])!!}
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_eraser_gbr_hidden_edit_3" data-toggle="tooltip" data-placement="top" title="Bersihkan Kolom"><i class="fa fa-eraser fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_show_gbr_hidden_edit_3" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
                <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden_edit_3" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
            </span>
        </div>
    </div> 
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="isi_produk">
        <div class="row produk-gambar" style="">
        <h3 class="page-header"><i class="fa fa-file-photo-o fa-lg fa-fw"></i> Gambar Slide Produk</h3>
            @for ($i = 0; $i <=1 ; $i++)
            <div class="col-xs-6 col-md-3" style="text-align:center;">
                <h4><strong>Produk {{$i+1}}</strong></h4>
                <img src="{{$show_slide_product[$i]->string_url}}" class="img-responsive" onError="this.onerror=null;this.src='{{url()}}/assets/img/no-image.png';">
                <h4>{{$show_slide_product[$i]->label}}</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl_slide_gambar"  data-passing="{{$i+1}}"><i class="fa fa-edit fa-fw fa-lg"></i> Edit</button>
            </div>
            @endfor
             <h3 class="page-header col-xs-12" id="divider"></h3>
             @for ($i = 2; $i <=3 ; $i++)
            <div class="col-xs-6 col-md-3" style="text-align:center; ">
                <h4><strong>Produk {{$i+1}}</strong></h4>
                <img src="{{$show_slide_product[$i]->string_url}}" class="img-responsive" onError="this.onerror=null;this.src='{{url()}}/assets/img/no-image.png';">
                <h4>{{$show_slide_product[$i]->label}}</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl_slide_gambar" data-passing="{{$i+1}}"><i class="fa fa-edit fa-fw fa-lg"></i> Edit</button>
            </div>
            @endfor
        </div>

        <div class="row beranda-arsip-produk">
        <h3 class="page-header"><i class="fa fa-shopping-bag fa-lg fa-fw"></i> Arsip Produk</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-new"><i class="fa fa-plus fa-fw fa-lg"></i> Baru</a></li>
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-concept"><i class="fa fa-flask fa-fw fa-lg"></i> Draft</a></li>
                            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-publish"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Publikasi</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="div-publish" class="tab-pane fade in active" role="tabpanel">
                                <table id="table-publish" class="table dt-responsive" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th><i class="fa fa-pencil fa-fw"></i> Nama Item</th>
                                            <th><i class="fa fa-tag fa-fw "></i>Label</th>
                                            <th><i class="fa fa-user fa-fw "></i>Pengguna</th>
                                            <th><i class="fa fa-calendar fa-fw "></i>Diposkan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div id="div-concept" class="tab-pane fade in" role="tabpanel">
                                <table id="table-concept" class="table dt-responsive" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th><i class="fa fa-pencil fa-fw"></i>Nama Item</th>
                                            <th><i class="fa fa-tag fa-fw "></i>Label</th>
                                            <th><i class="fa fa-user fa-fw "></i>Pengguna</th>
                                            <th><i class="fa fa-calendar fa-fw "></i>Dikonsepkan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div id="div-new" class="tab-pane fade in" role="tabpanel">
                                <div class="row">
                                    
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-success"></div>
                <div class="alert alert-danger" ></div>
            </div>
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url'=>'account/dashboard/product/upload','method'=>'POST', 'files'=>true , 'class' => 'form-horizontal', 'id' => 'frm_upload_prod']) !!}
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-upload fa-fw fa-lg"></i> Upload :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                            <input type="file" name="txt_gambar" id="btn_upload_prod">
                            <label class="control-label">Ukuran maksimal 2MB (.jpg | .png | .gif) (Ukuran disarankan: 640x480)</label>           
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-xs-8 col-xs-offset-4" style="margin-bottom:15px; margin-top:-10px;">
                <button id="btn_upload_aksi_prod" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-send fa-fw"></i> Unggah</button>
                <button id="btn_upload_clear_prod" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-eraser fa-fw"></i> Reset</button>  
            </div>

            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => '/account/dashboard/product/save', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_save_prod']) !!}

                @yield('form_gambar_hidden')

                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-pencil fa-fw fa-lg"></i> Nama Item :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_judul', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-tag fa-fw fa-lg"></i> Label :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        <select name="txt_label" class="selectpicker">
                        @for ($i = 0; $i <=3 ; $i++)
                            <option value="{{$show_slide_product[$i]->label}}">{{$show_slide_product[$i]->label}}</option>
                        @endfor
                        </select>
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-spinner fa-spin fa-fw fa-lg"></i> Status :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        <select name="txt_status" class="selectpicker">
                            <option value="Konsep">Draft</option>
                            <option value="Publikasi">Publikasi</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        {!! Form::textarea('txt_isi', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>  

            
            <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                <div class="well well-xs">
                    <button id="btn_frm_prod" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
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
            <li id="active">
                <a href="{{url()}}/account/dashboard/product"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-shopping-cart fa-stack-1x "></i></span>Produk</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/photo"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-photo fa-stack-1x "></i></span>Foto</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/stat"><span class="fa-stack fa-lg pull-left"><i class="fa fa-line-chart fa-stack-1x "></i></span>Statistik</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/feedback"><span class="fa-stack fa-lg pull-left"><i class="fa fa-retweet fa-stack-1x "></i></span>Umpan Balik</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/history"><span class="fa-stack fa-lg pull-left"><i class="fa fa-history fa-stack-1x "></i></span>Riwayat</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/setting"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cogs fa-stack-1x "></i></span>Pengaturan</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/help"><span class="fa-stack fa-lg pull-left"><i class="fa fa-info fa-stack-1x "></i></span>Bantuan</a>
            </li>
        </ul>
    </div>
@endsection

@section('dir')
    <ul class="breadcrumb">
        <li><a id="footer_link" href="/blog/account/dashboard"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a id="footer_link" href="/blog/account/dashboard/product"><span class="glyphicon glyphicon-shopping-cart"></span> Produk</a></li>
        <li><a id="footer_link" href="/blog/account/dashboard/product"><span class="glyphicon glyphicon-shopping-cart"></span> Produk</a></li>
        <li><a id="footer_link" href="/blog/account/dashboard/product"><span class="glyphicon glyphicon-shopping-cart"></span> Produk</a></li>
        <li><a id="footer_link" href="/blog/account/dashboard/product"><span class="glyphicon glyphicon-shopping-cart"></span> Produk</a></li>
    </ul>
@endsection

@section('mdl_custom')
<!--Modal Slide Produk-->
<div class="modal fade" id="mdl_slide_gambar" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_slide_gambar_title"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-success"></div>
                <div class="alert alert-danger" ></div>
            </div>
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url'=>'account/dashboard/product/upload','method'=>'POST', 'files'=>true , 'class' => 'form-horizontal', 'id' => 'frm_upload']) !!}
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-upload fa-fw"></i> Upload :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                            <input type="file" name="txt_gambar" id="btn_upload">
                            <label class="control-label">Ukuran maksimal 2MB (.jpg | .png | .gif) (Ukuran disarankan: 640x480)</label>           
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-xs-8 col-xs-offset-4" style="margin-bottom:15px; margin-top:-10px;">
                <button id="btn_upload_aksi" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-send fa-fw"></i> Unggah</button>
                <button id="btn_upload_clear" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-trash fa-fw"></i> Reset</button>  
            </div>

            <div class="col-lg-8 col-lg-offset-2 col-xs-8 col-xs-offset-2" style="margin-bottom:15px; margin-top:10px;">
                <div class="well well-xs" id="gambar_tmp" style="text-align:center;">
                    <hr>
                    <button id="btn_u_set" class="btn btn-success" style="margin:5px"></button>
                    <button id="btn_u_del" class="btn btn-danger" style="margin:5px"><i class="fa fa-trash fa-fw fa-lg"></i> Hapus Gambar</button>
                </div>
            </div>
            
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => '/account/dashboard/product/slide_gambar', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_slide_gambar']) !!}
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-play-circle fa-fw"></i> Produk :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_produk', '', ['class' => 'form-control', 'readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-tag fa-fw"></i> Label :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_label', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-link fa-fw"></i> Url Gambar :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_url', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>
            
            <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                <div class="well well-xs">
                    <button id="btn_frm_slide_gambar" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
                <h6>
                <span class="glyphicon glyphicon-console"></span> Terakhir diubah: 
                <b id="info_time"></b> oleh <b id="info_user"></b>
                </h6>
                </div>
            </div>
            
        </div>
      </div>
    <!-- Footer -->
      <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal, Tutup Ini</button>
      </div>
    </div>
  </div>
</div>

<!--Modal Gambar Hidden-->
<div class="modal fade" id="mdl_gambar_hidden" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_gambar_hidden_title"></h4>
        <h4 class="modal-title" id="mdl_gambar_hidden_edit_title"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="table-responsive">
                <div class="well well-xs" id="gambar_hidden_tmp" style="text-align:center;">
                    <img src="{{url()}}/assets/img/no-image.png" id="img_gbr_tmp" class="img-responsive">
                </div>
            </div>
        </div>
      </div>
    <!-- Footer -->
      <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup Ini</button>
      </div>
    </div>
  </div>
</div>

<!--Modal produk Edit-->
<div class="modal fade" id="mdl_prod_edit" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_prod_edit_title"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="table-responsive">
                <div class="col-lg-12 col-xs-12">
                    <div class="alert alert-success"></div>
                    <div class="alert alert-danger" ></div>
                </div>
                <div class="col-lg-12 col-xs-12">
                    {!! Form::open(['url'=>'account/dashboard/product/upload','method'=>'POST', 'files'=>true , 'class' => 'form-horizontal', 'id' => 'frm_upload_edit_prod']) !!}
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-upload fa-fw fa-lg"></i> Upload :</label>
                        <div class="col-lg-10 col-md-10 col-xs-8">
                                <input type="file" name="txt_gambar" id="btn_upload_prod_edit">
                                <label class="control-label">Ukuran maksimal 2MB (.jpg | .png | .gif) (Ukuran disarankan: 640x480)</label>           
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-xs-8 col-xs-offset-4" style="margin-bottom:15px; margin-top:-10px;">
                    <button id="btn_upload_aksi_prod_edit" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-send fa-fw"></i> Unggah</button>
                    <button id="btn_upload_clear_prod_edit" class="btn btn-default" style="margin-top:5px;"><i class="fa fa-eraser fa-fw"></i> Reset</button>  
                </div>

            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => '/account/dashboard/product/edit', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_edit_prod']) !!}

                @yield('form_gambar_hidden_edit')

                <div class="form-group" style="display:none;">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-pencil fa-fw fa-lg"></i> ID :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_id_edit', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-pencil fa-fw fa-lg"></i> Judul :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_judul_edit', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-tag fa-fw fa-lg"></i> Label :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        <select name="txt_label_edit" class="selectpicker">
                        @for ($i = 0; $i <=3 ; $i++)
                            <option value="{{$show_slide_product[$i]->label}}">{{$show_slide_product[$i]->label}}</option>
                        @endfor
                        </select>
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-spinner fa-spin fa-fw fa-lg"></i> Status :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        <select name="txt_status_edit" class="selectpicker">
                            <option value="Konsep">Draft</option>
                            <option value="Publikasi">Publikasi</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        {!! Form::textarea('txt_isi_edit', '', ['class' => 'form-control', 'id' => 'txt_isi_edit'])!!}
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>
            
            <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                <div class="well well-xs">
                    <button id="btn_frm_prod_edit" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
                <h6><span class="glyphicon glyphicon-console"></span> Terakhir diubah: 
                <b id="info_time_edit"></b> oleh <b id="info_user_edit"></b></h6>
                </div>
            </div>

            </div>
        </div>
      </div>
    <!-- Footer -->
      <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal, Tutup Ini</button>
      </div>
    </div>
  </div>
</div>

<!--Modal produk Hapus-->
<div class="modal fade" id="mdl_prod_hapus" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_prod_hapus_title"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <input type="text" name="txt_hapus" style="display:none">
        <strong>Apakah Anda yakin ingin menghapus produk ini ?</strong>
        <br><p id="info-hapus"></p>
      </div>
    <!-- Footer -->
      <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tidak, Tutup Ini</button>
          <button type="button" id="btn_hapus_prod" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya, Hapus</button>
      </div>
    </div>
  </div>
</div>

{!! Html::script('assets/js/bootstrap-filestyle.min.js')!!}
{!! Html::script('assets/js/dashboard/produk.js') !!}
{!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap-select/bootstrap-select.min.js') !!}

@push('script')
<script type="text/javascript">
$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
        $.fn.DataTable.ext.pager.numbers_length = 3;
    });

    $("#table-publish").dataTable({
        ajax : '{{route('product.publish')}}',
        columns: [
            {data: 0, name: 'id'},
            {data: 1, name: 'judul'},
            {data: 2, name: 'tag'},
            {data: 3, name: 'user'},
            {data: 5, name: 'updated_at'},
            {
                data: null,
                mRender: function(data,type,full){
                return '<a href=" {{url()}}/products/view?id='+full[0]+'" target="_blank"><i class="fa fa- fa-external-link fa-lg fa-fw"></i></a> | <a href=" http://somepage.php?UID='+full[0]+'"><i class="fa fa-eye fa-lg fa-fw"></i></a> | <a href="#mdl_prod_edit" data-toggle="modal" data-passing="'+full[0]+'" data-passing2="'+full[1]+'"><i class="fa fa-edit fa-lg fa-fw"></i></a> | <a href="#mdl_prod_hapus" data-toggle="modal" data-passing="'+full[0]+'" data-passing2="'+full[1]+'"><i class="fa fa-trash fa-lg fa-fw"></i></a>';
                }
            }
        ]
    });

    $("#table-concept").dataTable({
        ajax : '{{route('product.concept')}}',
        columns : [
            {data: 0, name: 'id'},
            {data: 1, name: 'judul'},
            {data: 2, name: 'tag'},
            {data: 3, name: 'user'},
            {data: 5, name: 'updated_at'},
            {
                data: null,
                mRender: function(data,type,full){
                return '<a href=" http://somepage.php?UID='+full[0]+'"><i class="fa fa-eye fa-lg fa-fw"></i></a> | <a href="#mdl_prod_edit" data-toggle="modal" data-passing="'+full[0]+'" data-passing2="'+full[1]+'"><i class="fa fa-edit fa-lg fa-fw"></i></a> | <a href="#mdl_prod_hapus" data-toggle="modal" data-passing="'+full[0]+'" data-passing2="'+full[1]+'"><i class="fa fa-trash fa-lg fa-fw"></i></a>';
                }
            }
        ]
    });

</script>
@endpush

@endsection
