
@section('btn_exit')
<a href="" id="navbar_kanan" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-out"></span> Keluar</a>
@endsection

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('title')
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/simple-sidebar.css') !!}
    {!! Html::style('assets/css/background.css') !!}
    {!! Html::style('assets/css/dashboard/sidebar-cust.css') !!} 
    {!! Html::style('assets/css/dashboard/index.css') !!}
</head>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header" style="background-color: #D2D2D2">
            <div class="menu-1">
                <a class="navbar-brand navbar-collapse" style="color: #000;" data-toggle="collapse" id="menu-toggle">
                    <i style="color: black; margin-left: 3px;" class="fa fa-bars fa-stack-4x"></i>
                </a>
                <a class="navbar-brand" style="margin-left: -10px; color: #000;" href="{{url()}}/account/dashboard"><span class="glyphicon glyphicon-wrench"></span> Panel Kontrol</a>
            </div>
            <div class="menu-2">
                <a class="navbar-brand navbar-collapse" data-toggle="collapse" style="color: #000;" id="menu-toggle-2">
                    <i style="color: black; margin-left: 3px;" class="fa fa-bars fa-stack-4x"></i>
                </a>
                <a class="navbar-brand" href="{{url()}}/account/dashboard" style="color: #000;"><span class="glyphicon glyphicon-wrench"></span> Panel Kontrol</a>
            </div>
            <button style="margin-top: 5px; margin-bottom: 0px; background-color: #D2D2D2; color: #000; border: 0px;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <i class="fa fa-ellipsis-h fa-stack-2x "></i>
            </button>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-right: 5px;">
                <li><a id="navbar_kanan" style="cursor:default; margin-right:-10px;"><i class="fa fa-user fa-stack-3x"></i> Masuk sebagai <?php echo Auth::User()->usr; ?></a></li>
                <li>@yield('btn_exit')</li>
            </ul>
        </div>
    </nav>


<div id="wrapper" class="gradient pixy-dust">
        <!-- Sidebar -->
        @yield('sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
    <div id="page-content-wrapper" class="gradient pixy-dust">
        <body>
        @yield('content')
        </body>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/dashboard/sidebar.js') !!}
    {!! Html::script('assets/js/tinymce/tinymce.min.js') !!}
    {!! Html::script('assets/js/tinymce/tinymce-custom.js') !!}


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-log-out"></span> Keluar</h4>
      </div>
    <!-- Body --> 
      <div class="modal-body">
        <strong>Apakah Anda yakin ingin keluar ?</strong>
        <br><i>(Pastikan terlebih dahulu semua Data telah tersimpan!)</i>
      </div>
    <!-- Footer --> 
      <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tidak, Tutup Ini</button>
        <button type="button" class="btn btn-primary" onClick="location.href='{{url()}}/account/logout'"><span class="glyphicon glyphicon-ok"></span> Ya, Keluar</button>
      </div>
    </div>
  </div>
</div>

@yield('mdl_custom')
@yield('script')

</html>