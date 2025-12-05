<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Transaction Item</title>
</head>
<body>
    <h3>Add new Transaction Item</h3>
    <form action="{{ url('/transaction_item/create') }}" method="post">
        @csrf
        Quantity
        <input type="number" name="quantity" id="">
        <br>
        Unit Price
        <input type="decimal" name="unit_price" id="">
        <br>
        Subtotal
        <input type="Decimal" name="subtotal" id="">
        <br>
        Transaction ID
        <input type="text" name="transaction_id" id="">
        <br>
        Product ID
        <input type="text" name="product_id" id="">
        <br>
        <button type="submit">Add new Transaction Item</button>
        <br>
    </form>
    <a href="{{ url('/transaction_item') }}">Go Back</a>
</body>
</html>