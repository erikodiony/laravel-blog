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
          <button class="btn btn-default" type="button" id="btn_show_gbr_hidden" data-toggle="tooltip" data-placement="top" title="Lihat Gambar"><i class="fa fa-eye fa-fw fa-lg"></i></button>
          <button class="btn btn-default" type="button" id="btn_delete_gbr_hidden" data-toggle="tooltip" data-placement="top" title="Hapus Gambar"><i class="fa fa-trash fa-fw fa-lg"></i></button>
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
                                <table id="table-arsip" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-th-list fa-fw fa-lg"></i> ID</th>
                                        <th><i class="fa fa-file-image-o fa-fw fa-lg "></i> Gambar</th>
                                        <th><i class="fa fa-thumb-tack fa-fw fa-lg "></i> Judul</th>
                                        <th><i class="fa fa-calendar fa-fw fa-lg "></i> Tanggal</th>
                                        <th><i class="fa fa-th fa-fw fa-lg "></i> Aksi</th>     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($show_img_arsip as $all_img_arsip)
                                    <tr>
                                        <td>{{$all_img_arsip->id}}</td>
                                        <td><a href="#mdl_preview_photo" data-toggle="modal" data-target="#mdl_preview_photo" data-pass="{{$all_img_arsip->id}}"><img class="img-responsive" src="{{url()}}/{{$all_img_arsip->img}}" alt="{{$all_img_arsip->judul}}" style="display: block; max-height: 150px; max-width: 150px; width: auto; height: auto; text-align: left;"></a>
                                        </td>
                                        <td>{{$all_img_arsip->judul}}</td>
                                        <td>{{$all_img_arsip->updated_at}}</td>
                                        <td><a href="#mdl_link_photo" data-toggle="modal" data-pass="{{$all_img_arsip->id}}"><i class="fa fa-cut fa-lg fa-fw"></i></a> | <a href="#mdl_edit_photo" data-toggle="modal" data-passing="{{$all_img_arsip->id}}"><i class="fa fa-edit fa-lg fa-fw"></i></a> | <a href="#mdl_hapus_photo" data-toggle="modal" data-passing="{{$all_img_arsip->id}}"><i class="fa fa-trash fa-lg fa-fw"></i></a> | <a href="{{url()}}/{{$all_img_arsip->img}}" target="_blank" download><i class="fa fa-download fa-lg fa-fw"></i></a></td>
                                    </tr>
                                    @endforeach        
                                </tbody>
                                </table>
							</div>
							<div id="div-galeri" class="tab-pane fade in" role="tabpanel">
                                <table id="table-galeri" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-th-list fa-fw fa-lg"></i> ID</th>
                                        <th><i class="fa fa-file-image-o fa-fw fa-lg "></i> Gambar</th>
                                        <th><i class="fa fa-thumb-tack fa-fw fa-lg "></i> Judul</th>
                                        <th><i class="fa fa-calendar fa-fw fa-lg "></i> Tanggal</th>
                                        <th><i class="fa fa-th fa-fw fa-lg "></i> Aksi</th>     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($show_img_galeri as $all_img_galeri)
                                    <tr>
                                        <td>{{$all_img_galeri->id}}</td>
                                        <td><a href="#mdl_preview_photo" data-toggle="modal" data-target="#mdl_preview_photo" data-pass="{{$all_img_galeri->id}}"><img class="img-responsive" src="{{url()}}/{{$all_img_galeri->img}}" alt="{{$all_img_galeri->judul}}" style="display: block; max-height: 150px; max-width: 150px; width: auto; height: auto; text-align: left;"></a>
                                        </td>
                                        <td>{{$all_img_galeri->judul}}</td>
                                        <td>{{$all_img_galeri->updated_at}}</td>
                                        <td><a href="#mdl_link_photo" data-toggle="modal" data-pass="{{$all_img_galeri->id}}"><i class="fa fa-cut fa-lg fa-fw"></i></a> | <a href="#mdl_edit_photo" data-toggle="modal" data-passing="{{$all_img_galeri->id}}"><i class="fa fa-edit fa-lg fa-fw"></i></a> | <a href="#mdl_hapus_photo" data-toggle="modal" data-passing="{{$all_img_galeri->id}}"><i class="fa fa-trash fa-lg fa-fw"></i></a> | <a href="{{url()}}/{{$all_img_galeri->img}}" target="_blank" download><i class="fa fa-download fa-lg fa-fw"></i></a></td>
                                    </tr>
                                    @endforeach        
                                </tbody>
                                </table>
							</div>
							<div id="div-produk" class="tab-pane fade in" role="tabpanel">
                                <table id="table-produk" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-th-list fa-fw fa-lg"></i> ID</th>
                                        <th><i class="fa fa-file-image-o fa-fw fa-lg "></i> Gambar</th>
                                        <th><i class="fa fa-thumb-tack fa-fw fa-lg "></i> Judul</th>
                                        <th><i class="fa fa-calendar fa-fw fa-lg "></i> Tanggal</th>
                                        <th><i class="fa fa-th fa-fw fa-lg "></i> Aksi</th>     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($show_img_produk as $all_img_produk)
                                    <tr>
                                        <td>{{$all_img_produk->id}}</td>
                                        <td><a href="#mdl_preview_photo" data-toggle="modal" data-target="#mdl_preview_photo" data-pass="{{$all_img_produk->id}}"><img class="img-responsive" src="{{url()}}/{{$all_img_produk->img}}" alt="{{$all_img_produk->judul}}" style="display: block; max-height: 150px; max-width: 150px; width: auto; height: auto; text-align: left;"></a>
                                        </td>
                                        <td>{{$all_img_produk->judul}}</td>
                                        <td>{{$all_img_produk->updated_at}}</td>
                                        <td><a href="#mdl_link_photo" data-toggle="modal" data-pass="{{$all_img_produk->id}}"><i class="fa fa-cut fa-lg fa-fw"></i></a> | <a href="#mdl_edit_photo" data-toggle="modal" data-passing="{{$all_img_produk->id}}"><i class="fa fa-edit fa-lg fa-fw"></i></a> | <a href="#mdl_hapus_photo" data-toggle="modal" data-passing="{{$all_img_produk->id}}"><i class="fa fa-trash fa-lg fa-fw"></i></a> | <a href="{{url()}}/{{$all_img_produk->img}}" target="_blank" download><i class="fa fa-download fa-lg fa-fw"></i></a></td>
                                    </tr>
                                    @endforeach        
                                </tbody>
                                </table>
							</div>
							<div id="div-slide" class="tab-pane fade in" role="tabpanel">
                                <table id="table-slide" class="table dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-th-list fa-fw fa-lg"></i> ID</th>
                                        <th><i class="fa fa-file-image-o fa-fw fa-lg "></i> Gambar</th>
                                        <th><i class="fa fa-thumb-tack fa-fw fa-lg "></i> Judul</th>
                                        <th><i class="fa fa-calendar fa-fw fa-lg "></i> Tanggal</th>
                                        <th><i class="fa fa-th fa-fw fa-lg "></i> Aksi</th>     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($show_img_slide as $all_img_slide)
                                    <tr>
                                        <td>{{$all_img_slide->id}}</td>
                                        <td><a href="#mdl_preview_photo" data-toggle="modal" data-target="#mdl_preview_photo" data-pass="{{$all_img_slide->id}}"><img class="img-responsive" src="{{url()}}/{{$all_img_slide->img}}" alt="{{$all_img_slide->judul}}" style="display: block; max-height: 150px; max-width: 150px; width: auto; height: auto; text-align: left;"></a>
                                        </td>
                                        <td>{{$all_img_slide->judul}}</td>
                                        <td>{{$all_img_slide->updated_at}}</td>
                                        <td><a href="#mdl_link_photo" data-toggle="modal" data-pass="{{$all_img_slide->id}}"><i class="fa fa-cut fa-lg fa-fw"></i></a> | <a href="#mdl_edit_photo" data-toggle="modal" data-passing="{{$all_img_slide->id}}"><i class="fa fa-edit fa-lg fa-fw"></i></a> | <a href="#mdl_hapus_photo" data-toggle="modal" data-passing="{{$all_img_slide->id}}"><i class="fa fa-trash fa-lg fa-fw"></i></a> | <a href="{{url()}}/{{$all_img_slide->img}}" target="_blank" download><i class="fa fa-download fa-lg fa-fw"></i></a></td>
                                    </tr>
                                    @endforeach        
                                </tbody>
                                </table>
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
                                            <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-thumb-tack fa-fw fa-lg"></i> Judul :</label>
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

