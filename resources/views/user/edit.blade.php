<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Users</title>
</head>
<body>
    <h3>Edit user</h3>
    <form action="{{ url('/user/'.$user_entry[0]->id.'/update') }}" method="post">
        @csrf
        Username
        <input type="text" name="username" id="" value="{{ $user_entry[0]->username }}">
        <br>
        Password
        <input type="password" name="password" id="" value="{{ $user_entry[0]->password }}">
        <br>
        Email
        <input type="email" name="email" id="" value="{{ $user_entry[0]->email }}">
        <br>
        Role ID 
        <input type="text" name="role_id" id="" value="{{ $user_entry[0]->role_id }}">
        <br>
        <button type="submit">Update User</button>
    </form>
    <a href="{{ url('/user') }}">Go Back</a>
</body>
</html>