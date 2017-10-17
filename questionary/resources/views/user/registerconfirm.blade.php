@extends("template")
@section("main")
<h1 align ="center">アンケート確認</h1>
<?php
	$username=$_POST['username'];
	$email=$_POST['email'];
	$memo=$_POST['memo'];
?>
<form action="<?= URL::to('user/registerconfirm') ?>" method="post">
	<input type="hidden" name="_token" value="<?= csrf_token() ?>">
	<table  width="550" height="300" align ="center" border=0>
		<tr> 
			<td>名前: </td>
			<td>
				<input type="hidden" name="username" value="<?php echo $username; ?>">
				<label><?php echo $username; ?></label><br>
			</td>
		</tr>
		<tr> 
			<td>メールアドレス: </td>
			<td>
				<input type="hidden" name="email" value="<?php echo $email; ?>">
				<label><?php echo $email; ?></label><br>
			</td>
		</tr>
		<tr> 
			<td>メモ: </td>
			<td>
				<input type="hidden" name="memo" value="<?php echo $memo; ?>">
				<label><?php echo $memo; ?></label><br>
			</td>
		</tr>
		<tr> 
			<td> </td> 
			<td> </td> 
		</tr>
		<tr> 
			<td> </td> 
			<td> </td> 
		</tr>
		<tr> 
			<td> </td>
			<td>
				<input type="button" value="キャンセル" style="height:40px; width:80px" onclick="javascript:history.back()">
				<input type="submit" value="確認" style="height:40px; width:80px">
			</td>
		</tr>
	</table>
</form>
@stop
