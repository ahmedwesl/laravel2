@extends('layouts.test')
@section('ecommerce')
    Liste de produit
@endsection
@section('content')

    <h1> Liste des produits </h1>
    <div class="container d-flex flex-row flex-wrap gap-5 mt-5 ">
        @foreach($produits as $produits)
            @if ($produits->available)
                <div class=" ">
                    <img src="{{$produits->image}}" alt="">
                    <h3> Nom du produit : {{$produits->name}}</h3>
                    <h3> Prix {{$produits->price}} € </h3>
                    <h3> Quantité : {{$produits->quantity}}  </h3>
                </div>
            @endif
                @endforeach

    </div>

@endsection

