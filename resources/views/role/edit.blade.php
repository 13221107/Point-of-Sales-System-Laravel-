<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Role</title>
</head>
<body>
    <h3>Edit Role</h3>
    <form action="{{ url('/role/'.$role_entry[0]->id.'/update') }}" method="post">
        @csrf
        Role Name
        <input type="text" name="role_name" id="">
        <br>
        <button type="submit">Update Role</button>
        <br>
    </form>
    <a href="{{ url('/role') }}">Go Back</a>
</body>
</html>