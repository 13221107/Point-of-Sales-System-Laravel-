<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    Are you sure you want to delete user "<b>{{ $user_entry[0]->username }}</b>"?
    <a href="{{ url('/user/'.$user_entry[0]->id.'/destroy') }}">Yes</a>
    <a href="{{ url('/user') }}">No</a>
</body>
</html>