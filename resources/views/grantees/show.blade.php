<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Grantee</title>
</head>
<body>
    <h1>Grantee Details</h1>
    <p><strong>Name:</strong> {{ $grantee->grantee_name }}</p>
    <p><strong>Address:</strong> {{ $grantee->address }}</p>
    <p><strong>Contact:</strong> {{ $grantee->contact }}</p>
    <a href="{{ route('grantees.index') }}">Back to List</a>
</body>
</html>
