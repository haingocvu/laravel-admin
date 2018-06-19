@extends('user.layout')
@section('title', 'Register')
@section('content')
<div class="card card-container">
    <h4 class="text-center">Register</h4>
    <form class="form-signin" method="post" action="#">
        <input type="text" name="username" class="form-control" placeholder="User name" required autofocus>
        <input type="text" name="fullname" class="form-control" placeholder="Full name" required>
        <input type="date" name="birthday" class="form-control" required style="margin-bottom: 10px">
        <input type="email" name="email" class="form-control" placeholder="Email address" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
        
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="register">Sign up</button>
    </form><!-- /form -->
</div><!-- /card-container -->
@endsection()