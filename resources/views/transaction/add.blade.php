<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Transaction</title>
</head>
<body>
    <H3>Add new Transaction</H3>
    <form action="{{ url('/transaction/create') }}" method="post">
        @csrf
        Date
        <input type="date" name="transaction_date" id="">
        <br>    
        Total Amount
        <input type="decimal" name="total_amount" id="">
        <br>
        Status
        <input type="text" name="status" id="">
        <br>
        User ID
        <input type="text" name="user_id" id="">
        <br>
        Receipt ID
        <input type="text" name="receipt_id" id="">
        <br>
        <button type="submit">Add new Transaction</button>
    </form>
    <a href="{{ url('/transaction') }}">Go Back</a>
</body>
</html>