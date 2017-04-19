@extends('layouts.admin')
@section('title', '单页面管理')
@section('content')


<div class="row-fluid">
	<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->

		<h3 class="page-title">

			单页面 <small>_</small>

		</h3>

		<ul class="breadcrumb">

			<li>

				<i class="icon-home"></i>

				<a href="#">首页</a> 

				<i class="icon-angle-right"></i>

			</li>

			<li>

				<a href="#">单页面列表</a>

				<i class="icon-angle-right"></i>

			</li>

			<li><a href="#">详情</a></li>

		</ul>

			<!-- END PAGE TITLE & BREADCRUMB-->

	</div>
</div>
<div class="row-fluid">
	<div class="span12">

		<!-- BEGIN SAMPLE TABLE PORTLET-->

		<div class="portlet box red">

			<div class="portlet-title">

				<div class="caption"><i class="icon-cogs"></i>单页面列表</div>

				<!-- <div class="tools">

					<a href="javascript:;" class="collapse"></a>

					<a href="#portlet-config" data-toggle="modal" class="config"></a>

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

				<table class="table table-hover">

					<thead>

						<tr>

							<th>#</th>

							<th>菜单栏目</th>

							<th>描述</th>

							<th class="hidden-480">状态</th>

							<th>操作</th>

						</tr>

					</thead>

					<tbody>

						<tr>

							<td>1</td>

							<td>联系我们</td>

							<td>Otto</td>

							<td class="hidden-480">已发布</td>

							<td><span class="label label-success">编辑</span></td>

						</tr>

						<tr>

							<td>2</td>

							<td>关于我们</td>

							<td>Nilson</td>

							<td class="hidden-480">未发布</td>

							<td><span class="label label-info">编辑</span></td>

						</tr>

						<tr>

							<td>3</td>

							<td>内容简介</td>

							<td>Cooper</td>

							<td class="hidden-480">lar</td>

							<td><span class="label label-warning">Suspended</span></td>

						</tr>

						<tr>

							<td>3</td>

							<td>测试</td>

							<td>Lim</td>

							<td class="hidden-480">sanlim</td>

							<td><span class="label label-danger">Blocked</span></td>

						</tr>

					</tbody>

				</table>

			</div>

		</div>

		<!-- END SAMPLE TABLE PORTLET-->

	</div>
</div>
@endsection