@extends('template/template_dashboard')

@section('title')
<title>Panel Kontrol - Umpan Balik</title>
{!! Html::style('assets/css/datatable/jquery.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/responsive.dataTables.min.css') !!}
{!! Html::style('assets/css/datatable/dataTables.bootstrap.min.css') !!}
{!! Html::style('assets/css/bootstrap-select/bootstrap-select.min.css') !!}
{!! Html::style('assets/css/dashboard/umpan.css') !!}
@endsection

@section('menu-akord-testimoni')
<div class="panel panel-default">
	<div class="panel-heading" role="tab" id="heading_1">
	  	<h4 class="panel-title">
	    	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_1" aria-expanded="false" aria-controls="collapse_1">
	      	<i class="fa fa-hand-lizard-o  fa-flip-horizontal fa-fw fa-lg"></i> Testimoni (Baru)
	    	</a>
	  	</h4>
	</div>
	<div id="collapse_1" class="panel-collapse collapse in active" role="tabpanel" aria-labelledby="heading_1">
	<div class="panel-body">
	    <table id="table-testi-pending" class="table dt-responsive" width="100%">
	      	<thead>
	          	<tr>
	              	<th><i class="fa fa-th-list fa-fw"></i> ID</th>
	              	<th><i class="fa fa-user fa-fw "></i> Pengguna</th>
	              	<th><i class="fa fa-calendar fa-fw "></i> Tanggal</th>
	              	<th><i class="fa fa-th fa-fw "></i> Aksi</th>	              	
	            </tr>
	        </thead>
	        <tbody>
	        @foreach ($show_testi_pending as $all_testi_pending)
		        <tr>
		          	<td>{{$all_testi_pending->id}}</td>
		            <td>{{$all_testi_pending->user}}</td>
		            <td>{{$all_testi_pending->created_at}}</td>
		            <td><a href="#mdl_testi_pending" data-toggle="modal" data-passing="{{$all_testi_pending->id}}" data-passing2="{{$all_testi_pending->user}}"><i class="fa fa-eye fa-lg fa-fw"></i></a> | <a href="#mdl_testi_hapus" data-toggle="modal" data-passing="{{$all_testi_pending->id}}" data-passing2="{{$all_testi_pending->user}}"><i class="fa fa-trash fa-lg fa-fw"></i></a></td>
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
		  	<i class="fa fa-hand-lizard-o fa-flip-horizontal fa-fw fa-lg"></i> Testimoni
			</a>
		</h4>
    </div>
    <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2">
      	<div class="panel-body">
        	<table id="table-testi" class="table dt-responsive" width="100%">
          		<thead>
              		<tr>
		              	<th><i class="fa fa-th-list fa-fw"></i> ID</th>
		              	<th><i class="fa fa-user fa-fw "></i> Pengguna</th>
		              	<th><i class="fa fa-spinner fa-spin fa-fw "></i> Status</th>
		              	<th><i class="fa fa-calendar fa-fw "></i> Tanggal</th>
		              	<th><i class="fa fa-th fa-fw "></i> Aksi</th>	  
                	</tr>
            	</thead>
            	<tbody>
			        @foreach ($show_testi as $all_testi)
			        <tr>
			          	<td>{{$all_testi->id}}</td>
			            <td>{{$all_testi->user}}</td>
			            <td>{{$all_testi->status}}</td>
			            <td>{{$all_testi->created_at}}</td>
			            <td><a href="#mdl_testi" data-toggle="modal" data-passing="{{$all_testi->id}}" data-passing2="{{$all_testi->user}}"><i class="fa fa-eye fa-lg fa-fw"></i></a> | <a href="#mdl_testi_hapus" data-toggle="modal" data-passing="{{$all_testi->id}}" data-passing2="{{$all_testi->user}}"><i class="fa fa-trash fa-lg fa-fw"></i></a></td>
			        </tr>
		    		@endforeach        
            	</tbody>
        	</table>
      	</div>
    </div>
</div>
@endsection

@section('menu-akord-poll')
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_1_poll">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_poll" href="#collapse_1_poll" aria-expanded="false" aria-controls="collapse_1_poll">
            <i class="fa fa-flag fa-fw fa-lg"></i> Parameter 1
            <div class="pull-right">
                Total Poll : {{$show_poll->count()}}
            </div>
            </a>
        </h4>
    </div>
    <div id="collapse_1_poll" class="panel-collapse collapse in active" role="tabpanel" aria-labelledby="heading_1_poll">
    <div class="panel-body">
        <table id="table-poll-grafik-1" class="table dt-responsive" width="100%">
            <thead>
                <tr>
                    <th><i class="fa fa-th-list fa-fw"></i> Hasil Penilaian</th>
                    <th><i class="fa fa-bar-chart fa-fw "></i> Jumlah</th>
                    <th><i class="fa fa-percent fa-fw"></i> Persentase</th>                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="25%">Bagus</td>
                    <td width="{{($show_param1_a / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param1_a / $show_poll->count()) * 100}}%; height:10px; background:green;"></div><label>Total: {{$show_param1_a}}</label></td>
                    <td width="25%">{{($show_param1_a / $show_poll->count()) * 100}}%</td>
                </tr>
                <tr width="100%">
                    <td width="25%">Cukup</td>
                    <td width="{{($show_param2_a / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param2_a / $show_poll->count()) * 100}}%; height:10px; background:#D3EA00;"></div><label>Total: {{$show_param2_a}}</label></td>
                    <td width="25%">{{($show_param2_a / $show_poll->count()) * 100}}%</td>
                </tr>
                <tr width="100%">
                    <td width="25%">Jelek</td>
                    <td width="{{($show_param3_a / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param3_a / $show_poll->count()) * 100}}%; height:10px; background:red;"></div><label>Total: {{$show_param3_a}}</label></td>
                    <td width="25%">{{($show_param3_a / $show_poll->count()) * 100}}%</td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_2_poll">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_poll" href="#collapse_2_poll" aria-expanded="false" aria-controls="collapse_2_poll">
            <i class="fa fa-flag fa-fw fa-lg"></i> Parameter 2
            <div class="pull-right">
                Total Poll : {{$show_poll->count()}}
            </div>
            </a>
        </h4>
    </div>
    <div id="collapse_2_poll" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2_poll">
    <div class="panel-body">
        <table id="table-poll-grafik-2" class="table dt-responsive" width="100%">
            <thead>
                <tr>
                    <th><i class="fa fa-th-list fa-fw"></i> Hasil Penilaian</th>
                    <th><i class="fa fa-bar-chart fa-fw "></i> Jumlah</th>
                    <th><i class="fa fa-percent fa-fw"></i> Persentase</th>                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="25%">Bagus</td>
                    <td width="{{($show_param1_b / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param1_b / $show_poll->count()) * 100}}%; height:10px; background:green;"></div><label>Total: {{$show_param1_b}}</label></td>
                    <td width="25%">{{($show_param1_b / $show_poll->count()) * 100}}%</td>
                </tr>
                <tr width="100%">
                    <td width="25%">Cukup</td>
                    <td width="{{($show_param2_b / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param2_b / $show_poll->count()) * 100}}%; height:10px; background:#D3EA00;"></div><label>Total: {{$show_param2_b}}</label></td>
                    <td width="25%">{{($show_param2_b / $show_poll->count()) * 100}}%</td>
                </tr>
                <tr width="100%">
                    <td width="25%">Jelek</td>
                    <td width="{{($show_param3_b / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param3_b / $show_poll->count()) * 100}}%; height:10px; background:red;"></div><label>Total: {{$show_param3_b}}</label></td>
                    <td width="25%">{{($show_param3_b / $show_poll->count()) * 100}}%</td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading_3_poll">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_poll" href="#collapse_3_poll" aria-expanded="false" aria-controls="collapse_3_poll">
            <i class="fa fa-flag fa-fw fa-lg"></i> Parameter 3
            <div class="pull-right">
                Total Poll : {{$show_poll->count()}}
            </div>
            </a>
        </h4>
    </div>
    <div id="collapse_3_poll" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_3_poll">
    <div class="panel-body">
        <table id="table-poll-grafik-3" class="table dt-responsive" width="100%">
            <thead>
                <tr>
                    <th><i class="fa fa-th-list fa-fw"></i> Hasil Penilaian</th>
                    <th><i class="fa fa-bar-chart fa-fw "></i> Jumlah</th>
                    <th><i class="fa fa-percent fa-fw"></i> Persentase</th>                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="25%">Bagus</td>
                    <td width="{{($show_param1_c / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param1_c / $show_poll->count()) * 100}}%; height:10px; background:green;"></div><label>Total: {{$show_param1_c}}</label></td>
                    <td width="25%">{{($show_param1_c / $show_poll->count()) * 100}}%</td>
                </tr>
                <tr width="100%">
                    <td width="25%">Cukup</td>
                    <td width="{{($show_param2_c / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param2_c / $show_poll->count()) * 100}}%; height:10px; background:#D3EA00;"></div><label>Total: {{$show_param2_c}}</label></td>
                    <td width="25%">{{($show_param2_c / $show_poll->count()) * 100}}%</td>
                </tr>
                <tr width="100%">
                    <td width="25%">Jelek</td>
                    <td width="{{($show_param3_c / $show_poll->count()) * 100}}%" style="text-align:left;"><div style="width:{{($show_param3_c / $show_poll->count()) * 100}}%; height:10px; background:red;"></div><label>Total: {{$show_param3_c}}</label></td>
                    <td width="25%">{{($show_param3_c / $show_poll->count()) * 100}}%</td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="isi-post">
        <div class="row">
        <h3 class="page-header"><i class="fa fa-rss fa-lg fa-fw"></i> Testimoni</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-testimoni"><i class="fa fa-rss fa-fw fa-lg"></i> Testimoni &nbsp;<span class="badge"><?php if($show_testi_pending->count() == 0) {echo '';}else {echo $show_testi_pending->count();}?></span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="div-testimoni" class="tab-pane fade in active" role="tabpanel">
	                            <div class="col-xs-12" style="margin-top: 20px;">
							        <div class="panel panel-default" style="border:0px;">
							          	<div class="panel-body" style="padding:5px; font-size: 16px;">
							          		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							            		@yield('menu-akord-testimoni')
							            	</div>
							          	</div>
							        </div>
	                            </div>
                            </div>
                            <div id="div-promo" class="tab-pane fade in" role="tabpanel">

                            </div>
                            <div id="div-article" class="tab-pane fade in" role="tabpanel">

                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <div class="row">
        <h3 class="page-header"><i class="fa fa-cubes fa-lg fa-fw"></i> Polling</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li><a href="#" data-toggle="tab" role="tab" data-target="#div-poll"><i class="fa fa-puzzle-piece fa-fw fa-lg"></i> Poll</a></li>
                            <li class="active"><a href="#" data-toggle="tab" role="tab" data-target="#div-poll-grafik"><i class="fa fa-area-chart fa-fw fa-lg"></i> Grafik</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="div-poll" class="tab-pane fade" role="tabpanel">
                                <table id="table-poll" class="table dt-responsive" width="100%">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-th-list fa-fw "></i> ID</th>
                                            <th><i class="fa fa-flag fa-fw "></i> Parameter 1</th>
                                            <th><i class="fa fa-flag fa-fw "></i> Parameter 2</th>
                                            <th><i class="fa fa-flag fa-fw "></i> Parameter 3</th>
                                            <th><i class="fa fa-calendar fa-fw "></i> Tanggal</th>
                                            <th><i class="fa fa-wifi fa-fw "></i> Alamat IP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($show_poll as $all_poll)
                                        <tr>
                                            <td>{{$all_poll->id}}</td>
                                            <td>{{$all_poll->param1}}</td>
                                            <td>{{$all_poll->param2}}</td>
                                            <td>{{$all_poll->param3}}</td>
                                            <td>{{$all_poll->created_at}}</td>
                                            <td>{{$all_poll->ip}}</td>
                                        </tr>
                                        @endforeach        
                                    </tbody>
                                </table>
                            </div>
                            <div id="div-poll-grafik" class="tab-pane fade in active" role="tabpanel">
                                <div class="col-xs-12" style="margin-top: 20px;">
                                    <div class="panel panel-default" style="border:0px;">
                                        <div class="panel-body" style="padding:5px; font-size: 16px;">
                                            <div class="panel-group" id="accordion_poll" role="tablist" aria-multiselectable="true">
                                                @yield('menu-akord-poll')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Parameter 1 : Mengenai Tampilan / Desain Situs</label><br>
                                <label>Parameter 2 : Mengenai Isi / Informasi Kelengkapan Situs</label><br>
                                <label>Parameter 3 : Mengenai Render / Kemudahan Akses Situs</label>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div> <!-- Row -->
