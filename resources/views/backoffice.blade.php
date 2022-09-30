@extends('layouts.test')
@section('ecommerce')
    Liste de produit
@endsection
@section('content')




    <h1 style="text-align: center ">  Liste des produits </h1>
    <a class="btn btn-primary" href="/backoffice/create" role="button">Create</a>
    <div class="container d-flex flex-row flex-wrap gap-5 mt-5 ">
        @foreach($produits as $produits)

            <div class=" ">
                <img src="{{$produits->image}}" alt="">
                <h3> Nom du produit : {{$produits->name}}</h3>
                <h3> Prix {{$produits->price}} € </h3>
                <h3> Quantité : {{$produits->quantity}}  </h3>
                <a class="btn btn-primary" href="/backoffice/edit/{{$produits->id}}" role="button">Edit</a>
                <form action="backoffice/{{ $produits->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>

        @endforeach
    </div>

@endsection
