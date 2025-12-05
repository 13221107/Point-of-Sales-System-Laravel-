<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
    @if (empty($receipt_list))
        There are no data in the receipt table
    @else
        <table>
            <thead>
                <th>Date</th>
                <th>Printed By</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($receipt_list as $receipts)
                    <tr>
                        <td>{{ $receipts->date }}</td>
                        <td>{{ $receipts->printed_by_user_id }}</td>
                        <td>
                            <a href="{{ url('/receipt/'.$receipts->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/receipt/'.$receipts->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ url('/receipt/add') }}">Add New Receipt</a>
</body>
</html>
