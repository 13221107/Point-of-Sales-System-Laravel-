<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
</head>
<body>
    <h3>Edit Product</h3> 
    <form action="{{ url('/product/'.$product_entry[0]->id.'/update') }}" method="post">
        @csrf
        Product Name
        <input type="text" name="product_name" id="" value="{{ $product_entry[0]->product_name }}">
        <br>
        Price
        <input type="number" name="price" id="" value="{{ $product_entry[0]->price }}">
        <br>
        Description
        <input type="text" name="description" id="" value="{{ $product_entry[0]->description }}">
        <br>
        Stocklevel
        <input type="number" name="stocklevel" id="" value="{{ $product_entry[0]->stocklevel }}">
        <br>
        <button type="submit">Edit Product</button>
    </form>
    <br>
    <a href="{{url('/product')}}">Go Back</a> 
</body>
</html>