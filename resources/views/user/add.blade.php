<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <h3>Add New User</h3>
    <form action="{{ url('/user/create') }}" method="post">
        @csrf
        Username
        <input type="text" name="username" id="">
        <br>
        Password
        <input type="password" name="password" id="">
        <br>
        Email
        <input type="email" name="email" id="">
        <br>
        Role ID 
        <input type="text" name="role_id" id="">
        <br>
        <button type="submit">Add New User</button>
    </form>
    <a href="{{ url('/user') }}">Go Back</a>
</body>
</html>