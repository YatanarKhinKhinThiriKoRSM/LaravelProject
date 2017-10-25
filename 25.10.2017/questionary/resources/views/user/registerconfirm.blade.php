@extends("template")
@section("main")
<h1>入力フォーム</h1>
<?php
	$username=$_POST['username'];
	$email=$_POST['email'];
	$memo=$_POST['memo'];
?>
<div class="container">
	{!! Form::open(['url' => 'user/registerconfirm', 'method' => 'post']) !!} 
		{!! Form::hidden('_token', csrf_token()) !!}  
		<div class="form-group">
			{!! Form::hidden('username', $username) !!}
			{!! Form::label('username', '名前: '. $username) !!}
		</div>
		<div class="form-group">
			{!! Form::hidden('email', $email) !!}
			{!! Form::label('email', 'メールアドレス: '. $email) !!}
		</div>
		<div class="form-group">
			{!! Form::hidden('memo', $memo) !!}
			{!! Form::label('memo', 'メモ: '. $memo) !!}
		</div>
		<div class="form-group">
			{!! Form::submit("登録", ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
</div>
@stop
