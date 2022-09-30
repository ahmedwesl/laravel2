@extends('layouts.test')
@section('ecommerce')
    Fiche produit
@endsection
@section('content')


{{--    <div   class="container">--}}
{{--        <div class="row">--}}
{{--            <div class ="col-md-12"--}}
{{--            <h1> Fiche de produits </h1>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <h1>Fiche du produit {{$produit}}</h1>--}}


<img src="{{$produit->image}}" alt="">
<h1> Nom du produit  {{$produit->name}}</h1>
<h1>  Prix {{$produit->price}} € </h1>
<h1>  Quantité {{$produit->quantity}}  </h1>
</div>
</div>

@endsection


