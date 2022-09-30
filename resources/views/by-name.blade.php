@extends('layouts.test')
@section('ecommerce')
    Liste de produit
@endsection
@section('content')


    @foreach($produit as $produit)





        <img src="{{$produit->image}}" alt="">
        <h1> Nom du produit  {{$produit->name}}</h1>
        <h1>  Prix {{$produit->price}} € </h1>
        <h1>  Quantité {{$produit->quantity}}  </h1>
        </div>
        </div>
    @endforeach
