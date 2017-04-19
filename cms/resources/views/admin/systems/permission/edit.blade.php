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

			<li><a href="#">权限分配</a></li>

		</ul>

		<!-- END PAGE TITLE & BREADCRUMB-->

	</div>

</div>

<div class="row-fluid">

			
	<div class="span12">

		<div class="portlet box grey">

			<div class="portlet-title">

				<div class="caption"><i class="icon-comments"></i>权限分配</div>

				

			</div>

			<div class="portlet-body fuelux">	
				<form action="#" id="form_sample_1" class="form-horizontal" novalidate="novalidate">
					<div class="control-group">

						<label class="control-label">选择用户</label>

						<div class="controls">

							<div class="select2-container span6 select2" id="s2id_select2_sample1">
							<a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1">   <span>{{$list->username}}</span><abbr class="select2-search-choice-close" style="display: none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"></div>
							<!-- <select id="select2_sample1" class="span6 select2 select2-offscreen" tabindex="-1" name="username">
								
								<option value="">请选择...</option>

								<option value="AL">{{$list->username}}</option>

								<option value="WY">Wyoming</option>

							</select>
 -->
						</div>

					</div>
					<ul class="tree" id="tree_2" style="margin-left:180px;">

						<li>

							<a href="#" data-role="branch" class="tree-toggle" data-toggle="branch" data-value="Bootstrap_Tree">所有权限

							</a>

							<ul class="branch in">

								<li>

									<a href="" data-role="branch" class="tree-toggle" data-toggle="branch" data-value="XML_Example"><i class="icon-android"></i> 首页管理</a>

									</a>
									<ul class="branch in"><li><img src="" class="indicator"> Loading ...</li></ul>

								</li>

								<li>

									<a href="" data-role="branch" class="tree-toggle" data-toggle="branch" data-value="XML_Example"><i class="icon-list-ul"></i> 栏目管理</a>

									</a>
									<ul class="branch in"><li><img src="" class="indicator"> Loading ...</li></ul>

								</li>

								<li>

									<a href="" data-role="branch" class="tree-toggle" data-toggle="branch" data-value="XML_Example"><i class="icon-glass"></i> 产品管理</a>

									</a>
									<ul class="branch in"><li><img src="" class="indicator"> Loading ...</li></ul>

								</li>

								<li>
									<a href="" data-role="branch" class="tree-toggle closed" data-toggle="branch" data-value="JSON_Example"><i class="icon-bookmark-empty"></i> 页面管理</a>
									<ul class="branch in"><li><img src="" class="indicator"> Loading ...</li></ul>
								</li>
								<li>

									<a href="" data-role="branch" class="tree-toggle" data-toggle="branch" data-value="HTML_Example"><i class="icon-cog"></i> 系统管理</a>
									<ul class="branch in"><li><img src="" class="indicator"> Loading ...</li></ul>

								</li>

								<li>

									<a href=""  data-role="leaf">

									<i class="icon-share"></i> 其他

									</a>

								</li>


							</ul>

						</li>

					</ul>


					<div class="form-actions">

						<button type="submit" class="btn purple">保存</button>

						<button type="button" class="btn">重置</button>

					</div>

				</form>

			</div>

		</div>

	</div>

</div>
@endsection