@extends('template.template_home_isi')

@section('title')
<title>CCTVQu | Produk - <?php echo $show_byid_produk->judul; ?></title>
@endsection

@section('skrip-css')
  {!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
  {!! Html::style('assets/css/home/produk.css') !!}
@endsection

@section('nav-menu')
  <li><a href="{{url()}}" id="link_navbar"><i class="fa fa-home fa-fw fa-lg"></i> Beranda</a></li>
  <li class="active"><a href="{{url()}}/products" id="link_navbar"><i class="fa fa-shopping-bag fa-fw fa-lg"></i> Produk</a></li>
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
      <li><a href="{{url()}}/products"><i class="fa fa-shopping-bag fa-fw fa-lg"></i> Produk</a></li>
      <li><a href="#"><i class="fa fa-cube fa-fw fa-lg"></i> {{$show_byid_produk->tag}}</a></li>
      <li class="active"><a href="{{url()}}/products/view?id={{$show_byid_produk->id}}"><i class="fa fa-pencil fa-fw fa-lg"></i> <?php echo $show_byid_produk->judul; ?></a></li>
    </ol>
  </div>
@endsection

@section('menu-akord')
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_1">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_1" aria-expanded="false" aria-controls="collapse_1">
          <i class="fa fa-cube fa-fw fa-lg"></i> {{$show_slide_product[0]->label}}
        </a>
      </h4>
    </div>
    <div id="collapse_1" class="panel-collapse collapse in active" role="tabpanel" aria-labelledby="heading_1">
      <div class="panel-body">
        <table id="table-produk-1" class="table dt-responsive" width="100%">
          <thead>
              <tr>
                  <th><i class="fa fa-calendar fa-fw "></i>Tanggal</th>
                  <th><i class="fa fa-pencil fa-fw "></i>Nama Item</th>
                  <th><i class="fa fa-tag fa-fw "></i>Label</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($show_limit_produk_1 as $all_product_1)
            <tr>
              <td>{{$all_product_1->created_at->format('Y-m-d')}}</td>
                <td><a href="{{url()}}/products/view?id={{$all_product_1->id}}" style="color:#000;">{{$all_product_1->judul}}</a></td>
                <td>{{$all_product_1->tag}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_2">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
          <i class="fa fa-cube fa-fw fa-lg"></i> {{$show_slide_product[1]->label}}
        </a>
      </h4>
    </div>
    <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2">
      <div class="panel-body">
        <table id="table-produk-2" class="table dt-responsive" width="100%">
          <thead>
              <tr>
                  <th><i class="fa fa-calendar fa-fw "></i>Tanggal</th>
                  <th><i class="fa fa-pencil fa-fw "></i>Nama Item</th>
                  <th><i class="fa fa-tag fa-fw "></i>Label</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($show_limit_produk_2 as $all_product_2)
            <tr>
              <td>{{$all_product_2->created_at->format('Y-m-d')}}</td>
                <td><a href="{{url()}}/products/view?id={{$all_product_2->id}}" style="color:#000;">{{$all_product_2->judul}}</a></td>
                <td>{{$all_product_2->tag}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_3">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
          <i class="fa fa-cube fa-fw fa-lg"></i> {{$show_slide_product[2]->label}}
        </a>
      </h4>
    </div>
    <div id="collapse_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_3">
        <div class="panel-body">
          <table id="table-produk-3" class="table dt-responsive" width="100%">
          <thead>
              <tr>
                  <th><i class="fa fa-calendar fa-fw "></i>Tanggal</th>
                  <th><i class="fa fa-pencil fa-fw "></i>Nama Item</th>
                  <th><i class="fa fa-tag fa-fw "></i>Label</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($show_limit_produk_3 as $all_product_3)
            <tr>
              <td>{{$all_product_3->created_at->format('Y-m-d')}}</td>
                <td><a href="{{url()}}/products/view?id={{$all_product_3->id}}" style="color:#000;">{{$all_product_3->judul}}</a></td>
                <td>{{$all_product_3->tag}}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_4">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
          <i class="fa fa-cube fa-fw fa-lg"></i> {{$show_slide_product[3]->label}}
        </a>
      </h4>
    </div>
    <div id="collapse_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_4">
      <div class="panel-body">
        <table id="table-produk-4" class="table dt-responsive" width="100%">
          <thead>
              <tr>
                  <th><i class="fa fa-calendar fa-fw "></i>Tanggal</th>
                  <th><i class="fa fa-pencil fa-fw "></i>Nama Item</th>
                  <th><i class="fa fa-tag fa-fw "></i>Label</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($show_limit_produk_4 as $all_product_4)
            <tr>
              <td>{{$all_product_4->created_at->format('Y-m-d')}}</td>
                <td><a href="{{url()}}/products/view?id={{$all_product_4->id}}" style="color:#000;">{{$all_product_4->judul}}</a></td>
                <td>{{$all_product_4->tag}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('isi-content')
      <div class="col-md-8 col-md-push-4">
        <div class="panel panel-default" style="border:0px;">
          <div class="panel-heading">
            <h3><a href="{{url()}}/products/view?id={{$show_byid_produk->id}}" style="color:#000;"><?php echo $show_byid_produk->judul; ?></a></h3>
              <p><b><i class="fa fa-user fa-fw fa-lg"></i> <?php echo $show_byid_produk->user; ?></b></p>
              <p><b><i class="fa fa-calendar fa-fw fa-lg"></i> <?php echo $show_byid_produk->created_at->format('Y-m-d'); ?></b></p>
          </div>
          <div class="panel-body" style="padding:15px; font-size: 16px;">
              <?php echo $show_byid_produk->isi; ?>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-md-pull-8" id="promo-affix" data-spy="affix" data-offset-top="162" data-offset-bottom="262">
        <div class="panel panel-default" style="border:0px;">
          <div class="panel-body" style="padding:5px; font-size: 16px;">
            @yield('menu-akord')
          </div>
          <div class="panel-footer" style="background-color: #fff;">
            <a href="{{url()}}/products" style="color:#000;"><b><strong>Lihat Produk Selengkapnya >></strong></b></a>
          </div>
        </div>
      </div>
@endsection

@section('skrip-js')
  {!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
  {!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
  {!! Html::script('assets/js/home/isi/index.js') !!}
@endsection