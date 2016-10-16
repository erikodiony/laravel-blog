@extends('template.template_home_isi')

@section('title')
<title>CCTVQu | Cari</title>
@endsection

@section('skrip-css')
  {!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
  {!! Html::style('assets/css/home/menu.css') !!}
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
  <li><a href="{{url()}}/photos" id="link_navbar"><i class="fa fa-photo fa-fw fa-lg"></i> Foto</a></li>
  <li><a href="{{url()}}/portofolio" id="link_navbar"><i class="fa fa-rocket fa-fw fa-lg"></i> Portofolio</a></li>
  <li><a href="{{url()}}/about" id="link_navbar"><i class="fa fa-smile-o fa-fw fa-lg"></i> Tentang Kami</a></li>
@endsection

@section('folder')
  <div class="a">
     <ol class="breadcrumb" style="background-color:#bfbfbf;">
      <li><a href="{{url()}}"><i class="fa fa-home fa-fw fa-lg"></i></a></li>
      <li class="active"><a href="#"><i class="glyphicon glyphicon-search"></i> Cari</a></li>
    </ol>
  </div>
@endsection

@section('menu-tabs')
<div class="col-xs-12">
  <h3 style="color:#000;">Hasil Pencarian dengan Kata Kunci : " {{$query}} "</h3>
</div>
  <ul class="nav nav-tabs">
      <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-article"><i class="fa fa-newspaper-o fa-fw fa-lg"></i> Artikel</a></li>
      <li><a href="#" data-toggle="tab" role="tab" data-target="#div-product"><i class="fa fa-shopping-bag fa-fw fa-lg"></i> Produk</a></li>
      <li><a href="#" data-toggle="tab" role="tab" data-target="#div-promo"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Promo</a></li>
  </ul>
    <div class="tab-content">
      <div id="div-article" class="tab-pane fade in active" role="tabpanel" style="padding-top:20px; padding-bottom:20px;">
        <table id="table-article" class="table dt-responsive" width="100%">
          <thead>
              <tr>
                <th><i class="fa fa-pencil fa-fw "></i>Judul</th>
                <th><i class="fa fa-tag fa-fw "></i>Label</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($all_result_article as $result_article)
            <tr>
              <td><a href="{{url()}}/articles/view?id={{$result_article->id}}" style="color:#000;">{{$result_article->judul}}</a></td>
              <td>{{$result_article->tag}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div id="div-product" class="tab-pane fade" role="tabpanel" style="padding-top:20px; padding-bottom:20px;">
        <table id="table-product" class="table dt-responsive" width="100%">
          <thead>
              <tr>
                <th><i class="fa fa-pencil fa-fw "></i>Judul</th>
                <th><i class="fa fa-tag fa-fw "></i>Label</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($all_result_product as $result_product)
            <tr>
              <td><a href="{{url()}}/products/view?id={{$result_product->id}}" style="color:#000;">{{$result_product->judul}}</a></td>
              <td>{{$result_product->tag}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div id="div-promo" class="tab-pane fade" role="tabpanel" style="padding-top:20px; padding-bottom:20px;">
        <table id="table-promo" class="table dt-responsive" width="100%">
          <thead>
              <tr>
                <th><i class="fa fa-pencil fa-fw "></i>Judul</th>
                <th><i class="fa fa-tag fa-fw "></i>Label</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($all_result_promo as $result_promo)
            <tr>
              <td><a href="{{url()}}/promos/view?id={{$result_promo->id}}" style="color:#000;">{{$result_promo->judul}}</a></td>
              <td>{{$result_promo->tag}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
@endsection


@section('isi-content')
      <div class="col-md-12" id="promo-affix">
        <div class="panel panel-default" style="border:0px;">
          <div class="panel-body" style="padding:5px; font-size: 16px;">
            @yield('menu-tabs')
          </div>
        </div>
      </div>
@endsection

@section('skrip-js')
  {!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
  {!! Html::script('assets/js/home/isi/index.js') !!}

  <script type="text/javascript">
    $("#table-article").dataTable({"filter": false,});
    $("#table-product").dataTable({"filter": false,});
    $("#table-promo").dataTable({"filter": false,});
  </script>
@endsection