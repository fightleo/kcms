<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use DB,Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

	
	//登录页面显示
   public function index(){


   	 	return view('admin.auth.login');
   }


   //登录验证
   public function doCheck(Request $request){

		//判断useritems是否存在
		if (!$request->session()->has('useritems')) {
		  	//获取用户登录的帐号和密码	
		   	$uname = $request->input('username');
		   	$pwd = $request->input('password');
		   
		   
		   	//查询用户是否存在
		 	$res = DB::table('users')->where('username',$uname)->first();

		 	//验证用户名和密码
		 	if($res&&$hashpwd = Hash::check($pwd,$res->password)){
		 
		 		if($res->status=="1"||$res->status=="2"){

		 			
		 		//将验证通过的用户名和密码写入session
		 		 session(['useritems'=>['uname' => $uname,'pwd'=>$res->password]]);
		 	
		 		return redirect('admin/home');	

		 		}else{

		 			return back()->with('error','您的帐号权限不够！');
		 		}
		 		

		 	}else {

		 		return back()->with('error','帐号或密码输入错误！');
		 	}

		 } else {

		 	//获取session中存入的uname
		 	$uname = $request->session()->get('useritems.uname');
		 	//获取用户输入的密码
		 	$pwd = $request->input('password');
		 	//查询用户
		 	$res = DB::table('users')->where('username',$uname)->first();

		 	
		 	//验证密码
		 	if($res&&$hashpwd = Hash::check($pwd,$res->password)){
		 		//将验证通过的用户名和密码写入session
		 		 session(['useritems'=>['uname' => $uname,'pwd'=>$res->password]]);
		 	
		 		return redirect('admin/home');

		 	}else {

		 		return back();
		 	}
		 }
   }

   //退出登录
   public  function logOut(Request $request){
	
		//判断useritems是否存在
		if ($request->session()->has('useritems')) {
		    //把数据从 session 内取出，并且删除它
			$request->session()->pull('useritems','default');
		}
		return redirect('admin/login');
   }

   //	锁屏页
   public function doLocked(Request $request){

   	 	//把密码数据从 session 内取出，并且删除它
		$request->session()->pull('useritems.pwd','default');

   		return view('admin.auth.locked');
   }

}
