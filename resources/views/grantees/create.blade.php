<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Grantee</title>
</head>
<body>
    <h1>Create New Grantee</h1>
    <form action="{{ route('grantees.store') }}" method="POST">
        @csrf
        <label for="grantee_name">Name:</label><br>
        <input type="text" id="grantee_name" name="grantee_name"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="contact">Contact:</label><br>
        <input type="text" id="contact" name="contact"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
