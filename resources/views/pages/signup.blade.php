@extends('layout.app')

@section('style')
@endsection

@section('content')
 
<section class="login">
    <div class="logcontent" id="log-signup">
        <form id="signupForm" class="form1 sign-up">
            <h1> sign up </h1>
            <label class="usrpswd">user_name</label>
            <div class="input-box"><input class="input1" type="text" placeholder="enter your fullname"required><i class='bx bxs-user'></i> </div><br>
            <label class="usrpswd">Email</label>
            <div class="input-box"><input class="input1" type="Email" placeholder="enter your Email "required><i class='bx bxs-envelope'></i> </div><br>
            <label class="usrpswd">password</label>
            <div class="input-box"><input class="input1" type="password" placeholder="enter your password" required><i class='bx bxs-lock-alt'></i> </div>
            
            <div class="remember-forgot">
                <label><input class="input2" type="checkbox" required> <span class="remember" >I agree to the terms and conditions</span> </label>
            </div>
            <button type="submit " class="log-btn">sign-up</button>
            <div class="have-register">
                <span class="forgot" > already have an account</span>
                <a href="/signin" class="register-link">sign-in</a>
            </div>
        </form>
     </div>
</section>
@endsection

@section('scripts')
    @include('scripts.home_scripts')
@endsection