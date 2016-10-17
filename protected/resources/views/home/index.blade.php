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
                  <form method="GET" action="{{url()}}/search" accept-charset="UTF-8">
                    <div class="input-group col-sm-12" style="padding-left:10px; padding-right:10px;">
                      <input placeholder="Artikel / Produk / Promo..." class="form-control" name="q" type="text" id="input_cari">
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
                            <input placeholder="Produk / Artikel / Promo..." class="form-control" name="q" type="text" id="input_cari">
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

@section('popup')
  <!--Modal Testimoni-->
<div class="modal fade" id="mdl_testimoni" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-pencil fa-fw fa-lg"></i> Testimoni</h4>
        <h5>Demi Kemajuan Usaha, kami membutuhkan Testimoni dari Anda, Terima Kasih !</h5>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-success"></div>
                <div class="alert alert-danger" ></div>
            </div>
            
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => 'send_testimoni', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_testimoni']) !!}
                <div class="form-group">
                    <label class="col-lg-3 col-md-4 col-sm-3 col-xs-4 control-label"><i class="fa fa-user fa-fw"></i> Nama :</label>
                    <div class="col-lg-9 col-md-8 col-sm-9 col-xs-8">
                        {!! Form::text('txt_user', '', ['class' => 'form-control'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 col-md-4 col-sm-3 col-xs-4 control-label"><i class="fa fa-pencil fa-fw"></i> Isi :</label>
                    <div class="col-lg-9 col-md-8 col-sm-9 col-xs-8">
                        {!! Form::textarea('txt_isi', '', ['class' => 'form-control'])!!}
                        <label><h5><i class="fa fa-exchange fa-fw fa-lg"></i> Maksimal 300 Karakter</h5></label>
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>  
            <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                <div class="well well-xs">
                    <button id="btn_frm_testimoni" class="btn btn-md btn-primary btn-block"><i class="fa fa-envelope fa-fw fa-lg"></i> Kirim</button>
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

<!--Modal Polling-->
<div class="modal fade" id="mdl_poll" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-cubes fa-fw fa-lg"></i> Kuesioner</h4>
        <h5>Demi Kemajuan Situs Web ini, kami membutuhkan Feedback / Tanggapan dari Anda, Terima Kasih !</h5>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <div class="row" style="margin:0px; margin-top:10px;">
            <div class="col-lg-12 col-xs-12">
                <div class="alert alert-success"></div>
                <div class="alert alert-danger" ></div>
            </div>
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => 'send_poll', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_poll']) !!}
                <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-5 col-xs-6"><i class="fa fa-tv fa-fw"></i> Tampilan / Desain :</label>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
                          <label>{!! Form::radio('txt_param1', 'Bagus') !!} Bagus</label>&nbsp; &nbsp;
                          <label>{!! Form::radio('txt_param1', 'Cukup', true) !!} Cukup</label>&nbsp; &nbsp;
                          <label>{!! Form::radio('txt_param1', 'Jelek') !!} Jelek</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-5 col-xs-6"><i class="fa fa-quote-right fa-fw"></i> Kelengkapan Isi :</label>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
                          <label>{!! Form::radio('txt_param2', 'Bagus') !!} Bagus</label>&nbsp; &nbsp;
                          <label>{!! Form::radio('txt_param2', 'Cukup', true) !!} Cukup</label>&nbsp; &nbsp;
                          <label>{!! Form::radio('txt_param2', 'Jelek') !!} Jelek</label>
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-lg-4 col-md-4 col-sm-5 col-xs-6"><i class="fa fa-plug fa-fw"></i> Kemudahan Akses :</label>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
                          <label>{!! Form::radio('txt_param3', 'Bagus', true) !!} Bagus</label>&nbsp; &nbsp;
                          <label>{!! Form::radio('txt_param3', 'Cukup', true) !!} Cukup</label>&nbsp; &nbsp;
                          <label>{!! Form::radio('txt_param3', 'Jelek') !!} Jelek</label>
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>  
            <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                <div class="well well-xs">
                    <button id="btn_frm_poll" class="btn btn-md btn-primary btn-block"><i class="fa fa-envelope fa-fw fa-lg"></i> Kirim</button>
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
@endsection

@section('menu_horizontal')
<div class="row animatedParent animateOnce" style="margin-bottom: 100px;">
  <!--Tentang Kami-->
  <div class="col-md-4 animated shake slower delay-250" >
    <div class="strike" style="text-align:center;">
      <span><h4><i class="fa fa-smile-o fa-fw"></i> Tentang Kami</h4></span>
    </div>
        
        <table id="table-about" class="table dt-responsive" width="100%">
      <tbody>
        <tr>
          <td style="text-align: center; display: block"><img style="max-width:180px; margin-top:-10px;" src="assets/img/logo.png"></td>
        </tr>
        <tr>
          <td style="text-align: justify;"><?php echo substr($menu_about->isi, 0, 200) . ' (...)'?></td>
        </tr>
        <tr>
          <td><a href="{{url()}}/about" style="color:#000;"><b><strong>Lihat Selengkapnya >></strong></b></a></td>
        </tr>
      </tbody>
    </table>

    
  </div>
  <!--End Tentang Kami-->

  <!--Foto-->
  <div class="col-md-4 animated shake slower delay-250" style="text-align: center; background: url(assets/img/bg.jpg);">
    <div class="strike">
      <span><h4><i class="fa fa-photo fa-fw"></i> Foto</h4></span>
    </div>

      <div id="carousel_foto" class="carousel slide" data-ride="carousel" style="height: 100%">
        <div class="carousel-inner" style="height: 100%">
          <?php $i = 1;?>
          @foreach ($show_testi as $all_testi)
          <div id="item_img_{{$i++}}" class="item thumbnail-horizontal">
            <div class="active item thumbnail">
              <img src="http://localhost/blog/assets/img/uploads/slide/47976.jpg">
            </div>
          </div>
          @endforeach                                
        </div>
    <div style="margin: 10px;">
       <a href="{{url()}}/photos" style="color:#000;"><b><strong>Lihat Selengkapnya >></strong></b></a>
    </div>

      </div>
  </div>

  <!--Testimoni-->
  <div class="col-md-4 animated shake slower delay-250" style="text-align: center;">
    <div class="strike">
      <span><h4><i class="fa fa-retweet fa-fw"></i> Testimoni</h4></span>
    </div>

    <div id="carousel_text" class="carousel slide" data-ride="carousel">
      <div class="col-xs-12">
        <div class="carousel-inner" style="text-align: center; background: url(assets/img/bg.jpg);">
          <?php $i = 1;?>
          @foreach ($show_testi as $all_testi)
          <div id="item_text_{{$i++}}" class="item item-testi">
            <div class="carousel-content">
              <table id="table-testimoni" class="table dt-responsive" width="100%">
                <tbody>
                  <tr>
                    <td>
                      <h4>" {{$all_testi->isi}} "</h4>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h4><i class="fa fa-user fa-fw fa-lg"></i> Oleh : {{$all_testi->user}}</h4>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          @endforeach                                
        </div>
      </div>
    </div>

    <div class="col-xs-12" style="margin-bottom: 10px;">
    <a href="#" type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#mdl_testimoni" style="color:#000;"><i class="fa fa-pencil fa-fw fa-lg"></i> Tulis Testimoni Anda</a>
    </div>


  </div> <!--End Testimoni-->
</div>
@endsection

@section('banner_masukan')
<div id="masukan-affix" data-spy="affix" data-offset-bottom="0">
  <div class="masukan" id="banner-masukan" style="background-color:#BBBBBB; ">
    <div class="row" style="margin-right:1%; margin-left:1%; padding:10px; text-align:center;">
      <div class="col-sm-8 col-sm-offset-2">
        <h4>Berikan tanggapan mengenai situs kami ! <i class="fa fa-smile-o fa-fw"></i></h4> <a href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#mdl_poll"><i class="fa fa-check fa-fw fa-lg"></i> Ya, OK !</a>  <a class="btn btn-danger" id="toClose"><i class="fa fa-times fa-fw fa-lg"></i> Tidak, Tutup Ini !</a>
      </div>
    </div>
  </div>
</div>
@endsection