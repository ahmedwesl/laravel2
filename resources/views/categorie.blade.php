<h1> Mes categories </h1>
<div class="container d-flex flex-row flex-wrap gap-5 mt-5 ">
    @foreach($categories as $categorie)
        <h1>{{$categorie->name}}</h1>
        @foreach($categorie->product as $product)
            <div class="wrapper ">
                <div class="product-img">
                    <img src="{{$product->image}}" height="566" width="327">
                </div>
                <div class="product-info">
                    <div class="product-text">
                        <h2>{{$product->name}}</h2>
                        <p>{{$product->quantity}}</p>
                    </div>
                    <div class="product-price-btn">
                        <p>{{number_format($product->price,2,",",".") . '€'}}</p>
                    </div>
                </div>
            </div>
@endforeach
@endforeach
