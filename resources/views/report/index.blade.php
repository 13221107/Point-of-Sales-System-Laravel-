<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Dashboard</title>
</head>
<body>
    @if (empty($report_list))
        There are no data in Report Table
    @else
        <table>
            <thead>
                <th>Period Start</th>
                <th>Period End</th>
                <th>Generated At</th>
                <th>Report Type</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($report_list as $reports)
                    <tr>
                        <td>{{ $reports->period_start }}</td>
                        <td>{{ $reports->period_end }}</td>
                        <td>{{ $reports->generated_by_user_id }}</td>
                        <td>{{ $reports->report_type }}</td>
                        <td>
                            <a href="{{ url('/report/'.$reports->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/report/'.$reports->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{  url('/report/add') }}">Add New Report</a>
</body>
</html>