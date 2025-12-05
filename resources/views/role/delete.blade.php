<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Role</title>
</head>
<body>
     Are you sure you want to delete this role " <b>{{ $role_entry[0]->role_name }}</b>"?
     <br>
    <a href="{{ url('/role/'.$role_entry[0]->id.'/destroy')}}">Yes</a>
    <a href="{{ url('/role') }}">No</a>
</body>
</html>