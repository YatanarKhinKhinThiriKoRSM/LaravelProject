@extends("template")
@section("main")
<h1>アンケート一覧</h1>
<a href='<?= URL::to('user/register') ?>'>新規入力</a><br><br>
<div class="container">
	<form action="<?= URL::to('user/viewlist') ?>" method="post">
		<input type="hidden" name="_token" value="<?= csrf_token() ?>">
		<table width="800" align ="center" style="position:relative;" border=1>
			<tr style="height:40px; font-weight: bold;" bgcolor="#3c9bd7"> 
				<th width =20% align ="center">入力日</th>
				<th width =20% align ="center">名前</th>
				<th width =30% align ="center">メールアドレス</th>
				<th width =30% align ="center">メモ</th>
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
</div>
@stop