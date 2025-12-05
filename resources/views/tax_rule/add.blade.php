<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tax Rule</title>
</head>
<body>
    <h3>Add New Tax Rule</h3>
    <form action="{{ url('/tax_rule/create') }}" method="post">
        @csrf
        <label for="tax_name">Tax Name</label>
        <input type="text" name="tax_name" id="">
        <br>
        <label for="rate">Rate</label>
        <input type="text" name="rate" id="">
        <button type="submit">Add New Rule</button>
        <br>
    </form>
    <a href="{{ url('/tax_rule') }}">Go Back</a>
</body>
</html>