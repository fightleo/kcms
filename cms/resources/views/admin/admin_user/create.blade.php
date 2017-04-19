@extends('layouts.admin')
@section('title', '用户添加')

@section('content')


    <div class="container-fluid">

        <!-- BEGIN PAGE HEADER-->

        <div class="row-fluid">

            <div class="span12">


                <h3 class="page-title">

                    添加用户

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

                    <li><a href="#">添加用户</a></li>

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

                                <div class="caption"><i class="icon-reorder"></i>添加用户</div>

                            </div>

                            <div class="portlet-body form">

                                <!-- BEGIN FORM-->

                                <!-- <h3>Advance validation of custom radio buttons, checkboxes and chosen dropdowns</h3> -->

                                <form action="{{route('admin.admin_user.store')}}" id="form_sample_2"  method="post" class="form-horizontal" novalidate="novalidate">

                                    <div class="alert alert-error hide">

                                        <button class="close" data-dismiss="alert"></button>

                                        You have some form errors. Please check below.

                                    </div>

                                    <div class="alert alert-success hide">

                                        <button class="close" data-dismiss="alert"></button>

                                        Your form validation is successful!

                                    </div>

                                    <div class="control-group">

                                        <label class="control-label">用户名<span class="required">*</span></label>

                                        <div class="controls">

                                            <input type="text" id="uname" name="username" data-required="1" class="span6 m-wrap">

                                        </div>

                                    </div>

                                    <div class="control-group">

                                        <label class="control-label">昵称&nbsp;&nbsp; </label>

                                        <div class="controls">

                                            <input type="text"  name="nickname" data-required="1" class="span6 m-wrap">

                                        </div>

                                    </div>
                                    <div class="control-group">

                                        <label class="control-label">密码<span class="required">*</span></label>

                                        <div class="controls">

                                            <input name="password" type="password" class="span6 m-wrap" id="submit_form_password">

                                        </div>

                                    </div>  
                                    <div class="control-group">

                                        <label class="control-label">确认密码<span class="required">*</span></label>

                                        <div class="controls">

                                            <input name="rpassword" type="password" class="span6 m-wrap" id="rpassword">

                                        </div>

                                    </div>   
                                    <div class="control-group">

                                        <label class="control-label">邮箱<span class="required">*</span></label>

                                        <div class="controls">

                                            <input name="email" type="text" class="span6 m-wrap">

                                        </div>

                                    </div>

                                    

                                    <div class="control-group">

                                        <label class="control-label">权限分组<span class="required">*</span></label>

                                        <div class="controls">

                                            <select class="span6 m-wrap" name="status">

                                                <option value="">请选择...</option>

                                                <option value="0">普通用户</option>

                                                <option value="1">系统管理员</option>

                                                <option value="2">普通管理员</option>

                                               <option value="3">禁用用户</option>
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
        <!-- <div class="row-fluid">

            <div class="span12">

                <div class="portlet box blue" id="form_wizard_1">

                    <div class="portlet-title">

                        <div class="caption">

                            <i class="icon-reorder"></i> 填写用户信息 <span class="step-title"></span>

                        </div>

                      

                    </div>

                    <div class="portlet-body form">
                        
                        
                      
                        <form action="#" method="post"   class="form-horizontal" id="submit_form" novalidate="novalidate">

                            <div class="form-wizard">

                                <div class="navbar steps">

                                </div>

                                <div class="tab-content">
                                    @if(session('error'))
                                    <div class="alert alert-error hide">

                                        <button class="close" data-dismiss="alert"></button>
                                        <strong>Error!</strong> {{session('error')}}          

                                    </div>
                                     @endif
                                    <div class="alert alert-success hide">

                                        <button class="close" data-dismiss="alert"></button>

                                        Your form validation is successful!

                                    </div>

                                    <div class="tab-pane active" id="tab1">

                                        <div class="control-group">

                                            <div class="controls">

                                                <input type="hidden" class="span6 m-wrap" name="id">

                                            </div>

                                        </div>
                                        <div class="control-group">

                                            <label class="control-label">用户名<span class="required">*</span></label>

                                            <div class="controls">

                                                <input type="text" class="span6" id="uname" name="username" required="required" placeholder="请输入用户名">
                                                <span class="help-inline ok"></span>

                                            </div>

                                        </div>
                                        <div class="control-group">

                                            <label class="control-label">昵称<span class="required">*</span></label>

                                            <div class="controls">

                                                <input type="text" class="span6 m-wrap" name="nickname" placeholder="请输入昵称">


                                            </div>

                                        </div>
                                        <div class="control-group">

                                            <label class="control-label">密码<span class="required">*</span></label>

                                            <div class="controls">

                                                <input type="password" class="span6 m-wrap" name="password" id="submit_form_password" required="required" placeholder="请输入密码">


                                            </div>

                                        </div>

                                        <div class="control-group">

                                            <label class="control-label">确认密码<span class="required">*</span></label>

                                            <div class="controls">

                                                <input type="password" class="span6 m-wrap" id="rpassword" name="rpassword" required="required" placeholder="请再次输入密码">

                                               

                                            </div>

                                        </div>

                                        <div class="control-group">

                                            <label class="control-label">邮箱<span class="required">*</span></label>

                                            <div class="controls">

                                                <input type="text" class="span6 m-wrap" name="email" placeholder="请输入您的邮箱地址">



                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-actions clearfix">
                                    {{ csrf_field() }}

                                    <a href="javascript:;" class="btn green button-previous">

                                        <i class="m-icon-swapleft  m-icon-white"></i> 重置

                                    </a>

                                    <button  class="btn blue button-next">

                                        提交 <i class="m-icon-swapright m-icon-white"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div> -->

        <!-- END PAGE CONTENT-->

    </div>
@endsection
@section('javascript')
<script src="{{ asset('media/js/checkuname.js  ') }}" type="text/javascript"></script>
@endsection

