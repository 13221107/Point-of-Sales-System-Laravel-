<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
</head>
<body>
     @if (empty($tax_rule_list))
        There are no data in Tax Rule table
    @else
        <table>
            <thead>
                <th>Tax Name</th>
                <th>Rate</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($tax_rule_list as $tax)
                    <tr>
                        <td>{{  $tax->tax_name }}</td>
                        <td>{{ $tax->rate }}</td>
                       
                        <td>
                            <a href="{{ url('/tax_rule/'.$tax->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/tax_rule/'.$tax->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <br>
    <a href="{{url('/tax_rule/add')}}">Add New Rule</a>
</body>
</html>