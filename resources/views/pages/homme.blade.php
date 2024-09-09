@extends('layout.app')
@section('style')
@endsection

@section('content')

<section class="homme container">
<div class="content-homme">
            <div class="title">
                <h1>Les Hommes</h1>
            </div>
        <div class="row">
            <div class="box">
                 <a href="/tshirt1"><img src="{{ asset('assets/images/ts.jpg') }}" alt=""></a>
                  <div class="des">
                     <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href="tshirt2"><img src="{{ asset('assets/images/ts1.jpg') }}" alt=""></a>
                  <div class="des">
                     <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href="/tshirt1"><img src="{{ asset('assets/images/tsh2.jpg') }}" alt=""></a>
                  <div class="des">
                      <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href="/tshirt1"><img src="{{ asset('assets/images/ts.jpg') }}" alt=""></a>
                  <div class="des">
                  <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
        </div>
        <div class="row">
           <div class="box">
                  <a href="/tshirt1"><img src="{{ asset('assets/images/tsh2.jpg') }}" alt=""></a>
                  <div class="des">
                  <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href="/tshirt1"><img src="{{ asset('assets/images/ts.jpg') }}" alt=""></a>
                  <div class="des">
                  <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href="/tshirt1"><img src="{{ asset('assets/images/tsh2.jpg') }}" alt=""></a>
                  <div class="des">
                  <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href="/tshirt1"><img src="{{ asset('assets/images/ts1.jpg') }}" alt=""></a>
                  <div class="des">
                  <a href="/tshirt1">T-shirt salam</a>
                     <p>1400DA</p>
                  </div>
            </div>
        </div>
        
</div>
</section>


@endsection
@section('scripts')
    @include('scripts.home_scripts')
@endsection

