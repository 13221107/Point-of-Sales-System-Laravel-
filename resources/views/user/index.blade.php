<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    @if (empty($user_list))
        There are no data in user table
    @else
        <table>
            <thead>
                <th>Username</th>
                <th>Email</th>             
                <th>Role ID</th>
                <th>Action</th>           
            </thead>
            <tbody>
                @foreach ($user_list as $users)
                    <tr>
                        <td>{{ $users->username }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->role_id }}</td>
                        <td>
                             <a href="{{ url('/user/'.$users->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/user/'.$users->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ url('/user/add') }}">Add New User</a>
</body>
</html>