<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Edit Transaction Item</h3>
    <form action="{{ url('/transaction_item/'.$transaction_item_entry[0]->id.'/update') }}" method="post">
        @csrf
        Quantity
        <input type="number" name="quantity" id="" value="{{ $transaction_item_entry[0]->quantity }}">
        <br>
        Unit Price
        <input type="decimal" name="unit_price" id="" value="{{ $transaction_item_entry[0]->unit_price }}">
        <br>
        Subtotal
        <input type="Decimal" name="subtotal" id="" value="{{ $transaction_item_entry[0]->subtotal }}">
        <br>
        Transaction ID
        <input type="text" name="transaction_id" id="" value="{{ $transaction_item_entry[0]->transaction_id }}">
        <br>
        Product ID
        <input type="text" name="product_id" id="" value="{{ $transaction_item_entry[0]->product_id }}">
        <br>
        <button type="submit">Update Transaction Item</button>
        <br>
    </form>
    <a href="{{ url('/transaction_item') }}">Go Back</a>
</body>
</html>