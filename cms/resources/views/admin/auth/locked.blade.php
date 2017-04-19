@extends('layouts.app')
@section('title','锁屏')
@section('content')

<div class="page-lock">

		<div class="page-logo">

			<a class="brand" href="#">

			<img src="{{ asset('media/image/logo-big.png')}}" alt="logo" />

			</a>

		</div>

		<div class="page-body">

			<img class="page-lock-img" src="{{ asset('media/image/profile.jpg')}}" alt="">

			<div class="page-lock-info">

				<h1>Administrator</h1>

				<span>{{session('useritems.uname')}}</span>

				<span><em>Locked</em></span>

				<form class="form-search" action="{{route('admin.login.docheck')}}" method="post">

					<div class="input-append">

						<input type="password" class="m-wrap" placeholder="请输入密码" name="password">
						{{csrf_field()}}
						<button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>

					</div>

					<div class="relogin">

						<a href="{{route('admin.login')}}">切换用户 ?</a>

					</div>

				</form>

			</div>

		</div>

		<div class="page-footer">

			2018 &copy; Metronic. Admin Dashboard Template.

		</div>

	</div>
@endsection