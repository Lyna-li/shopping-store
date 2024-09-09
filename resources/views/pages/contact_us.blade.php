@extends('layout.app')

@section('style')
@endsection

@section('content')

<section class="contact">
    
        <div class="item-contact">
            <div class="get-in-touch">
                
            </div>
            <div class="contact-item">
                <h2>contact-us</h2><br>
                <form action="" method="POST">
               
                
                <label class="usrpswd">First Name</label><br>
                <div class="input-box">
                    <input class="input1" type="text" name="first_name" placeholder="Enter your first name" required>
                    <i class='bx bxs-user'></i>
                </div>
                
                <label class="usrpswd">Last Name</label><br>
                <div class="input-box">
                    <input class="input1" type="text" name="last_name" placeholder="Enter your last name" required>
                    <i class='bx bxs-user'></i>
                </div>
                
                <label class="usrpswd">Email</label><br>
                <div class="input-box">
                    <input class="input1" type="email" name="email" placeholder="Enter your email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                
                <label class="usrpswd">Message</label><br>
                <div class="input-box">
                    <textarea class="input1 text1" name="message" placeholder="Type your message here" required></textarea>
                </div>
                
                <button type="submit" class="send-btn">Send</button>
            </form>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    @include('scripts.home_scripts')
@endsection