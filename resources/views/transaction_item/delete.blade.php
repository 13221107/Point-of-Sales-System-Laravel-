<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Transaction Item</title>
</head>
<body>
    Are you sure you want to delete Transaction Item " <b>{{ $transaction_item_entry[0]->id }}</b>"?
    <a href="{{ url('/transaction_item/'.$transaction_item_entry[0]->id.'/destroy') }}">Yes</a>
    <a href="{{ url('/transaction_item') }}">No</a>
</body>
</html>