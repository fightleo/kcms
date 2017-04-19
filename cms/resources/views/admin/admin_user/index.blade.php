@extends('layouts.admin')
@section('title','用户列表')
@section('content')
	<script type="text/javascript">
		function doDel(id){

			if(confirm("确定要删除吗？")){
				var form = document.myform;
				form.action = "{{url('admin/admin_user/destroy')}}"+id;
				form.submit();
			}
		}

	</script>
	<form action="{{route('admin.admin_user.destroy')}}" method="post" name ="myform" style="display:none;">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="_method" value="delete">
	</form>

<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">

	<div class="span12">


		<!-- BEGIN PAGE TITLE & BREADCRUMB-->

		<h3 class="page-title">

			用户信息 <small>_</small>

		</h3>

		<ul class="breadcrumb">

			<li>

				<i class="icon-home"></i>

				<a href="#">首页</a>

				<i class="icon-angle-right"></i>

			</li>

			<li>

				<a href="#">用户管理</a>

				<i class="icon-angle-right"></i>

			</li>

			<li><a href="#">用户列表</a></li>

		</ul>

		<!-- END PAGE TITLE & BREADCRUMB-->

	</div>

</div>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="portlet box light-grey">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-globe"></i>用户列表</div>
		<!-- <div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div> -->
	</div>

	<div class="portlet-body">
		@if(session('success'))
		<div class="alert alert-success">

			<button class="close" data-dismiss="alert"></button>

			<strong>Success!</strong>  {{ session('success') }}

		</div>
		@endif
		@if(session('error'))
        <div class="alert alert-error">

            <button class="close" data-dismiss="alert"></button>

            <strong>Error!</strong> {{session('error')}}

        </div>
        @endif
		<div class="clearfix">
			<div class="btn-group">
				<button id="sample_editable_1_new" class="btn green">添加用户
					<i class="icon-plus"></i></button>
			</div>
			<div class="btn-group pull-right">
				<button class="btn dropdown-toggle" data-toggle="dropdown">工具
					<i class="icon-angle-down"></i></button>
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="#">打印</a></li>
					<li>
						<a href="#">另存为PDF格式</a></li>
					<li>
						<a href="#">导出 Excel</a></li>
				</ul>
			</div>
		</div>
		
		<table class="table table-striped table-bordered table-hover dataTable" id="sample_1" aria-describedby="sample_1_info">
			<thead>
			<tr role="row">
				
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 59px;">ID</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 109px;">用户名</th>
				<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 109px;">昵称</th>
				<!-- <th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 198px;">邮箱</th> -->
				<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 198px;">创建时间</th>
				<!-- <th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 198px;">更新时间</th> -->
				<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Joined" style="width: 106px;">状态</th>
				<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 176px;">操作</th>
			</tr>
			</thead>
			<tbody role="alert" aria-live="polite" aria-relevant="all">
			@foreach($list as $items)
			<tr class="gradeX odd">
				
				<td class=" ">{{$items->id}}</td>
				<td class="hidden-480 ">{{$items->username}}</td>
				<td class="hidden-480 ">{{$items->nickname}}</td>
				<!-- <td class="hidden-480 ">{{$items->email}}<a href="mailto:shuxer@gmail.com"></a></td> -->
				<!-- <td class="center hidden-480 "></td> -->
				<td class="center hidden-480 ">
					{{$items->create_at}}

				</td>

				<td class=" ">
					@if($items->status==0)
					<span class="label label-success">普通用户</span>	
					@elseif($items->status==1)	
					<span class="label label-info">系统管理员</span>
					@elseif($items->status==2)
					<span class="label label-danger">普通管理员</span>
					@elseif($items->status==3)
					<span class="label label-warning">禁用用户</span>

					@endif	

					<!-- <span class="label label-warning">异常</span> -->
					
				</td>

				<td>

					<a href="{{ route('admin.admin_user.edit',['id'=>$items->id])}}" class="btn mini purple"><i class="icon-edit"></i> 编辑</a>
					<a href="javascript:doDel({{$items->id}});" class="btn mini black"><i class="icon-trash"></i> 删除</a>
				</td>
			</tr>
		
			@endforeach


			</tbody>
		</table>
			
		<!-- </div> -->
	</div>
</div>

@endsection