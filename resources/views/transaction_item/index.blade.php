<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction Item Table</title>
</head>
<body>
    @if (empty($transaction_item_list))
        There are no data in Transaction Item Table
    @else
        <table>
            <thead>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Subtotal</th>
                <th>Transaction ID</th>
                <th>Product ID</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($transaction_item_list as $transaction_items)
                <tr>
                    <td>{{ $transaction_items->quantity }}</td>
                    <td>{{ $transaction_items->unit_price }}</td>
                    <td>{{ $transaction_items->subtotal }}</td>
                    <td>{{ $transaction_items->transaction_id }}</td>
                    <td>{{ $transaction_items->product_id }}</td>
                    <td>
                        <a href="{{ url('/transaction_item/'.$transaction_items->id.'/edit') }}">Edit</a>
                        <a href="{{ url('/transaction_item/'.$transaction_items->id.'/delete') }}">Delete</a>
                    </td>
                </tr>    
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ url('transaction_item/add') }}">Add New Transaction Item</a>
</body>
</html> 