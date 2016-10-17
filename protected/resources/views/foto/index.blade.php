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
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://localhost/blog/assets/img/uploads/slide/47976.jpg" alt="">
          </a>
      </div>
  </div>
@endsection

@section('skrip-js')
  {!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
  {!! Html::script('assets/js/home/isi/index.js') !!}

  <script type="text/javascript">
    $("#table-produk-1").dataTable({});
    $("#table-produk-2").dataTable({});
    $("#table-produk-3").dataTable({});
    $("#table-produk-4").dataTable({});
  </script>
@endsection