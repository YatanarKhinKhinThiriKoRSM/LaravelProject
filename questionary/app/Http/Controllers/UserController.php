<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Request;
use Validator;
use DB;

class UserController extends Controller {
	function register() { 
		return view("user/register");
	}
	function create() { 
		$input = Request::all();
		$validator = Validator::make($input, array( "username" => "required", "email" => "required|email", "memo" => "required" ));
		if($validator->passes()) {
				User::insert($input);
				return view('user/success');
		}
		else {
				return redirect('user/register')->withErrors($validator);
		}
	}

	function viewuserlist() {  
		$Users = DB::table('users')->get();
		return view('user/viewlist', compact('Users'));
	}
	function registerconfirm() {
		return view("user/registerconfirm")->with('username', 'email', 'memo');
	}
	
}
