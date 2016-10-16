@extends('template.template_home_isi')

@section('title')
<title>CCTVQu | Promo</title>
@endsection

@section('skrip-css')
  {!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
  <link href="assets/css/home/artikel-promo.css" rel="stylesheet">
@endsection

@section('nav-menu')
  <li><a href="{{url()}}" id="link_navbar"><i class="fa fa-home fa-fw fa-lg"></i> Beranda</a></li>
  <li><a href="{{url()}}/products" id="link_navbar"><i class="fa fa-shopping-bag fa-fw fa-lg"></i> Produk</a></li>
  <li class="dropdown active">
  <a class="dropdown-toggle" id="menu-dobel" data-toggle="dropdown" href="#"><i class="fa fa-folder fa-fw fa-lg"></i> Info</a>
    <ul class="dropdown-menu">
      <li><a href="{{url()}}/articles"><i class="fa fa-newspaper-o fa-fw fa-lg"></i> Artikel</a></li>
      <li><a href="{{url()}}/promos" style="background:#828282; color:#fff;"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Promo</a></li>
    </ul>
  </li>
  <li><a href="{{url()}}/photos" id="link_navbar"><i class="fa fa-photo fa-fw"></i> Foto</a></li>
  <li><a href="{{url()}}/portofolio" id="link_navbar"><i class="fa fa-rocket fa-fw fa-lg"></i> Portofolio</a></li>
  <li><a href="{{url()}}/about" id="link_navbar"><i class="fa fa-smile-o fa-fw fa-lg"></i> Tentang Kami</a></li>
@endsection

@section('folder')
  <div class="a">
     <ol class="breadcrumb" style="background-color:#bfbfbf;">
      <li><a href="{{url()}}"><i class="fa fa-home fa-fw fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-folder-open fa-fw fa-lg"></i> Info</a></li>
      <li class="active"><a href="{{url()}}/articles"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Promo</a></li>
    </ol>
  </div>
@endsection

@section('isi-content')
  <div class="col-md-12" id="promo-affix">
    <div class="panel panel-default" style="border:0px;">
      <div class="panel-body" style="padding:5px; font-size: 16px;">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-artikel"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Promo</a></li>
        </ul>
          <div class="tab-content">
            <div id="div-promo" class="tab-pane fade in active" role="tabpanel" style="padding-top:20px; padding-bottom:20px;">
              <table id="table-promo" class="table dt-responsive" width="100%">
                  <thead>
                      <tr>
                        <th><i class="fa fa-pencil fa-fw "></i>Judul</th>
                        <th><i class="fa fa-tag fa-fw "></i>Label</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($show_all_promo as $all_promo)
                    <tr>
                      <td><a href="{{url()}}/promos/view?id={{$all_promo->id}}">{{$all_promo->judul}}</a></td>
                      <td>{{$all_promo->tag}}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('skrip-js')
  {!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
  <script src="assets/js/home/isi/index.js"></script>

  <script type="text/javascript">
    $("#table-promo").dataTable({});
  </script>
@endsection

