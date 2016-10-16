<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CCTVQu | Melayani Pemasangan dan Instalasi berbagai macam produk CCTV</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate/animations.css" rel="stylesheet">
    <link href="assets/css/home/carousel.css" rel="stylesheet">
    <link href="assets/css/home/index.css" rel="stylesheet">
  </head>

    <header class="masthead">
    <div id="ticker" style="text-align:center;">
      <marquee scrollamount="3" behavior="alternate" direction="right" width="250">
        <h5 style="color:#fff;"><i class="fa fa-info fa-fw fa-lg"></i> Ada pertanyaan lebih lanjut?</h5>
        <h5 style="color:#fff; text-align:center;">Silahkan Hubungi:</h5>
      </marquee>
    </div>
    <div id="ticker2" style="text-align:center;">
      <marquee behavior="scroll" direction="down" scrollamount="1" height="30" width="300">
        <h5 style="color:#fff; text-align:center;"><i class="fa fa-asterisk fa-fw"></i> Lainnya: <?php echo $show_contact->other; ?></h5>
        <h5 style="color:#fff; text-align:center;"><i class="fa fa-envelope fa-fw fa-lg"></i> E-Mail: <?php echo $show_contact->email; ?></h5>
        <h5 style="color:#fff; text-align:center;"><i class="fa fa-phone fa-fw fa-lg"></i> Telp: <?php echo $show_contact->phone; ?></h5>
      </marquee>
    </div>
  </header>

@yield('navbar')

<body>
  <div class="row">
  @yield('carousel')
        <div class="col-md-4 panel panel-default" id="promo-artikel" style="border:0px;">
          <div class="panel-body" style="font-size: 16px;">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-promo" style="color:#000"><i class="fa fa-bullhorn fa-fw fa-lg"></i> Promo</a></li>
                <li><a href="#" data-toggle="tab" role="tab" data-target="#div-artikel" style="color:#000"><i class="fa fa-newspaper-o fa-fw fa-lg"></i> Artikel</a></li>
            </ul>
              <div class="tab-content">
                <div id="div-promo" class="tab-pane fade in active" role="tabpanel">
                    <table id="table-promo" class="table" width="100%">
                        <tbody>
                        <tr>
                          <td colspan="2">
                            <div id="div-promo-isi">
                              <table class="table" width="100%">
                              @foreach ($show_limit_promo as $limit_promo)
                              <tr style="border-top: 1px solid; border-bottom: 1px solid;">
                                <td width="100%" style="text-align:left"><a href="{{url()}}/promos/view?id={{$limit_promo->id}}" style="color:#000">{{$limit_promo->judul}}</a></td>
                              </tr>
                              @endforeach
                              </table>
                            </div>
                          </td>
                        </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2" width="100%"><p><b><a href="{{url()}}/promos" id="link-footer" style="color:#000"> Lihat Promo lainnya ...</a></b></p></td>
                          </tr>
                        </tfoot>
                    </table>
                </div>
                <div id="div-artikel" class="tab-pane fade" role="tabpanel">
                    <table id="table-artikel" class="table" width="100%">
                        <tbody>
                        <tr>
                          <td colspan="2">
                            <div id="div-artikel-isi">
                              <table class="table" width="100%">
                              @foreach ($show_limit_article as $limit_article)
                              <tr style="border-top: 1px solid; border-bottom: 1px solid;">
                                <td width="100%" style="text-align:left"><a href="{{url()}}/articles/view?id={{$limit_article->id}}" style="color:#000">{{$limit_article->judul}}</a></td>
                              </tr>
                              @endforeach
                              </table>
                            </div>
                          </td>
                        </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2" width="100%"><p><b><a href="{{url()}}/articles" id="link-footer" style="color:#000"> Lihat Artikel lainnya ...</a></b></p></td>
                          </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
          </div>
        </div>
  </div>

<div class="produk">
@yield('slide_product')
</div>
@yield('menu_horizontal')
@yield('banner_masukan')

