<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Roles</title>
</head>
<body>
    <h3>Add New Role</h3>
    <form action="{{ url('/role/create') }}" method="post">
        @csrf
        Role Name
        <input type="text" name="role_name" id="">
        <br>
        <button type="submit">Add New Role</button>
        <br>
    </form>
    <a href="{{ url('/role') }}">Go Back</a>
</body>
</html>