@extends('layouts.test')
@section('ecommerce')
    Fiche produit
@endsection
@section('content')

    <img src="{{$produit->image}}" alt="">
    <h1> Nom du produit {{$produit->name}}</h1>
    <h1> Prix {{$produit->price}} € </h1>

    </div>
    </div>

@endsection


