@extends('layout.app')

@section('style')
@endsection

@section('content')

<section class="paiment">
    
    <div class="shop-title">
        <h1>Paiment</h1>
    </div> 
    <div class="pay-check">
        <div class="know-u">
        <h2>contact</h2>  
            
   
        <form action="" method="POST">
               
                @csrf 

                <div class="customer-info">
                    <div class="cust-fullname">
                        <div class="input-box" id="lname">
                            <input class="input1" type="text" name="nom" placeholder="nom" required>
                        </div> 
                        <div class="input-box" id="fname">
                            <input class="input1" type="text" name="prenom" placeholder="Prenom" required>
                        </div>
                    </div>
                    <div class="input-box">
                        <input class="input1" type="text" name="pays" placeholder="pays Agerie" required>
                    </div> 
                    <div class="input-box">
                        <input class="input1" type="text" name="wilaya" placeholder="wilaya" required>
                    </div>
                    <div class="input-box">
                        <input class="input1" type="text" name="commune" placeholder="commune" required>
                    </div>
                    <div class="input-box">
                        <input class="input1" type="text" name="adresse" placeholder="adresse" required>
                    </div>
                    <div class="input-box">
                        <input class="input1" type="text" name="telephone" placeholder="telephone" required>
                    </div> 
                    <div class="input-box">
                        <input class="input1" type="email" name="email" placeholder="Email">
                    </div>   
                </div>

                <h4>Livraison à</h4>
                <div class="ship-info">
                    <label>
                        <input class="input2" type="radio" name="livraison[]" value="domicile"> 
                        <span class="remember" id="domicile">domicile</span> 
                    </label>
                    <label>
                        <input class="input2" type="radio" name="livraison[]" value="bureau"> 
                        <span class="remember">bureau</span> 
                    </label>
                </div> 

                <h4>Method de paiment</h4>
                <div class="pay-info">
                    <label>
                        <input class="input2" type="radio" name="paiement[]" value="main_a_main"> 
                        <span class="remember" id="main">main à main</span> 
                    </label>
                    <label>
                        <input class="input2" id="ccp-checkbox" type="radio" name="paiement[]" value="ccp"> 
                        <span class="remember">ccp</span> 
                    </label>
                </div>

                <div class="ccp-info">
                    <div class="input-box" id="ccpaccount">
                        <input class="input1" type="text" name="ccp_account" placeholder="ccp-account">
                    </div> 
                    <div class="input-box" id="ccpacode">
                        <input class="input1" type="text" name="ccp_code" placeholder="code">
                    </div>
                </div>

                
                <button type="submit" class="camman-btn">Commander</button> 
                
            </form>

            <div class="your-order"></div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    @include('scripts.home_scripts')
@endsection