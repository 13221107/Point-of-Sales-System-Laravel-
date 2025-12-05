<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Receipt</title>
</head>
<body>
    Are you sure you want to delete receipt No.<b>{{ $receipt_entry[0]->id }}</b>?
    <a href="{{ url('/receipt/'.$receipt_entry[0]->id.'/destroy') }}">Yes</a>
    <a href="{{ url('/receipt') }}">No</a>
</body>
</html>