@extends('layouts.error')
@section('title','404页面')
@section('content')
<div class="row-fluid">

        <div class="span12 page-404">

            <div class="number">

                404

            </div>

            <div class="details">

                <h3>Opps, You're lost.</h3>

                <p>

                    We can not find the page you're looking for.<br />

                    <a href="{{url('admin/login')}}">Return home</a> or try the search bar below.

                </p>

                <form action="#">

                    <div class="input-append">                      

                        <input class="m-wrap" size="16" type="text" placeholder="keyword..." />

                        <button class="btn blue">Search</button>

                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection