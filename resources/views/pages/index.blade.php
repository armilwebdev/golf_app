@extends('layouts.app')
@section('content')
<div class="golf-cover enable-blur">
    <div class="home-title col-md-5 col-sm-12">
            <span class="darkorange">Way to {{ config('app.name', 'golf')}}</span>
        <div class="home-description">
            Keep track of your golf club distances to help you select the proper club on the course.
        </div>
        @guest
        <div class="register-buttons">
             <a href="login" class="btn btn-lg btn-outline-light loginbtn">Login</a>
             <a href="register" class="btn registerbtn bg-orange text-light">Register</a>
        </div>
        @endguest
    </div>
</div>
@endsection