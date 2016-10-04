@extends('template.template_login')
@section('isi')
	<div class="form-login">
		<div class="panel panel-default">
		<h2 class="panel panel-heading" align="center">
		<span class="glyphicon glyphicon-wrench"></span> Panel Kontrol</h2>
		<div class="panel-body">
			{!! Form::open(['url' => '/account/login']) !!}
			@if( Session::has('msg_err') )
			<div class="alert alert-danger" role="alert" id="msg" align="center">
			<span class="glyphicon glyphicon-exclamation-sign"></span>
			<strong>{{ Session::get('msg_err') }}</strong>
			</div>
			@endif
			@if( Session::has('msg_ok') )
			<div class="alert alert-success" role="alert" id="msg" align="center">
			<span class="glyphicon glyphicon-ok-sign"></span>
			<strong>{{ Session::get('msg_ok') }}</strong>
			</div>
			{!! Html::script('assets/js/login/load_dashboard.js')!!}
			@endif

			<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
			{!! Form::text('user', null, ['placeholder' => 'Nama Pengguna', 'class' => 'form-control'])!!}
			</div>
			<p></p>
			<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
			{!! Form::password('pass', ['placeholder' => 'Kata Sandi', 'class' => 'form-control']) !!}
			</div>
			<p></p>

			<button type="submit" class="btn btn-md btn-primary btn-block">
			<span class="glyphicon glyphicon-log-in"></span> Masuk</button>
			{!! Form::close() !!}
			<p></p>
		</div>
		</div>
	</div>
@endsection

