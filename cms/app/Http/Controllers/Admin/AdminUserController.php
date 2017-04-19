<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use DB,Breadcrumbs;
class AdminUserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $res = DB::table('users')->get();
       
        return view('admin.admin_user.index',['list'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.admin_user.create');
    }
    /**
     * Checkuname a verify user name exists.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Checkuname()
    {
        
        //获取用户填写的用户名
        $uname = $_GET['uname'];
      var_dump($uname);die;
        $res = DB::table('users')->where('username',$uname)->first();
  
        //返回
        if($res){

            return '1';
        } else {
            return;
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取用户填写的资料
        $row = $request->except('_token','password','rpassword');
        //加密
        $row['password'] = Hash::make($request->input('password'));

       //获取当前时间戳
        $row['create_at'] =date('Y-m-d H:i:s',time());
        //执行
        $res = DB::table('users')->insert($row);

        //判断
        if($res){

            return redirect(route('admin.admin_user.index'))->with('success','添加用户成功！');
        } else {

            return back()->with('error','你有一些形式错误.请检查下面！');
        }
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         //获取用户填写的用户名
        $uname = $_GET['uname'];
     
        $res = DB::table('users')->where('username',$uname)->first();
  
        //返回
        if($res){

            return '1';
        } else {
            return;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取待编辑数据
       
        $res = DB::table('users')->where('id',$id)->first();

        return view('admin.admin_user.edit',['list'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        //获取ID和密码
    
       $pwd = $request->input('password');
       $row = $request->except('_token','_method','password');

       //查询ID对应用户信息
       $res = DB::table('users')->where('id',$id)->first();
    
       //检测用户密码是否正确
       if (Hash::check($pwd, $res->password)) {
        
            $query = DB::table('users')->where('id',$id)->update($row);
           
       
            if($query){

                return redirect(route('admin.admin_user.index'))->with('success','用户信息修改成功！');
            } else {

                return back()->with('error','用户信息修改失败！');
            }

        }else {

             return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = preg_replace( '/[^\d]/','',$id);//获取字符串中的数字
        //执行
        $res = DB::table('users')->where('id',$id)->update(['status'=>3]);
        //返回
        if($res>0){

            return redirect(route('admin.admin_user.index'))->with('success','信息删除成功！');
        } else {

            return back()->with('error','信息删除失败！');
        } 
      

    }
}
