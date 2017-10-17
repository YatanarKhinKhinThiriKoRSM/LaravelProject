@extends("template")
@section("main")
<h1 align="center">アンケート一覧</h1>

<a href='<?= URL::to('user/register') ?>'>新規入力</a><br><br>

<form action="<?= URL::to('user/viewlist') ?>" method="post">
	<input type="hidden" name="_token" value="<?= csrf_token() ?>">
	<table width="800" align ="center" style="position:relative;" border=1>
		<tr> 
			<td width=20% align ="center"><b>入力日</b></td>
			<td width=20% align ="center"><b>名前:</b></td>
			<td width=30% align ="center"><b>メールアドレス</b></td>
			<td width=30% align ="center"><b>メモ</b></td>
		</tr>
		<?php
			foreach ($Users as $val) {
		?>
		<tr> 
			<td align ="center"><?php echo date('d-m-Y', strtotime($val->regdate)); ?></td>
			<td align ="center"><?php echo $val->username; ?></td>
			<td align ="center"><?php echo $val->email; ?></td>
			<td align ="center"><?php echo $val->memo; ?></td>
		</tr>
		<?php
			}
		?>
	</table>
</form>
@stop