@extends('template/template_dashboard')

@section('title')
<title>Panel Kontrol - Beranda</title>
{!! Html::style('assets/css/dashboard/beranda.css') !!}
@endsection

@section('content')

<div class="container-fluid">
    <div class="isi-beranda">
        <div class="row beranda-gambar-slide">
        <h3 class="page-header"><i class="fa fa-desktop fa-lg fa-fw"></i> Gambar Slide</h3>
            @for ($i = 0; $i <=1 ; $i++)
            <div class="col-xs-6 col-md-3" style="text-align:center; ">
                <h4><strong>{{$show_slide[$i]->slide_ke}}</strong></h4>
                <img src="{{$show_slide[$i]->string_url}}" class="img-responsive" onError="this.onerror=null;this.src='../assets/img/no-image.png';">
                <h4>{{substr($show_slide[$i]->judul, 0, 10)}}</h4>
                <h5>{{substr($show_slide[$i]->isi, 0, 15)}}</h5>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl_slide" data-var="Slide {{$i+1}}" data-passing="{{$i+1}}"><i class="fa fa-edit fa-fw fa-lg"></i> Edit</button>
            </div>
            @endfor
             <h3 class="page-header col-xs-12" id="divider"></h3>
             @for ($i = 2; $i <=3 ; $i++)
            <div class="col-xs-6 col-md-3" style="text-align:center; ">
                <h4><strong>{{$show_slide[$i]->slide_ke}}</strong></h4>
                <img src="{{$show_slide[$i]->string_url}}" class="img-responsive" onError="this.onerror=null;this.src='../assets/img/no-image.png';">
                <h4>{{substr($show_slide[$i]->judul, 0, 10)}}</h4>
                <h5>{{substr($show_slide[$i]->isi, 0, 15)}}</h5>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl_slide" data-var="Slide {{$i+1}}" data-passing="{{$i+1}}"><i class="fa fa-edit fa-fw fa-lg"></i> Edit</button>
            </div>
            @endfor
        </div>



        <div class="row beranda-kontak">
        <h3 class="page-header"><i class="fa fa-info fa-lg fa-fw"></i> Kontak Kami</h3>
            <div class="col-lg-12" style="padding:20px;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table borderless" style="margin-top: 10px; margin-bottom:0px;">
                            <tr>
                                <th style="width:30%;"><h5><i class="fa fa-university fa-fw"></i> Alamat :</th>
                                <th><h5><?php echo $show_contact->address; ?></h5></th>
                            </tr>
                            <tr>
                                <th style="width:30%;"><h5><i class="fa fa-phone fa-fw"></i> Telp :</th>
                                <th><h5><?php echo $show_contact->phone; ?></h5></th>
                            </tr>
                            <tr>
                                <th style="width:30%;"><h5><i class="fa fa-envelope fa-fw"></i> E-Mail :</th>
                                <th><h5><?php echo $show_contact->email; ?></h5></th>
                            </tr>
                            <tr>
                                <th style="width:30%;"><h5><i class="fa fa-asterisk fa-fw"></i> Lainnya :</th>
                                <th><h5><?php echo $show_contact->other; ?></h5></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>      
            <div class="col-lg-12">
                <div class="well well-xs" style="text-align:center;">
                    <button id="btn_c" class="btn btn-primary btn-block" data-toggle="modal" data-target="#mdl_contactme"><i class="fa fa-edit fa-fw fa-lg"></i> Edit</button> 
                    <h6><span class="glyphicon glyphicon-console"></span> Terakhir diubah: <b><i class="fa fa-calendar fa-fw fa-lg"></i> <?php echo $show_contact->updated_at; ?> (GMT +0)&nbsp;</b> oleh <b><i class="fa fa-user fa-fw fa-lg"></i> <?php echo $show_contact->user; ?></b></h6>
                </div>
            </div>    
        </div>

    </div> <!-- Row isi=-beranda -->
</div> <!-- Container Fluid-->
@endsection

@section('sidebar')
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li id="active">
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
            <li>
                <a href="{{url()}}/account/dashboard/stat"><span class="fa-stack fa-lg pull-left"><i class="fa fa-line-chart fa-stack-1x "></i></span>Statistik</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/feedback"><span class="fa-stack fa-lg pull-left"><i class="fa fa-retweet fa-stack-1x "></i></span>Umpan Balik</a>
            </li>
            <hr style="border-color: #969696; border-width: 3px;">
            <li>
                <a href="{{url()}}/account/dashboard/setting"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cogs fa-stack-1x "></i></span>Pengaturan</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/history"><span class="fa-stack fa-lg pull-left"><i class="fa fa-history fa-stack-1x "></i></span>Riwayat</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/help"><span class="fa-stack fa-lg pull-left"><i class="fa fa-info fa-stack-1x "></i></span>Bantuan</a>
            </li>
            <hr style="border-color: #969696; border-width: 3px;">
            <li id="active">
                <a href="{{url()}}" target="_blank"><span class="fa-stack fa-lg pull-left"><i class="fa fa-home fa-stack-1x "></i></span>Lihat Situs</a>
            </li>
        </ul>
    </div>
@endsection


@section('mdl_custom')


<!--Modal Kontak Kami-->
<div class="modal fade" id="mdl_contactme" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-info fa-fw fa-lg"></i> Kontak Kami</h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-success"></div>
            </div>
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => '/account/dashboard/contactme', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_contactme']) !!}
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-university fa-fw"></i> Alamat :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_address', $show_contact->address, ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-phone fa-fw"></i> Telp :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_phone', $show_contact->phone, ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-envelope fa-fw"></i> E-Mail :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_email', $show_contact->email, ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-asterisk fa-fw"></i> Lainnya :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_other', $show_contact->other, ['class' => 'form-control'])!!}
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>  
            <div class="col-lg-12 col-xs-12" style="text-align:center;">
                <button id="btn_frm_contactme" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
            </div>

        </div>
      </div>
    <!-- Footer --> 
      <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal, Tutup Ini</button>
      </div>
    </div>
  </div>
</div>

<!--Modal Slide-->
<div class="modal fade" id="mdl_slide" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_slide_title"></h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-success"></div>
                <div class="alert alert-danger" ></div>
            </div>
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url'=>'account/dashboard/upload','method'=>'POST', 'files'=>true , 'class' => 'form-horizontal', 'id' => 'frm_upload']) !!}
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
                {!! Form::open(['url' => '/account/dashboard/slide', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_slide']) !!}
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-play-circle fa-fw"></i> Slide :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_slide', '', ['class' => 'form-control', 'readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-thumb-tack fa-fw"></i> Judul :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_judul', '', ['class' => 'form-control'])!!}
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-xs-4 control-label"><i class="fa fa-pencil fa-fw"></i> Isi :</label>
                    <div class="col-lg-10 col-md-10 col-xs-8">
                        {!! Form::text('txt_isi', '', ['class' => 'form-control'])!!}
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
                    <button id="btn_frm_slide" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
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

{!! Html::script('assets/js/bootstrap-filestyle.min.js')!!}
{!! Html::script('assets/js/dashboard/beranda.js') !!}


@endsection