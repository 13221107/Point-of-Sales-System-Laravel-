<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Report</title>
</head>
<body>
    Are you sure you want to delete report No.<b>{{ $report_entry[0]->id }}</b>?
    <a href="{{ url('/report/'.$report_entry[0]->id.'/destroy') }}">Yes</a>
    <a href="{{ url('/report') }}">No</a>
</body>
</html>