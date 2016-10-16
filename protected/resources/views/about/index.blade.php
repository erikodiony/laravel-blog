@extends('template.template_home_isi')

@section('title')
<title>CCTVQu | Tentang Kami</title>
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
  <li class="active"><a href="{{url()}}/about" id="link_navbar"><i class="fa fa-smile-o fa-fw fa-lg"></i> Tentang Kami</a></li>
@endsection

@section('folder')
  <div class="a">
     <ol class="breadcrumb" style="background-color:#bfbfbf;">
      <li><a href="{{url()}}"><i class="fa fa-home fa-fw fa-lg"></i></a></li>
      <li class="active"><a href="{{url()}}/about"><i class="fa fa-smile-o fa-fw fa-lg"></i> Tentang Kami</a></li>
    </ol>
  </div>
@endsection

@section('menu-akord')
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_about">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_1" aria-expanded="false" aria-controls="collapse_1">
          <i class="fa fa-rocket fa-fw fa-lg"></i> {{$menu_portofolio->jenis}}
        </a>
      </h4>
    </div>
    <div id="collapse_1" class="panel-collapse collapse in active" role="tabpanel" aria-labelledby="heading_1">
      <div class="panel-body">
        <table id="table-portofolio" class="table dt-responsive" width="100%">
            <tbody>
            <tr>
                <td><?php echo substr($menu_portofolio->isi, 0, 150) . ' (...)'?></td>
            </tr>
            <tr>
            	<td><a href="{{url()}}/portofolio" style="color:#000;"><b><strong>Lihat Selengkapnya >></strong></b></a></td>
            </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_2">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
          <i class="fa fa-smile-o fa-fw fa-lg"></i> {{$menu_about->jenis}}
        </a>
      </h4>
    </div>
    <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2">
      <div class="panel-body">
        <table id="table-about" class="table dt-responsive" width="100%">
            <tbody>
            <tr>
                <td><?php echo substr($menu_about->isi, 0, 150) . ' (...)'?></td>
            </tr>
            <tr>
            	<td><a href="{{url()}}/about" style="color:#000;"><b><strong>Lihat Selengkapnya >></strong></b></a></td>
            </tr>
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
            <h3><a href="{{url()}}/portofolio" style="color:#000;"><?php echo $menu_about->jenis; ?></a></h3>
              <p><b><i class="fa fa-user fa-fw fa-lg"></i> <?php echo $menu_about->user; ?></b></p>
              <p><b><i class="fa fa-calendar fa-fw fa-lg"></i> <?php echo $menu_about->created_at->format('Y-m-d'); ?></b></p>
          </div>
          <div class="panel-body" style="padding:15px; font-size: 16px;">
              <?php echo $menu_about->isi; ?>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-md-pull-8" id="promo-affix" data-spy="affix" data-offset-top="162" data-offset-bottom="262">
        <div class="panel panel-default" style="border:0px;">
          <div class="panel-body" style="padding:5px; font-size: 16px;">
            @yield('menu-akord')
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