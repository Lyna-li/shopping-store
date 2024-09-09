@extends('layout.app')

@section('style')
@endsection

@section('content')

    <section class="shopping-cart">
   
        
        <div class="shop-title">
            <h1>Panier</h1>
        </div>   
            
   
        <div class="shopping-list">
            <div class="line"></div>
            <div class="shop-box b1">
            </div>
            <div class="shop-info">
                <p>Abaya</p>
                <p>blue nuit</p>
                <span>s</span>
            </div>
            <div class="shop-price">
                <p>3000dz</p>

            </div>
            <div class="quantity">
                <i class='bx bxs-minus-circle' ></i>
                <P>1</P>
                <i class='bx bxs-plus-circle' ></i>
            </div>
            <div class="cancel"></div>
            <div class="line"></div>
            
            
            <div class="line"></div>
            <div class="shop-box b2">
            </div>
            <div class="shop-info">
                <p>t-shirt </p>
                <p>beige</p>
                <span>xl</span>
            </div>
            <div class="shop-price">
                <p>3000dz</p>
            </div>
            <div class="quantity">
                <i class='bx bxs-minus-circle' ></i>
                <P>1</P>
                <i class='bx bxs-plus-circle' ></i>
            </div>
            <div class="line"></div>
            
            
            <div class="line"></div>
            <div class="shop-box b3">
            </div>
            <div class="shop-info">
                <p>Abaya</p>
                <p>noir</p>
                <span>s</span>
            </div>
            <div class="shop-price">
                <p>3000dz</p>
            </div>
            <div class="quantity">
                <i class='bx bxs-minus-circle' ></i>
                <P>1</P>
                <i class='bx bxs-plus-circle' ></i>
            </div>
            <div class="line"></div>
            
            
            
            <div class="line"></div>
            <div class="shop-box b4">
            </div>
            <div class="shop-info">
                <p>t-shirt</p>
                <p>vert</p>
                <span>s</span>
            </div>
            <div class="shop-price">
                <p>3000dz</p>

            </div>
            <div class="quantity">
                <i class='bx bxs-minus-circle' ></i>
                <p>1</p>
                <i class='bx bxs-plus-circle' ></i>
            </div>
            <div class="line"></div>
            
            
            <div class="line"></div>
            <div class="shop-box b5">
            </div>
            <div class="shop-info">
                <p>Hijab</p>
                <p>marron</p>
                <span>L</span>
            </div>
            <div class="shop-price">
                <p>3000dz</p>
            </div>
            <div class="quantity">
                <i class='bx bxs-minus-circle'></i>
                <p>1</p>
                <i class='bx bxs-plus-circle'  ></i>
            </div>
            <div class="line"></div>
        </div>
        
        
        <div class="shopping-btn">
            <button class="close exit"><a href="#">Fermer</a></button>
            <button class="close pay"><a href="/payment">Paiment</a></button>


        </div>
  </section>
@endsection

@section('scripts')
    @include('scripts.home_scripts')
@endsection
