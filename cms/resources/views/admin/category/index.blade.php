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

			<li><a href="#">分类列表</a></li>

		</ul>

		<!-- END PAGE TITLE & BREADCRUMB-->

	</div>

</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">

	<div class="span12">

		<!-- BEGIN EXAMPLE TABLE PORTLET-->

		<div class="portlet box light-grey">

			<div class="portlet-title">

				<div class="caption"><i class="icon-globe"></i>分类列表</div>	

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

						<button id="sample_editable_1_new" class="btn green">

						新增分类 <i class="icon-plus"></i>

						</button>

					</div>

					<div class="btn-group pull-right">

						<button class="btn dropdown-toggle" data-toggle="dropdown">工具 <i class="icon-angle-down"></i>

						</button>

						<ul class="dropdown-menu pull-right">

							<li><a href="#">保存</a></li>

							<li><a href="#">另存为 PDF</a></li>

							<li><a href="#">导出 Excel</a></li>

						</ul>

					</div>

				</div>

				
				<table class="table table-striped table-bordered table-hover dataTable" id="sample_1" aria-describedby="sample_1_info">

					<thead>

						<tr role="row">
							<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 98px;">#ID</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 169px;">分类名称</th>
							<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Email" style="width: 198px;">所属分类</th>
							<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 116px;">路径</th>
							<th class="hidden-480 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Joined" style="width: 298px;">创建时间</th>
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 176px;">操作</th>
						</tr>

					</thead>

					<tbody role="alert" aria-live="polite" aria-relevant="all">
					@foreach ($catelist as $items)
						<tr class="gradeX odd">

							<td class=" ">{{$items->id}}</td>

							<td class=" ">{{$items->catename}}</td>

							<td class="hidden-480 "><a href="mailto:shuxer@gmail.com">{{$items->pid}}</a></td>

							<td class="hidden-480 ">{{$items->leaves}}</td>

							<td class="center hidden-480 ">{{$items->create_at}}</td>

							<td class=" ">
								
								<form action="{{route('admin.category.destroy',['id'=>$items->id])}}" method='POST'>
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<input type="hidden" name="_method" value="delete">
									<a href="{{route('admin.category.edit',['id'=>$items->id])}}" class="btn mini purple"><i class="icon-edit"></i> 编辑</a>
									<button class="btn mini black"><i class="icon-trash"></i> 删除</button>
									
								</form>
							
							</td>

						</tr>
						@endforeach
					</tbody>

				</table>


			</div>

		</div>

		<!-- END EXAMPLE TABLE PORTLET-->

	</div>

</div>
<!-- END PAGE CONTENT-->

@endsection