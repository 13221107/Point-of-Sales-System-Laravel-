<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Receipt</title>
</head>
<body>
    <h3>Add new receipt</h3>
    <form action="{{ url('/receipt/create') }}" method="post">
        @csrf
        Date
        <input type="date" name="date" id="">
        <br>
        Printed By(user_id)
        <input type="text" name="printed_by_user_id" id="">
        <br>
        <br>
        <button type="submit">Add new receipt</button>
        <br>
        <a href="{{ url('/receipt') }}">Go Back</a>
    </form>
</body>
</html>