</div>
@endsection

@section('sidebar')
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li>
                <a href="{{url()}}/account/dashboard"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Beranda</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/post"><span class="fa-stack fa-lg pull-left"><i class="fa fa-bullhorn fa-stack-1x "></i></span>Pos</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/product"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-shopping-cart fa-stack-1x "></i></span>Produk</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/photo"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-photo fa-stack-1x "></i></span>Foto</a>
            </li>
            <li>
                <a href="{{url()}}/account/dashboard/stat"><span class="fa-stack fa-lg pull-left"><i class="fa fa-line-chart fa-stack-1x "></i></span>Statistik</a>
            </li>
            <li id="active">
                <a href="{{url()}}/account/dashboard/feedback"><span class="fa-stack fa-lg pull-left"><i class="fa fa-retweet fa-stack-1x "></i></span>Umpan Balik</a>
            </li>
            <hr style="border-color: #969696; border-width: 3px;">
            <li id="active">
                <a href="{{url()}}" target="_blank"><span class="fa-stack fa-lg pull-left"><i class="fa fa-home fa-stack-1x "></i></span>Lihat Situs</a>
            </li>
        </ul>
    </div>
@endsection

@section('mdl_custom')
<!--Modal Testimoni Pending-->
<div class="modal fade" id="mdl_testi_pending" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_testi_pending_title"></h4>
      </div>
    <!-- Body --> 
  	<div class="modal-body">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-success"></div>
            <div class="alert alert-danger" ></div>
        </div>
        <div class="col-lg-12 col-xs-12">
            <div class="well well-md" style="text-align: center">
    			<div id="isi_testimoni_pending"></div>
        	</div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => '/account/dashboard/feedback/testimoni_edit', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_testi_pending']) !!}
                <div class="form-group">
		            <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-th-list fa-fw fa-lg"></i> ID :</label>
		            <div class="col-md-8 col-sm-8 col-xs-8">
		                {!! Form::text('txt_id_testi_pending', '', ['class' => 'form-control','readonly'])!!}
		            </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-user fa-fw fa-lg"></i> Pengguna :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        {!! Form::text('txt_user_testi_pending', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-wifi fa-fw fa-lg"></i> Alamat IP :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        {!! Form::text('txt_ip_testi_pending', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-calendar fa-fw fa-lg"></i> Tanggal :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        {!! Form::text('txt_tanggal_testi_pending', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-spinner fa-spin fa-fw fa-lg"></i> Status :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <select name="txt_status_testi_pending" class="selectpicker">
							<option value="Pending">Pending</option>
                            <option value="Tampilkan">Tampilkan</option>
                            <option value="Sembunyikan">Sembunyikan</option>
                        </select>
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>
                <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                <div class="well well-xs">
                    <button id="btn_frm_testi_pending" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
      <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal, Tutup Ini</button>
      </div>
    </div>
  </div>
</div>

<!--Modal Testimoni-->
<div class="modal fade" id="mdl_testi" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_testi_title"></h4>
      </div>
    <!-- Body --> 
  	<div class="modal-body">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-success"></div>
            <div class="alert alert-danger" ></div>
        </div>
        <div class="col-lg-12 col-xs-12">
            <div class="well well-md" style="text-align: center">
    			<div id="isi_testimoni"></div>
        	</div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                {!! Form::open(['url' => '/account/dashboard/feedback/testimoni_edit', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frm_testi']) !!}
                <div class="form-group">
		            <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-th-list fa-fw fa-lg"></i> ID :</label>
		            <div class="col-md-8 col-sm-8 col-xs-8">
		                {!! Form::text('txt_id_testi', '', ['class' => 'form-control','readonly'])!!}
		            </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-user fa-fw fa-lg"></i> Pengguna :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        {!! Form::text('txt_user_testi', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-wifi fa-fw fa-lg"></i> Alamat IP :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        {!! Form::text('txt_ip_testi', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-calendar fa-fw fa-lg"></i> Tanggal :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        {!! Form::text('txt_tanggal_testi', '', ['class' => 'form-control','readonly'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-sm-4 col-xs-4 control-label"><i class="fa fa-spinner fa-spin fa-fw fa-lg"></i> Status :</label>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <select name="txt_status_testi" class="selectpicker">
                            <option value="Tampilkan">Tampilkan</option>
                            <option value="Sembunyikan">Sembunyikan</option>
                        </select>
                    </div> 
                </div>
                {!! Form::close() !!}
            </div>
                <div class="col-lg-12 col-xs-12" style=" text-align:center;">
                <div class="well well-xs">
                    <button id="btn_frm_testi" class="btn btn-md btn-primary btn-block"><i class="fa fa-save fa-fw fa-lg"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
      <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal, Tutup Ini</button>
      </div>
    </div>
  </div>
</div>

<!--Modal Testimoni Hapus -->
<div class="modal fade" id="mdl_testi_hapus" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="mdl_testi_hapus_title"></h4>
      </div>
    <!-- Body --> 
      	<div class="modal-body">
      		<div class="row">
		      	<div class="col-lg-12 col-xs-12">
		            <div class="alert alert-success"></div>
		            <div class="alert alert-danger" ></div>
		        </div>
		        <div class="col-lg-12 col-xs-12">
		        	<strong><h4>Apakah Anda yakin ingin menghapus Testimoni ini ?</h4></strong>
		        </div>
		        <div class="col-lg-12 col-xs-12">
		            <div class="well well-md" style="text-align: center">
		    			<div id="isi_testimoni_hapus"></div>
		        	</div>
		        </div>
		        <input type="text" name="txt_id_testi_hapus" style="display:none">
      		</div>
      	</div>
    <!-- Footer -->
      <div class="modal-footer"> 
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tidak, Tutup Ini</button>
          <button type="button" id="btn_testi_hapus" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Ya, Hapus</button>
      </div>
    </div>
  </div>
</div>

@endsection


@section('script')

{!! Html::script('assets/js/bootstrap-filestyle.min.js')!!}
{!! Html::script('assets/js/dashboard/umpan.js') !!}
{!! Html::script('assets/js/datatable/jquery.dataTables.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.responsive.min.js') !!}
{!! Html::script('assets/js/datatable/dataTables.bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap-select/bootstrap-select.min.js') !!}

<script type="text/javascript">
$('#accordion').on("shown.bs.collapse", function (e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
        $.fn.DataTable.ext.pager.numbers_length = 2;
    });
$('#accordion_poll').on("shown.bs.collapse", function (e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
        $.fn.DataTable.ext.pager.numbers_length = 2;
    });
$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
        $.fn.DataTable.ext.pager.numbers_length = 3;
    });

    $("#table-testi-pending").dataTable({});
    $("#table-testi").dataTable({});
    $("#table-poll").dataTable({});
    $("#table-poll-grafik-1").dataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "filter": false
    });
    $("#table-poll-grafik-2").dataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "filter": false
    });
    $("#table-poll-grafik-3").dataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "filter": false
    });
</script>
@endsection