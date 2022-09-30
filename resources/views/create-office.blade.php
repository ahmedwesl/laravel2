@extends('layouts.test')
@section('ecommerce')
    Liste de produit
@endsection


<form method="post" action="/backoffice">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="">image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="image">
    </div>
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="price">
    </div>
    <div class="form-group">
        <label for="quantity">quantity</label>
        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


{{--        <label for="exampleFormControlInput1">Image</label>--}}
{{--        <input type="text" class="form-control" name="image" >--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <label for="exampleFormControlTextarea1">Name</label>--}}
{{--        <textarea class="form-control" name="name"  rows="3"></textarea>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="exampleFormControlTextarea1">Price</label>--}}
{{--        <textarea class="form-control" name="price"  rows="3"></textarea>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="exampleFormControlTextarea1">Quantity</label>--}}
{{--        <textarea class="form-control" name="quantity"  rows="3"></textarea>--}}
{{--    </div>--}}
{{--    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--</form>--}}
