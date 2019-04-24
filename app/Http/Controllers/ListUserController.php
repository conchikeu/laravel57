<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListUserController extends Controller
{
	public function index() {
      $users = DB::select('select * from student');
      return view('stud_delete_view',['users'=>$users]);
  		}
    public function getListUser(){
    	$users = DB::table('users')->get();
    	return view('pages.list_user.list_user', ['users' => $users]);
    }
    public function getEditUser($id) {
		$users = DB::select('select * from student where id = ?',[$id]);
      return view('list_user',['users'=>$users]);
	}
	public function edit(Request $request,$id) {
		 $validData = $this->validate($request, [
        'name' => 'required|string|min:1|max:255',
        'email' => 'required|string|min:1max:255',
        'is_admin'=>'required|string|min:1|max:2',
        'password' => 'required|string|min:1|max:255',
    ]);
        
	      $name      = $request->name;
	      $email     = $request->email;
	      $is_admin = $request->is_admin;
	      $password  = Hash::make($request->password);
	DB::table('users')->where('id','=',$id)->update(['name' => $name, 'email' => $email, 'is_admin'=>$is_admin, 'password' => $password]);
	return redirect()->route('list_user');
	}
	
	public function destroy($id) {
    DB::table('users')->delete($id);
		return redirect()->route('list_user');
	}



	// public function create(Request $request)
 //    {
 //    $validData = $this->validate($request, [
 //            'email' => 'required|string|email|max:255|unique:users',
 //            'password' => 'required|string|min:6|confirmed',
 //        ]);

 //        return User::create([
 //            'email' => $validData['email'],
 //            'password' => Hash::make($validData['password']),
 //        ]);
 //    }


}
	 

   
