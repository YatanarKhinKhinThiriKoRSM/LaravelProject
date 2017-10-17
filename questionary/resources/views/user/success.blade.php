@extends("template")
@section("main")
<h1 align ="center">入力成功しました。</h1>
<form action=" " method=" ">
	<table  width="600" height="300" align ="center" border=0>
		<tr> 
			<td width=30%> </td>
			<td width=5%> </td>
			<td width=65%><a href="<?= URL::to("user/viewlist") ?>">アンケート一覧画面へ戻る</a></td>
		</tr>
	</table>
</form>
@stop
