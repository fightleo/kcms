@extends('layouts.admin')
@section('title','网站配置')


@section('content')
<div class="row-fluid">

	<div class="span12">

		<h3 class="page-title">

			网站配置

			 <small>_</small>

		</h3>

		<ul class="breadcrumb">

			<li>

				<i class="icon-home"></i>

				<a href="index.html">首页</a> 

				<span class="icon-angle-right"></span>

			</li>

			<li>

				<a href="#">系统管理</a>

				<span class="icon-angle-right"></span>

			</li>

			<li><a href="#">网站配置</a></li>

		</ul>

	</div>

</div>
<div class="row-fluid">

	<div class="span12">

		<!-- BEGIN PORTLET-->   

		<div class="portlet box blue">

			<div class="portlet-title">

				<div class="caption"><i class="icon-reorder"></i>详细资料</div>


			</div>
			<div>
				
			</div>
			<div class="portlet-body form">

				<!-- BEGIN FORM-->

				<form action="#" class="form-horizontal">

					<div class="control-group">

						<label class="control-label">网站标题:</label>

						<div class="controls">

							<input name="title" type="text" class="span6 m-wrap">

						</div>

					</div>
					<div class="control-group">

						<label class="control-label">Logo上传:</label>

						<div class="controls">

							<div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">

								<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">

								<!-- 	<img src="{{ asset('media/image/AAAAAA&amp;text=no+image')}}" alt=""> -->

									<img src="{{ asset('media/image/logo_metronic.jpg')}}" alt="">
								</div>

								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

								<div>

									<span class="btn btn-file"><span class="fileupload-new">选择文件..</span>

									<!-- <span class="fileupload-exists">Change</span> -->

									<input type="file" class="default"></span>

									<!-- <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> -->

								</div>

							</div>

							<span class="label label-important">注！</span>

							<span>
							附加图像缩略图支持在最新的Firefox，Chrome，Opera，Safari和Internet Explorer 10

							</span>

						</div>

					</div>
					<div class="control-group">

						<label class="control-label">网站描述:</label>

						<div class="controls">
							<textarea class="span12 wysihtml5 m-wrap" rows="6" style="display: block;"></textarea><input type="hidden" name="_wysihtml5_mode" value="1">

						</div>

					</div>
					<div class="control-group">

						<label class="control-label">网站开关:</label>

						<div class="controls">

							<div class="basic-toggle-button">

								<input type="radio" class="toggle" checked="checked" />开启
								<input type="radio" class="toggle"  />关闭

							</div>

						</div>

					</div>

					<div class="form-actions">

						<button type="submit" class="btn blue">提交</button>

						<button type="button" class="btn">重置</button>                            

					</div>

				</form>

				<!-- END FORM-->  

			</div>

		</div>

		<!-- END PORTLET-->

	</div>

</div>
@endsection