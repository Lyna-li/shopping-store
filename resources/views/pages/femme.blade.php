@extends('layout.app')
@section('style')
@endsection

@section('content')

<section class="femme container">
<div class="content-femme">
            <div class="title">
                <h1>Les Femmes</h1>
            </div>
        <div class="row">
            <div class="box">
                 <a href="/hijab1"><img src="{{ asset('assets/images/Hijab1.png') }}" alt=""></a>
                  <div class="des">
                     <a href="/hijab1">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href=""><img src="{{ asset('assets/images/Hijab2.png') }}" alt=""></a>
                  <div class="des">
                     <a href="http:">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href=""><img src="{{ asset('assets/images/Hijab3.png') }}" alt=""></a>
                  <div class="des">
                     <a href="http:">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href=""><img src="{{ asset('assets/images/Hijab1.png') }}" alt=""></a>
                  <div class="des">
                     <a href="http:">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
        </div>
        <div class="row">
           <div class="box">
                  <a href=""><img src="{{ asset('assets/images/Hijab3.png') }}" alt=""></a>
                  <div class="des">
                     <a href="http:">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href=""><img src="{{ asset('assets/images/Hijab1.png') }}" alt=""></a>
                  <div class="des">
                     <a href="http:">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href=""><img src="{{ asset('assets/images/Hijab2.png') }}" alt=""></a>
                  <div class="des">
                     <a href="http:">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
            <div class="box">
                 <a href=""><img src="{{ asset('assets/images/Hijab3.png') }}" alt=""></a>
                  <div class="des">
                     <a href="http:">abaya moderne</a>
                     <p>3400DA</p>
                  </div>
            </div>
        </div>
</div>
</section>


@endsection
@section('scripts')
    @include('scripts.home_scripts')
@endsection

