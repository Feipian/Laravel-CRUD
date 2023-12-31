<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>
    <form method="post" action="{{ route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="set name" value="{{$product ->name }}">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="set qty" value="{{$product -> qty }}">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="set price" value="{{$product -> price }}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="set description" value="{{$product ->description }}">
        </div>

        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>