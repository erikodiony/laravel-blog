@extends('template.template_home_isi')

@section('title')
<title>CCTVQu | Artikel - <?php echo $show_byid_article->judul; ?></title>
@endsection

@section('skrip-css')
  {!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
  {!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
  {!! Html::style('assets/css/home/artikel-promo.css') !!}
@endsection

@section('nav-menu')
  <li><a href="{{url()}}" id="link_navbar"><i class="fa fa-home fa-fw fa-lg"></i> Beranda</a></li>
  <li><a href="{{url()}}/products" id="link_navbar"><i class="fa fa-shopping-bag fa-fw fa-lg"></i> Produk</a></li>
  <li class="dropdown active">
  <a class="dropdown-toggle" id="menu-dobel" data-toggle="dropdown" href="#"><i class="fa fa-folder fa-fw fa-lg"></i> Info</a>
    <ul class="dropdown-menu">
      <li><a href="{{url()}}/articles" style="background:#828282; color:#fff;"><i class="fa fa-newspaper-o fa-fw fa-lg"></i> Artikel</a></li>
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
      <li><a href="#"><i class="fa fa-folder-open fa-fw fa-lg"></i> Info</a></li>
      <li><a href="{{url()}}/articles"><i class="fa fa-newspaper-o fa-fw fa-lg"></i> Artikel</a></li>
      <li class="active"><a href="{{url()}}/articles/view?id={{$show_byid_article->id}}"><i class="fa fa-pencil fa-fw fa-lg"></i> <?php echo $show_byid_article->judul; ?></a></li>
    </ol>
  </div>
@endsection

@section('isi-content')
      <div class="col-md-8 col-md-push-4">
        <div class="panel panel-default" style="border:0px;">
          <div class="panel-heading">
            <h3><a href="{{url()}}/articles/view?id={{$show_byid_article->id}}" style="color:#000;"><?php echo $show_byid_article->judul; ?></a></h3>
              <p><b><i class="fa fa-user fa-fw fa-lg"></i> <?php echo $show_byid_article->user; ?></b></p>
              <p><b><i class="fa fa-calendar fa-fw fa-lg"></i> <?php echo $show_byid_article->created_at->format('Y-m-d'); ?></b></p>
          </div>
          <div class="panel-body" style="padding:15px; font-size: 16px;">
              <?php echo $show_byid_article->isi; ?> 
          </div>
        </div>
      </div>


      <div class="col-md-4 col-md-pull-8" id="promo-affix" data-spy="affix" data-offset-top="162" data-offset-bottom="262">
        <div class="panel panel-default" style="border:0px;">
          <div class="panel-body" style="padding:5px; font-size: 16px;">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-artikel"><i class="fa fa-newspaper-o fa-fw fa-lg"></i> Artikel</a></li>
               <li><a href="#" data-toggle="tab" role="tab" data-target="#div-promo"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Promo</a></li>
            </ul>
              <div class="tab-content">
                <div id="div-artikel" class="tab-pane fade in active" role="tabpanel">
                    <table id="table-artikel" class="table dt-responsive" width="100%">
                        <thead>
                            <tr>
                              <th><i class="fa fa-pencil fa-fw "></i>Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($show_limit_article as $limit_article)
                        <tr>
                          <td><a href="{{url()}}/articles/view?id={{$limit_article->id}}">{{$limit_article->judul}}</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2" width="100%"><p><b><a href="{{url()}}/articles" id="link-footer"> Lihat Artikel lainnya ...</a></b></p></td>
                          </tr>
                        </tfoot>
                    </table>
                </div>
                <div id="div-promo" class="tab-pane fade" role="tabpanel">
                    <table id="table-promo" class="table dt-responsive" width="100%">
                        <thead>
                            <tr>
                              <th><i class="fa fa-pencil fa-fw "></i>Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($show_limit_promo as $limit_promo)
                        <tr>
                          <td><a href="{{url()}}/promos/view?id={{$limit_promo->id}}">{{$limit_promo->judul}}</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2" width="100%"><p><b><a href="{{url()}}/promos" id="link-footer"> Lihat Promo lainnya ...</a></b></p></td>
                          </tr>
                        </tfoot>
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
  {!! Html::script('assets/js/home/isi/index.js') !!}

  <script type="text/javascript">
    $("#table-promo").dataTable({
      "paging":   false,
        "ordering": false,
        "info":     false,
        "filter": false,
         "bAutoWidth": false,
        "aoColumns": [
        { sWidth: '40%' },
        { sWidth: '60%' }]
    });
    $("#table-artikel").dataTable({
      "paging":   false,
        "ordering": false,
        "info":     false,
        "filter": false,
         "bAutoWidth": false,
        "aoColumns": [
        { sWidth: '40%' },
        { sWidth: '60%' }]
    });
  </script>
@endsection