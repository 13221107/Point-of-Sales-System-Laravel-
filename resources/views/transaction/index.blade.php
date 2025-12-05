<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction</title>
</head>
<body>
    @if (empty($transaction_list))
        There are no data in the transaction table
    @else
        <table>
                <thead>
                    <th>Transaction Date</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>User ID</th>
                    <th>Receipt ID</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ( $transaction_list as $transactions)
                        <tr>
                            <td>{{ $transactions->transaction_date }}</td>
                            <td>{{ $transactions->total_amount }}</td>
                            <td>{{ $transactions->status }}</td>
                            <td>{{  $transactions->user_id }}</td>
                            <td>{{ $transactions->receipt_id }}</td>
                            <td>
                                <a href="{{ url('transaction/'.$transactions->id.'/edit') }}">Edit</a>
                                <a href="{{ url('transaction/'.$transactions->id.'/delete') }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    @endif
    <br>
    <a href="{{ url('/transaction/add') }}">Add new Transaction</a>
</body>
</html>