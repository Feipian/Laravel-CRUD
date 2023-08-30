<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>
    <form method="post" action="{{ route('product.store')}}">
        @csrf
        @method('post')
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
            <input type="text" name="name" placeholder="set name">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="set qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="set price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="set description">
        </div>

        <div>
            <input type="submit" value="save a new Product">
        </div>
    </form>
</body>
</html>