@section('mdl_custom')
<!--Modal Preview Upload-->
<div class="modal fade" id="mdl_preview_upload" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
       <h4 class="modal-title"><i class="fa fa-photo fa-fw fa-lg"></i> Foto</h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="col-lg-12 col-xs-12" style="text-align:center;">
              <div style="display:block; vertical-align:middle; text-align:center">
                <img id="img_tmp_path" class="img-responsive">
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

<!--Modal Preview Foto-->
<div class="modal fade" id="mdl_preview_photo" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="img_head"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">          
            <div class="col-lg-12 col-xs-12" style="text-align:center;">
              <div style="display:block; vertical-align:middle; text-align:center">
                <img src="" id="img_path" class="img-responsive" style="margin: 0 auto;">
              </div>
              <div class="col-lg-12 col-xs-12" id="img_title" style="text-align:center;">
                <h3></h3>
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
<!-- END Modal Preview Foto-->

<!--Modal Link Foto-->
<div class="modal fade" id="mdl_link_photo" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="img_link_head"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">          
            <div class="col-lg-12 col-xs-12" style="text-align:center;">
              <div style="display:block; vertical-align:middle; text-align:center">
                <img src="" id="img_link_path" class="img-responsive" style="max-height: 200px; max-width: 200px;">
              </div><br>
              <div class="col-lg-12 col-xs-12" style="text-align:center;">
               <label>Url Gambar : </label> {!! Form::text('txt_img_path', '', ['class' => 'form-control' , 'readonly'])!!}
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
<!-- END Modal Link Foto-->

