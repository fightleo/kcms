@extends('layouts.admin')
@section('title','分类列表')
@section('content')
	
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">

	<div class="span12">


		<!-- BEGIN PAGE TITLE & BREADCRUMB-->

		<h3 class="page-title">

			分类信息 <small>_</small>

		</h3>

		<ul class="breadcrumb">

			<li>

				<i class="icon-home"></i>

				<a href="#">首页</a>

				<i class="icon-angle-right"></i>

			</li>

			<li>

				<a href="#">分类管理</a>

				<i class="icon-angle-right"></i>

			</li>

			<li><a href="#">新增分类</a></li>

		</ul>

		<!-- END PAGE TITLE & BREADCRUMB-->

	</div>

</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
  <div class="span12">
    <div class="portlet box purple">
      <div class="portlet-title">
        <div class="caption">
          <i class="icon-reorder"></i>新增分类</div>
        
      </div>
      <div class="portlet-body form">
      	@if(session('error'))
        <div class="alert alert-error">

            <button class="close" data-dismiss="alert"></button>

            <strong>Error!</strong> {{session('error')}}

        </div>
        @endif
        <!-- BEGIN FORM-->
        <form action="{{route('admin.category.store')}}" method="post" class="form-horizontal">
          	<input type="hidden" name="id" class="span6 m-wrap">
	     <div class="control-group">

				<label class="control-label">#父级分类</label>

				<div class="controls">

					<select name="pid" id="" class="span6 m-wrap">
						<option value="0">|--</option>
						@foreach ($list as $k=>$v)
						<option value="{{$v->id}}">{{$v->catename}}</option>
						@endforeach
					</select>

					<!-- <span class="help-inline">Some hint here</span> -->

				</div>

		   </div>
	      
		  <div class="control-group">

				<label class="control-label">分类名</label>

				<div class="controls">

					<input type="text" name="catename" class="span6 m-wrap">

					<!-- <span class="help-inline">Some hint here</span> -->

				</div>

		   </div>
		   <!-- <div class="control-group">

				<label class="control-label">排序</label>

				<div class="controls">

					<input type="text" name = "leaves" class="span6 m-wrap">

					<span class="help-inline">Some hint here</span> 

				</div>

			</div> -->
         	<div class="form-actions">
				{{ csrf_field() }}
				<button type="submit" class="btn blue">提交</button>

				<!-- <button type="button" class="btn">重置</button>                             -->

			</div>
         
        </form>
        <!-- END FORM--></div>
    </div>
    <!-- END PORTLET--></div>
</div>
<!-- END PAGE CONTENT-->

@endsection