<form  action="/backoffice/update/{{$product->id}}" method="post">

    @method('put')
    {{ csrf_field() }}

    <div class="form-group">
        <label for="">image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="image" value="{{$product->image}}">
    </div>
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="price"value="{{$product->price}}">
    </div>
    <div class="form-group">
        <label for="quantity">quantity</label>
        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity"value="{{$product->quantity}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

