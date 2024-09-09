@extends('layout.app')
@section('style')
@endsection

@section('content')
<!-- landing page -->
<section class="landing container ">
           <div class="item">
               <div class="img">
                   <img src="{{ asset('assets/images/land1 (1).png') }}">
               </div>
                <div class="introduce">
                    <div class="titre">Bienvenue à Bloom</div>
                    <div class="topic">Découvrez la mode algérienne chez Bloom</div>
                    <div class="des">
                    votre destination en ligne pour les vêtements.
                    </div>
                    <a href="#categorie"><button>Découvrez</button></a>
                    
                </div>
            </div>
        
</section>
<!-------------------------------------  end landing page ----------------------------------- -->

<!-- ----------------------------------- nouvaux prodect section ----------------------------------- -->
<section class="nv_prodect container">
    <div class="title">
    <h1>Nouvaux produit</h1>
    </div>
    <div class="content">
      
        
    <div class="image left">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAAAXNSR0IArs4c6QAAAf5JREFUeF7t2rEuw1EcxfEvT2D2El5CRIhgMNlsNqONzWgzSSQ8g8liMnsSsYkw6E0MSKr3DO3v3OR06HSS/7+fnnt72/6WyKNbYKk7mSDBEkoQrGAJAkI0zQqWICBE06xgCQJCNM0KliAgRNOsYAkCQjTNCpYgIETTrGAJAkI0zQqWICBEXZq1ArwK910SdcDaBe6ATeCpRKHzotVYh8AtsAy8AevOYJVYR8A1/PofoIFtAY+db/ZCY1VYx8DVlFf6/r0k7cCqsE6Ay39qYQlWhdWchgOrxGpgp8DFKA2rxhoKzAFrGDAXrAZ2Nnk6n7Ekd4CHhZ4XflzMCavdVtu/2j427fEBbFeBuWFZgzli2YK5YjWwdmhtZzGbJemMZQfmjmUFNgJWL9g+cD/PY8UoWM3gGVibcQ5bBV7mBTYK1qzN/nOCuZdm9X0qzn0Jtra6N2tWoxZ6onfGsvvq44plB+W6DC2hHLFsodyw8ntW5wFxiN/iHTb4IaAcluEwUNVYQ0FVYg33B2sl1n+zDrbDIZUb/LQpGtuxo0qs1uw2n9UG2dp9ZD6r45x1ANxMhtg2nAfZKvesv4aZKe1o1VCR6j0rWEMJCDebZgVLEBCiaVawBAEhmmYFSxAQomlWsAQBIZpmBUsQEKJpVrAEASGaZgVLEBCiaVawBAEh+gUc7mlMt+ZCrwAAAABJRU5ErkJggg=="/>
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/Hijab1.png') }}" alt="">
            <div class="des">
              <h2>Femme</h2>
              <p>hijab khadij</p>
              <p class="prize">340 DZ</p>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/ts1.jpg') }}" alt="">
            <div class="des">
              <h2>Homme</h2>
              <p>tshirt Salam</p>
              <p class="prize">340 DZ</p>
            </div>
        </div> <div class="box">
            <img src="{{ asset('assets/images/Hijab3.png') }}" alt="">
            <div class="des">
              <h2>Femme</h2>
              <p>hijab khadij</p>
              <p class="prize">340 DZ</p>

            </div>
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/ts.jpg') }}" alt="">
            <div class="des">
              <h2>Homme</h2>
              <p>tshirt Nassim</p>
              <p class="prize">450 DZ</p>
            </div>
        </div>
        <div class="image">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAAAXNSR0IArs4c6QAAAf5JREFUeF7t2rEuw1EcxfEvT2D2El5CRIhgMNlsNqONzWgzSSQ8g8liMnsSsYkw6E0MSKr3DO3v3OR06HSS/7+fnnt72/6WyKNbYKk7mSDBEkoQrGAJAkI0zQqWICBE06xgCQJCNM0KliAgRNOsYAkCQjTNCpYgIETTrGAJAkI0zQqWICBEXZq1ArwK910SdcDaBe6ATeCpRKHzotVYh8AtsAy8AevOYJVYR8A1/PofoIFtAY+db/ZCY1VYx8DVlFf6/r0k7cCqsE6Ay39qYQlWhdWchgOrxGpgp8DFKA2rxhoKzAFrGDAXrAZ2Nnk6n7Ekd4CHhZ4XflzMCavdVtu/2j427fEBbFeBuWFZgzli2YK5YjWwdmhtZzGbJemMZQfmjmUFNgJWL9g+cD/PY8UoWM3gGVibcQ5bBV7mBTYK1qzN/nOCuZdm9X0qzn0Jtra6N2tWoxZ6onfGsvvq44plB+W6DC2hHLFsodyw8ntW5wFxiN/iHTb4IaAcluEwUNVYQ0FVYg33B2sl1n+zDrbDIZUb/LQpGtuxo0qs1uw2n9UG2dp9ZD6r45x1ANxMhtg2nAfZKvesv4aZKe1o1VCR6j0rWEMJCDebZgVLEBCiaVawBAEhmmYFSxAQomlWsAQBIZpmBUsQEKJpVrAEASGaZgVLEBCiaVawBAEh+gUc7mlMt+ZCrwAAAABJRU5ErkJggg=="/>
        </div>
    </div>
</section>
<!-------------------------------------  end prodect section ----------------------------------- -->
<!-------------------------------------  start categories section-----------------------------------  -->
<section class="categorie container" id="categorie">
 <div class="title">
    <h1> Les categories</h1>
 </div>
    <div class="content">
        <!-- femmme  categories -->
       <div class="content-femme">
          <a href="/femme" class="titre">Femme</a>
        <div class="femme">
     
         <div class="box">
            <img src="{{ asset('assets/images/Hijab1.png') }}" alt="">
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/Hijab2.png') }}" alt="">
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/Hijab3.png') }}" alt="">
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/Hijab1.png') }}" alt="">
        </div>
        </div>
        </div>
             <!-- Homme  categories -->
             <div class="content-homme">
             <a href="/homme" class="titre">Homme</a>
        <div class="homme">
     
         <div class="box">
            <img src="{{ asset('assets/images/ts.jpg') }}" alt="">
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/ts1.jpg') }}" alt="">
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/tsh2.jpg') }}" alt="">
        </div>
        <div class="box">
            <img src="{{ asset('assets/images/ts.jpg') }}" alt="">
        </div>
        </div>
        </div>
    </div>

</section>
<!-------------------------------------  end categories section ----------------------------------- -->

@endsection

@section('scripts')
    @include('scripts.home_scripts')
@endsection

