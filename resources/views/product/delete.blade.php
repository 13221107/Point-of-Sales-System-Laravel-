<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
</head>
<body>
    Are you sure you want to delete product " <b>{{ $product_entry[0]->product_name }}</b>"?
    <a href="{{ url('/product/'.$product_entry[0]->id.'/destroy') }}">Yes</a>
    <a href="{{ url('/product') }}">No</a>
</body>
</html>