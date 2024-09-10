@extends('layout.app')
@section('style')
@endsection



@section('content')



<section class="hijab1 container">
    <div class="content">
         <div class="image">
             <img src="{{ asset('assets/images/ts.jpg') }}" alt="">
         </div>
         <div class="description">
             <div class="nom">
                <h2>T-shirt salam</h2>
             </div>
             <div class="prize">
                <p>1400DA</p>
             </div>
             <div class="avis">
             <a href="">
               <i class='bx bxs-star' style='color:rgba(0,0,0,0.42)'  ></i>
               <i class='bx bxs-star' style='color:rgba(0,0,0,0.42)'  ></i>
               <i class='bx bxs-star' style='color:rgba(0,0,0,0.42)'  ></i>
               <i class='bx bxs-star' style='color:rgba(0,0,0,0.42)'  ></i>
               <i class='bx bxs-star' style='color:rgba(0,0,0,0.42)'  ></i>
             </a>
             </div>
             <div class="color">
                 <div class="color-btm">
                     <span class="btm-text">choisir la couleur</span>
                     <i class="bx bx-chevron-down"></i>
                 </div>
                 <div class="options">
                     <div class="option">
                        <span class="color-type"  style='  background-color: rgba(100, 100, 223, 0.742)'></span>
                        <span class="color-text"> Blue</span>
                     </div>
                     <div class="option">
                        <span class="color-type" style='  background-color: #111'></span>
                        <span class="color-text"> Noire</span>
                     </div>
                     <div class="option">
                        <span class="color-type" style='  background-color:beige'></span>
                        <span class="color-text"> beige</span>
                     </div>
                     <div class="option">
                        <span class="color-type"  style='  background-color:pink'></span>
                        <span class="color-text"> Rose</span>
                    </div>
                </div>
            </div>
            <!-- taille section -->
            <div class="taille">
                <div class="taille-btm">
                     <span class="btm-text">choisir la taille</span>
                     <i class="bx bx-chevron-down"></i>
                </div>
                <div class="options">
                    <div class="option">
                        <span class="taille-text"> S</span>
                    </div>
                    <div class="option">
                        <span class="taille-text"> M</span>
                    </div>
                    <div class="option">
                        <span class="taille-text">L</span>
                    </div>
                    <div class="option">
                        <span class="taille-text"> XL</span>
                    </div>
                    <div class="option">
                        <span class="taille-text"> XXL</span>
                    </div>
                </div>
            </div>
            <div class="des">
                <p>
                Pour un joli rendu digne d’une princesse, optez pour cette abaya 😍 <br>
                  Tissu soie de medine <br>Très très légère
                    Longueur 1m45 épaule pieds <br>Taille unique du 34 au 46
                </p>
                <input type="number">
            </div>

          <div class="buy">
            <button>achter</button>
          </div>
        </div>
    </div>


</section>






@endsection



@section('scripts')
    @include('scripts.home_scripts')
@endsection