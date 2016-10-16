<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    <link href="{{url()}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url()}}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url()}}/assets/css/animate/animations.css" rel="stylesheet">
    @yield('skrip-css')
  </head>

<body>
  <header class="masthead">
    <div id="ticker" style="text-align:center;">
      <marquee scrollamount="3" behavior="alternate" direction="right" width="225">
        <h5 style="color:#fff;"><i class="fa fa-info fa-fw fa-lg"></i> Ada pertanyaan lebih lanjut?</h5>
        <h5 style="color:#fff; text-align:center;">Silahkan Hubungi:</h5>
      </marquee>
    </div>
    <div id="ticker2" style="text-align:center;">
      <marquee behavior="scroll" direction="down" scrollamount="1" height="30" width="300">
        <h5 style="color:#fff; text-align:center;"><i class="fa fa-asterisk fa-fw fa-lg"></i> Lainnya: {{$show_contact->other}}</h5>
        <h5 style="color:#fff; text-align:center;"><i class="fa fa-envelope fa-fw fa-lg"></i> E-Mail: {{$show_contact->email}}</h5>
        <h5 style="color:#fff; text-align:center;"><i class="fa fa-phone fa-fw fa-lg"></i> Telp: {{$show_contact->phone}}</h5>
      </marquee>
    </div>
  </header>      

<div id="nav-affix" data-spy="affix" data-offset-top="105" class="affix-top">
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-ellipsis-h fa-lg"></i>
                </button>
                  <a href="{{url()}}" class="navbar-brand">
                    <img style="max-width:150px; margin-top:-10px;" src="{{url()}}/assets/img/logo.png">
                  </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  @yield('nav-menu')
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li id="cari-mobile">
                  <form method="GET" action="{{url()}}/search" accept-charset="UTF-8">
                    <div class="input-group col-sm-12" style="padding-left:10px; padding-right:10px;">
                      <input placeholder="Produk / Artikel / Promo..." class="form-control" name="q" type="text" id="input_cari">
                      <span class="input-group-btn">
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Cari</button>
                      </span>
                    </div>
                  </form>
                  </li>

                  <li id="cari-desktop">
                  <a style="color:#000;" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-search fa-fw"></i> Cari</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li style="width:500px">
                        <form method="GET" action="{{url()}}/search">
                          <div class="input-group col-sm-12" style="padding-left:10px; padding-right:10px;">
                            <input placeholder="Artikel / Produk / Promo..." class="form-control" name="q" type="text" id="input_cari">
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Cari</button>
                            </span>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="to-top" data-spy="affix" data-offset-top="105" class="affix-top">
  <a href="#" id="toUp"><img src="{{url()}}/assets/img/to-top.png"/></a>
</div>

  <div class="row">
    <div id="folder">
      @yield('folder')
    </div>
    <div id="isi-content">
      @yield('isi-content')
    </div>
  </div>

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
  </body>

  <script src="{{url()}}/assets/js/jquery.min.js"></script>
  <script src="{{url()}}/assets/js/bootstrap.min.js"></script>
  <script src="{{url()}}/assets/js/animate/css3-animate-it.js"></script>
  @yield('skrip-js')
</html>
