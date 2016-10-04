@extends('template.template_home')

@section('navbar')
  <div id="nav-affix" data-spy="affix" data-offset-top="105">
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-ellipsis-h fa-lg "></i>
                </button>
                  <a href="{{url()}}" class="navbar-brand">
                    <img style="max-width:150px; margin-top:-10px;" src="assets/img/logo.png">
                  </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#"><i class="fa fa-home fa-fw fa-lg"></i> Beranda</a></li>
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
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li id="cari-mobile">
                  <form method="POST" action="http://localhost/blog/account/dashboard/search" accept-charset="UTF-8">
                    <div class="input-group col-sm-12" style="padding-left:10px; padding-right:10px;">
                      <input placeholder="Produk / Artikel..." class="form-control" name="user" type="text" id="input_cari">
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
                        <form method="POST" action="http://localhost/blog/account/dashboard/search">
                          <div class="input-group col-sm-12" style="padding-left:10px; padding-right:10px;">
                            <input placeholder="Produk / Artikel..." class="form-control" name="user" type="text" id="input_cari">
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
@endsection

@section('carousel')
    <div class="col-md-8" id="banner-carousel">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          @for ($i = 0; $i < 1 ; $i++)
          <div id="slide-{{$i+1}}" class="item active">
            <img id="img-rasio" src="{{$show_slide[$i]->string_url}}">
            <div class="container">
              <div class="carousel-caption">
                <h1>{{$show_slide[$i]->judul}}</h1>
                <p>{{$show_slide[$i]->isi}}</p>
              </div>
            </div>
          </div>
          @endfor 
          @for ($i = 1; $i <=3 ; $i++)
          <div id="slide-{{$i+1}}" class="item">
            <img id="img-rasio" src="{{$show_slide[$i]->string_url}}">
            <div class="container">
              <div class="carousel-caption">
                <h1>{{$show_slide[$i]->judul}}</h1>
                <p>{{$show_slide[$i]->isi}}</p>
              </div>
            </div>
          </div>
          @endfor
        </div>
        

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
@endsection

@section('slide_product')
  <div class="row animatedParent animateOnce" style="text-align:center;">  
    <div class="strike2 animated shake slower">
        <span><h4><i class="fa fa-shopping-bag fa-fw"></i> Produk</h4></span>
    </div>
    @for($i = 0; $i <= 3; $i++)
      <div class="col-xs-6 col-sm-3 animated growIn slower">
        <img src="{{$show_slide_product[$i]->string_url}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>{{$show_slide_product[$i]->label}}</h4>
        <a href="{{url()}}/products" type="button" class="btn btn-default btn-sm" id="produk-btn" style="color:#000;">Selengkapnya >></a>
      </div>
    @endfor
  </div> 
@endsection