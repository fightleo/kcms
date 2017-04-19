<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res = DB::table('category')->get();

        //遍历
        foreach($res as $k=>$v){
            //以逗号进行分割
            $path = explode(',',$v->leaves);
            //获取逗号的数量
            $len = count($path)-1;
            //根据逗号的数量进行重复
            $v->catename = str_repeat('|--',$len).$v->catename;
    

        }
        return view('admin/category/index',['catelist'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         // $res = DB::table('category')->select(DB::raw('*,concat(leaves,id) as pathes'))->get();
        $res = DB::table('category')->get();

        //遍历
        foreach($res as $k=>$v){
            //以逗号进行分割
            $path = explode(',',$v->leaves);
            //获取逗号的数量
            $len = count($path)-1;
            //根据逗号的数量进行重复
            $v->catename = str_repeat('|--',$len).$v->catename;
    

        }
    
        // var_dump($res);die;
        return view('admin/category/create',['list'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

        //获取新增分类信息
        $row = $request->except('_token');
        //获取当前时间戳
        $row['create_at'] = date('Y-m-d H:i:s',time());

        //判断当前获取的PID
        if($row['pid']=='0'){
            //路径
            $row['leaves']='0,';

        }else{

            //获取父级ID
            $query = DB::table('category')->where('id',$row['pid'])->first();
            
            //拼接路径
            $row['leaves'] = $query->leaves.$query->id.',';
      
        }
        //执行
        $res = DB::table('category')->insertgetId($row);
        //判断
        if($res>0){

            return redirect(route('admin.category.index'))->with('success','新增分类成功！');
        } else {

            return back()->with('error','新增分类失败！');
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
        // echo '1';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        //获取编辑的分类信息
        $row = DB::table('category')->where('id',$id)->first();

        //查询已有分类列表
        $res = DB::table('category')->get();

        //遍历
        foreach($res as $k=>$v){
            //以逗号进行分割
            $path = explode(',',$v->leaves);
            //获取逗号的数量
            $len = count($path)-1;
            //根据逗号的数量进行重复
            $v->catename = str_repeat('|--',$len).$v->catename;
    

        }


        return view('admin/category/edit',['catelist'=>$res,'items'=>$row]);
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
        //
        $data = $request->only('pid','catename');
    
        $res = DB::table('category')->where('id',$id)->update($data);

        if($res>0){

            return redirect(route('admin.category.index'))->with('success','分类信息修改成功！');

       }else {

        return back()->with('error','分类信息修改失败！');
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
        // //获取删除的分类信息
        //  $row = DB::table('category')->where('id',$id)->first();

        //     //获取父类ID值
        //     $leaves = array_filter(explode(',',$row->leaves));
 
        //     if($leaves ==false){

        //     // 删除当前分类
        //     // $res = DB::table('category')->where('id',$id)->delete();
             
        //     }else {
        //         //获取上一级父类ID
        //         $later = end($leaves);
        //         $list = DB::table('category')->where('id',$later)->first();
        //         var_dump($list);die;
        //         $res = DB::table('category')->where('leaves','like',$list->leaves.'%')->lists('id');
        //         var_dump($res);die;

        //     }
        //     var_dump($leaves);die;
          
        
   


      
         //判断分类是否为根分类
        // if($row->pid==0){

        //     $res = DB::table('category')->where('id',$id)->delete();
           
        // }else {

        //   $res = DB::table('category')->where('pid','like','$row->leaves')
        // }
        $res = DB::table('category')->where('id',$id)->delete();

         if($res>0){

            return redirect(route('admin.category.index'))->with('success','分类信息删除成功！');

       }else {

        return back()->with('error','分类信息删除失败！');
       }
    }
}
