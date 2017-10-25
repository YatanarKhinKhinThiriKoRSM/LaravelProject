@extends("template")
@section("main")
<h1>入力フォーム</h1>
<? if( session('info') ): ?>
	<div class="info"  align ="center">
		<?= session('info') ?>
	</div>
<? endif; ?>
<div class="container">
	{!! Form::open(['url' => 'user/register', 'method' => 'post'], array('files' => true)) !!}
		{!! Form::hidden('_token', csrf_token()) !!}  
		<div class="form-group">
			{!! Form::label('username', '名前:') !!}
			{!! Form::text('username', null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'メールアドレス:') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('memo', 'メモ:') !!}
			{!! Form::textarea('memo', null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit("確認", ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
</div>
@stop
