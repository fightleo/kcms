@extends('layouts.admin')
@section('title','用户编辑')
@section('content')
    <div class="container-fluid">

        <!-- BEGIN PAGE HEADER-->

        <div class="row-fluid">

            <div class="span12">

              
                <h3 class="page-title">

                    资料更新

                    <small>_</small>

                </h3>

                <ul class="breadcrumb">

                    <li>

                        <i class="icon-home"></i>

                        <a href="#">首页</a>

                        <span class="icon-angle-right"></span>

                    </li>

                    <li>

                        <a href="#">用户管理</a>

                        <span class="icon-angle-right"></span>

                    </li>

                    <li><a href="#">更新用户信息</a></li>

                </ul>

            </div>

        </div>

        <!-- END PAGE HEADER-->

        <!-- BEGIN PAGE CONTENT-->


    <div class="row-fluid">

            <div class="span12">

                <!-- BEGIN VALIDATION STATES-->

                <div class="portlet box green">

                    <div class="portlet-title">

                        <div class="caption"><i class="icon-reorder"></i>详细资料</div>

                    </div>

                    <div class="portlet-body form">

                        <!-- BEGIN FORM-->

                        <!-- <h3>Advance validation of custom radio buttons, checkboxes and chosen dropdowns</h3> -->

                        <form action="{{route('admin.admin_user.update',['id'=>$list->id])}}" method="post" id="form_sample_2" class="form-horizontal" novalidate="novalidate">
                              <input type="hidden" name="_method" value="put">

                           @if(session('error'))
                            <div class="alert alert-error hide">

                                <button class="close" data-dismiss="alert"></button>

                                <strong>Error!</strong> {{session('error')}}.

                            </div>
                             @endif     
                            <div class="alert alert-success hide">

                                <button class="close" data-dismiss="alert"></button>

                                Your form validation is successful!

                            </div>
                            
                            <div class="control-group">

                                <label class="control-label">用户名<span class="required">*</span></label>

                                <div class="controls">

                                    <input type="text" id="uname" name="name" data-required="1" class="span6 m-wrap" disabled value="{{$list->username}}">
                                     <input type="hidden" class="span6 m-wrap" name="id" value="{{$list->id}}">

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label">昵称&nbsp;&nbsp; </label>

                                <div class="controls">

                                    <input type="text"  name="nickname" data-required="1" class="span6 m-wrap" value="{{$list->nickname}}">

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label">密码<span class="required">*</span></label>

                                <div class="controls">

                                    <input name="password" type="password" class="span6 m-wrap">

                                </div>

                            </div>  
                             
                            <div class="control-group">

                                <label class="control-label">邮箱<span class="required">*</span></label>

                                <div class="controls">

                                    <input name="email" type="text" class="span6 m-wrap" value="{{$list->email}}">

                                </div>

                            </div>

                            

                            <div class="control-group">

                                <label class="control-label">权限分组<span class="required">*</span></label>

                                <div class="controls">

                                    <select class="span6 m-wrap" name="status">
                                     
                                        <option value="">请选择...</option>
                                       
                                        <option value="0"  @if($list->status==0) selected @endif>普通用户</option>

                                        <option value="1" @if($list->status==1) selected @endif>系统管理员</option>

                                        <option value="2" @if($list->status==2) selected @endif>普通管理员</option>

                                       <option value="3" @if($list->status==3) selected @endif>禁用用户</option>
                                    </select>

                                </div>

                            </div>

                            <div class="form-actions">
                                {{ csrf_field() }}
                                <button type="submit" class="btn green">提交</button>&nbsp;&nbsp;&nbsp;&nbsp;

                                <button type="button" class="btn">重置</button>

                            </div>

                        </form>

                        <!-- END FORM-->

                    </div>

                </div>

                <!-- END VALIDATION STATES-->

            </div>

        </div>  
        <!-- END PAGE CONTENT-->

    </div>
@endsection