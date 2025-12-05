<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role table</title>
</head>
<body>
    @if (empty($role_list))
        There are no data in roles table
    @else
        <table>
            <thead>
                <th>Role Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($role_list as $roles)
                    <tr>
                        <td>{{ $roles->role_name }}</td>
                        <td>
                            <a href="{{ url('/role/'.$roles->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/role/'.$roles->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ url('/role/add') }}">Add New Role</a>
</body>
</html>