@extends("template")
@section("main")
<h1 align ="center">アンケート入力</h1>

<form action="<?= URL::to('user/register') ?>" method="post">
	<input type="hidden" name="_token" value="<?= csrf_token() ?>">
	<table  width="600" height="300" align ="center" border=0>
		<tr> 
			<td width=30%>名前: </td>
			<td width=5%> </td>
			<td width=65%> <input type="text" name="username" required placeholder="名前" size="50"><br></td>
		</tr>
		<tr> 
			<td>メールアドレス: </td>
			<td> </td>
			<td> <input type="email" name="email" required placeholder="メールアドレス" size="50"><br></td>
		</tr>
		<tr> 
			<td>メモ: </td>
			<td> </td>
			<td>
				<textarea id="textarea" name="memo" required rows="5" cols="38" maxlength="500" placeholder="メモ"></textarea><br>
			</td>
		</tr>
		<tr> 
			<td> </td> 
			<td> </td>
			<td> </td> 
		</tr>
		<tr> 
			<td> </td> 
			<td> </td>
			<td> </td> 
		</tr>
		<tr> 
			<td> </td>
			<td> </td>
			<td>
				<input type="reset" value="キャンセル" style="height:40px; width:80px">
				<input type="submit" value="入力" style="height:40px; width:80px" >
			</td>
		</tr>
	</table>
</form>
@stop
