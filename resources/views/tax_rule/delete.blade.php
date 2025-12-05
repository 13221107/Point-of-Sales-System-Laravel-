<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Tax Rule</title>
</head>
<body>
      Are you sure you want to delete tax rule " <b>{{ $tax_rule_entry[0]->id }}</b>"?
    <a href="{{ url('/tax_rule/'.$tax_rule_entry[0]->id.'/destroy') }}">Yes</a>
    <a href="{{ url('/tax_rule') }}">No</a>
</body>
</html>