<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H3>Edit Transaction</H3>
    <form action="{{ url('transaction/'.$transaction_entry[0]->id.'/update') }}" method="post">
        @csrf
        Date
        <input type="date" name="transaction_date" id="" value="{{ $transaction_entry[0]->transaction_date }}">
        <br>    
        Total Amount
        <input type="decimal" name="total_amount" id="" value="{{ $transaction_entry[0]->total_amount }}">
        <br>
        Status
        <input type="text" name="status" id=""  value="{{ $transaction_entry[0]->status }}">
        <br>
        User ID
        <input type="text" name="user_id" id="" value="{{ $transaction_entry[0]->user_id }}">
        <br>
        Receipt ID
        <input type="text" name="receipt_id" id="" value="{{ $transaction_entry[0]->receipt_id }}">
        <br>
        <button type="submit">Update Transaction</button>
    </form>
    <a href="{{ url('/transaction') }}">Go Back</a>
</body>
</html>