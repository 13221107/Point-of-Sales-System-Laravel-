<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
    <h3>Add New Product</h3> 
    <form action="{{ url('/product/create') }}" method="post">
        @csrf
        Product Name
        <input type="text" name="product_name" id="">
        <br>
        Price
        <input type="number" name="price" id="">
        <br>
        Description
        <input type="text" name="description" id="">
        <br>
        Stocklevel
        <input type="number" name="stocklevel" id="">
        <br>
        <button type="submit">Add New Product</button>
    </form>
    <br>
    <a href="{{url('/product')}}">Go Back</a> 
</body>
</html>
