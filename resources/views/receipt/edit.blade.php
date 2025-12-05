<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Receipt</title>
</head>
<body>
    <h3>Edit Receipt</h3>
    <form action="{{ url('/receipt/'.$receipt_entry[0]->id.'/update') }}" method="post">
        @csrf
        Date
        <input type="date" name="date" id="" value="{{ $receipt_entry[0]->date }}">
        <br>
        Printed By(user_id)
        <input type="text" name="printed_by_user_id" id="" value="{{ $receipt_entry[0]->printed_by_user_id }}">
        <br>
        <br>
        <button type="submit">Update receipt</button>
        <br>
        <a href="{{ url('/receipt') }}">Go Back</a>
    </form>
</body>
</html>