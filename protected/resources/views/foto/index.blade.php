@extends('template.template_home_isi')

@section('title')
<title>CCTVQu | Foto</title>
@endsection

@section('skrip-css')
  {!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
  {!! Html::style('assets/css/home/produk.css') !!}
@endsection

@section('nav-menu')
  <li><a href="{{url()}}" id="link_navbar"><i class="fa fa-home fa-fw fa-lg"></i> Beranda</a></li>
  <li><a href="{{url()}}/products" id="link_navbar"><i class="fa fa-shopping-bag fa-fw fa-lg"></i> Produk</a></li>
  <li class="dropdown">
  <a class="dropdown-toggle" id="menu-dobel" data-toggle="dropdown" href="#" style="color:#000;"><i class="fa fa-folder fa-fw fa-lg"></i> Info</a>
    <ul class="dropdown-menu">
      <li><a href="{{url()}}/articles"><i class="fa fa-newspaper-o fa-fw fa-lg"></i> Artikel</a></li>
      <li><a href="{{url()}}/promos"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Promo</a></li>
    </ul>
  </li>
  <li class="active"><a href="{{url()}}/photos" id="link_navbar"><i class="fa fa-photo fa-fw fa-lg"></i> Foto</a></li>
  <li><a href="{{url()}}/portofolio" id="link_navbar"><i class="fa fa-rocket fa-fw fa-lg"></i> Portofolio</a></li>
  <li><a href="{{url()}}/about" id="link_navbar"><i class="fa fa-smile-o fa-fw fa-lg"></i> Tentang Kami</a></li>
@endsection

@section('folder')
  <div class="a">
     <ol class="breadcrumb" style="background-color:#bfbfbf;">
      <li><a href="{{url()}}"><i class="fa fa-home fa-fw fa-lg"></i></a></li>
      <li class="active"><a href="{{url()}}/products"><i class="fa fa-photo fa-fw fa-lg"></i> Foto</a></li>
    </ol>
  </div>
@endsection

@section('isi-content')
  <div class="row" style="padding: 5px;">
  @foreach($show_img as $all_img)
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#mdl_photo" data-toggle="modal" data-target="#mdl_photo" data-pass="{{$all_img->id}}">
              <img class="img-responsive" src="{{url()}}/{{$all_img->img}}" alt="{{$all_img->judul}}">
          </a>          
      </div>
      @endforeach
  </div>
@endsection

@section('popup')
  <!--Modal Testimoni-->
<div class="modal fade" id="mdl_photo" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
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
<!-- END Modal Testimoni-->
@endsection

@section('skrip-js')
  @yield('popup')
  {!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
  {!! Html::script('assets/js/home/isi/index.js') !!}
@endsection