<!--Modal Edit Foto-->
<div class="modal fade" id="mdl_edit_photo" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="img_edit_head"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="table-responsive">
                <div class="col-lg-12 col-xs-12">
                    <div class="alert alert-success"></div>
                    <div class="alert alert-danger" ></div>
                </div>
              <div style="display:block; vertical-align:middle; text-align:center">
                <img src="" id="img_edit_path" class="img-responsive" style="max-height: 200px; max-width: 200px;">
              </div><br>
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => '/account/dashboard/photo/edit', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_edit_photo']) !!}
                <div class="form-group" style="display: none;">
                    <label class="col-md-3 col-xs-4 control-label"><i class="fa fa-pencil fa-fw fa-lg"></i> ID :</label>
                    <div class="col-md-9 col-xs-8">
                        {!! Form::text('txt_edit_id', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-4 control-label"><i class="fa fa-thumb-tack fa-fw fa-lg"></i> Judul :</label>
                    <div class="col-md-9 col-xs-8">
                        {!! Form::text('txt_edit_judul', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-4 control-label"><i class="fa fa-tasks fa-fw fa-lg"></i> Jenis :</label>
                    <div class="col-md-9 col-xs-8">
                        <select name="txt_edit_jenis" class="selectpicker">
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
                    <button id="btn_frm_edit_photo" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
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
<!-- END Modal Edit Foto-->

<!--Modal Hapus Foto-->
<div class="modal fade" id="mdl_hapus_photo" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="img_hapus_head"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">          
            <div class="col-lg-12 col-xs-12" style="text-align:center;">
            <div style="display:block; vertical-align:middle; text-align:center">
                <img src="" id="img_hapus_path" class="img-responsive" style="max-height: 200px; max-width: 200px;">
            </div>
              <input type="text" name="txt_hapus_id" style="display: none;">
              <div class="col-lg-12 col-xs-12" id="img_title" style="text-align:center;">
                <h3><strong>Apakah Anda yakin ingin menghapus gambar ini ?</strong></h3>
              </div>
            </div>
        </div>
      </div>
    <!-- Footer -->
      <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tidak, Tutup Ini</button>
          <button type="button" id="btn_hapus_photo" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya, Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- END Modal Hapus Foto-->

@endsection

@section('script')
{!! Html::script('assets/js/bootstrap-filestyle.min.js')!!}
{!! Html::script('assets/js/dashboard/foto.js') !!}
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

$("#table-arsip").dataTable({});
$("#table-galeri").dataTable({});
$("#table-produk").dataTable({});
$("#table-slide").dataTable({});

$('#mdl_link_photo').on('show.bs.modal', function (event) {
       $("#img_link_head").text('');
       $("#img_link_path").text('');
        var a = $(event.relatedTarget);
        var pass = a.data('pass');
        var modal = $(this);

        $.ajax({
            type: 'GET',
            url: 'photo/show',
            data: 'id=' +pass,
            dataType: 'JSON',
            success: function(data){
                 $("#img_link_path").attr("src", "../../" + data.img);
                 $("[name='txt_img_path']").val( '{{url()}}' + "/" + data.img);
                 $("#img_link_head").append('<i class="fa fa-photo fa-fw fa-lg"></i> Gambar ' + data.jenis);
                }
        });

});

</script>
@endsection