</body>

  <footer class="animatedParent animateOnce" style="background-color:#313131;">
  <div class="row" style="padding-top:20px;">
      <div class="col-md-8 col-xs-12">
        <div class="strike2 animated growIn slower">
          <span>
          <h4><i class="fa fa-info fa-fw"></i> Kontak Kami</h4>
          </span>  
        </div>  
          <table class="table borderless animated wobble slower">
          <tr>
              <th style="width:30%;"><h5><i class="fa fa-university fa-fw"></i> Alamat :<h5></th>
              <th><h5><?php echo $show_contact->address; ?></h5></th>
          </tr>
          <tr>
              <th style="width:30%;"><h5><i class="fa fa-phone fa-fw"></i> Telp :<h4></th>
              <th><h5><?php echo $show_contact->phone; ?></h5></th>
          </tr>
          <tr>
              <th style="width:30%;"><h5><i class="fa fa-envelope fa-fw"></i> E-Mail :<h4></th>
              <th><h5><?php echo $show_contact->email; ?></h5></th>
          </tr>
          <tr>
              <th style="width:30%;"><h5><i class="fa fa-asterisk fa-fw"></i> Lainnya :<h4></th>
              <th><h5><?php echo $show_contact->other; ?></h5></th>
          </tr>
          </table>
      </div>
      <div class="col-md-4 col-xs-12" style="color:#fff;">
        <div class="strike2 animated growIn slower">
          <span>
          <h4><i class="fa fa-sitemap fa-fw"></i> Peta Situs</h4>
          </span>
        </div>  
        <table class="table borderless animated wobble slower" style="margin-left:12%; margin-right:12%;">
          <tr>
            <th style="width:50%">
              <h5><a href="{{url()}}"><i class="fa fa-home fa-fw"></i> Beranda</a></h5>
            </th>
            <th style="width:50%">
              <h5><a href="{{url()}}/products"><i class="fa fa-shopping-bag fa-fw"></i> Produk</a></h5>
            </th>
          </tr>
          <tr>
            <th style="width:50%">
              <h5><a href="{{url()}}/articles"><i class="fa fa-newspaper-o fa-fw"></i> Artikel</a></h5>
            </th>
            <th style="width:50%">
              <h5><a href="{{url()}}/promos"><i class="fa fa-bullhorn fa-fw"></i> Promo</a></h5>
            </th>
          </tr>
          <tr>
            <th style="width:50%">
              <h5><a href="{{url()}}/photos"><i class="fa fa-photo fa-fw"></i> Foto</a></h5>
            </th>
            <th style="width:50%">
              <h5><a href="{{url()}}/portofolio"><i class="fa fa-rocket fa-fw"></i> Portofolio</a></h5>
            </th>     
          </tr>
          <tr>
            <th style="width:50%">
              <h5><a href="{{url()}}/about"><i class="fa fa-smile-o fa-fw"></i> Tentang Kami</a></h5>
            </th>
            <th style="width:50%">
              <h5><a href="{{url()}}/account" target="_blank"><i class="fa fa-user fa-fw"></i> Admin</a></h5>
            </th>
          </tr>
        </table>
      </div>
      </div>
  </footer>
  <div class="footer-scroll" style="background-color:#fff;">
    <div class="row" style="text-align:center">
       <strong><a href="#" id="toUp" style="color:#000;">^ Kembali ke Atas</a></strong>
    </div>
  </div>
  <div class="footer-akhir" style="background-color:#000; ">
    <div class="row" style="margin-right:1%; margin-left:1%; text-align:center;">
      <div class="col-sm-8 col-sm-offset-2">
      <h6>
      <a href="http://fb.me/erikodiony" target="_blank">TEAM-IT</a>
      <strong style="color:#fff;"> | </strong> 
      <a href="{{url()}}" target="_blank">CCTVQu - 2016</a>
      </h6>
      </div>
    </div>
  </div>

@yield('popup')

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/animate/css3-animate-it.js"></script>
  <script src="assets/js/home/index.js"></script>
</html>
