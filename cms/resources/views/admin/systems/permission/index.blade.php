@extends('layouts.admin')
@section('title', '权限管理')
@section('content')
<div class="row-fluid">

	<div class="span12">

		<!-- BEGIN PAGE TITLE & BREADCRUMB-->

		<h3 class="page-title">

			权限管理 <small>_</small>

		</h3>

		<ul class="breadcrumb">

			<li>

				<i class="icon-home"></i>

				<a href="#">首页</a> 

				<i class="icon-angle-right"></i>

			</li>

			<li>

				<a href="#">权限管理</a>

				<i class="icon-angle-right"></i>

			</li>

			<li><a href="#">所有权限</a></li>

		</ul>

		<!-- END PAGE TITLE & BREADCRUMB-->

	</div>

</div>

<div class="row-fluid">

			
	<div class="span12">

		<div class="portlet box grey">

			<div class="portlet-title">

				<div class="caption"><i class="icon-comments"></i>所有权限</div>

				

			</div>

			<div class="portlet-body">
		@if(session('success'))
		<div class="alert alert-success">

			<button class="close" data-dismiss="alert"></button>

			<strong>Success!</strong>  {{ session('success') }}

		</div>
		@endif
		
		
		<table class="table table-striped table-bordered table-hover dataTable" id="sample_1" aria-describedby="sample_1_info">
			<thead>
			<tr role="row">
				
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 59px;">ID</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 109px;">用户名</th>
				<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 109px;">昵称</th>
		
				<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 198px;">创建时间</th>
			
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
			
				<td class="center hidden-480 ">{{$items->create_at}}</td>

				<td class=" ">
					
					<span class="label label-success"></span>
					@if($items->status==1)	
					<span class="label label-info">系统管理员</span>
					@elseif($items->status==2)
					<span class="label label-danger">普通管理员</span>
					@endif
				</td>

				<td>

					<a href="{{route('admin.systems.permission.edit',['id'=>$items->id])}}" class="btn mini purple"><i class="icon-edit"></i>分配</a>
					<!-- <a href="javascript:doDel();" class="btn mini black"><i class="icon-trash"></i> 删除</a> -->
				</td>
				
			</tr>
			@endforeach
	


			</tbody>
		</table>
			
		<!-- </div> -->
	</div>

		</div>

	</div>

</div>
@endsection