<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Request;
use Validator;
use DB;

class UserController extends Controller {
	//アンケート一覧
	function viewuserlist() {  
		$Users = DB::table('users')->get();
		return view('user.viewlist', compact('Users'));
	}
	
	// 入力フォーム
	function register() { 
		return view('user.register');
	}
	
	// 確認フォーム
	function registerconfirm() {
		$input = Request::all();
		$validator = Validator::make($input, array(
													"username" => "required",
													"email" => "required|email|unique:users",
													"memo" => "required"
													));
		if($validator->passes()) {
				return view('user.registerconfirm')->with('username', 'email', 'memo');
		}
		else {
				return view('user.register')->with("info", "Email is already exist!!!");
		}
	}
	
	// 完了フォーム
	function create() { 
		$input = Request::all();
		User::insert($input);
		return view('user.success');
		
	}	
}
