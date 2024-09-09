@extends('layout.app')

@section('style')
@endsection

@section('content')
 
 <section class="login">
    <div class="logcontent">
        <form id="signinForm" class="form1 sign-in ">
            <h1>sign in </h1>
            <label class="usrpswd">user_name</label>
            <div class="input-box"><input class="input1" type="text" placeholder="enter your username"required><i class='bx bxs-user '></i></div><br>
            <label class="usrpswd">password</label>
            <div class="input-box"><input class="input1" type="password" placeholder="enter your password" required><i class='bx bxs-lock-alt'></div></i>
            
            <div class="remember-forgot">
                <label><input class="input2" type="checkbox"> <span class="remember" >remember me</span> </label>
                <a>forgot password! </a>
                
            </div>
            <button type="submit " class="log-btn">sign-in</button>
            <div class="have-register">
                <span class="forgot" > don't have an account!</span>
                <a href="/signup" class="register-link">sign-up</a>
                
                
            </div>
        </form>
    </div>
</section>
@endsection

@section('scripts')
    @include('scripts.home_scripts')
@endsection