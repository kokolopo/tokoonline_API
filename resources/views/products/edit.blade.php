<h1>edit product</h1>

<form action="/products/{{$product->id}}" method="POST">
    @method('PUT')
    @csrf
    Name : <input type="text" name="name" value="{{$product->name}}"><br>
    Description : <input type="text" name="description" value="{{$product->description}}"><br>
    Price : <input type="number" name="price" value="{{$product->price}}"><br>
    Stok : <input type="number" name="stok" value="{{$product->stok}}"><br>
    Image URL : <input type="text" name="image_url" value="{{$product->image_url}}"><br>

    <input type="submit" value="Save">
</form>