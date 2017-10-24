<?php namespace App\Models;

use DB;
use Hash;

class User{
	static function insert($input){
		$data = array( $input['username'], $input['email'], $input['memo'] );
		$result = DB::insert("INSERT INTO users ( username, email, memo ) VALUES (?, ?, ?)", $data);
		return $result;
	}
}
