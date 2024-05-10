<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Grantee</title>
</head>
<body>
    <h1>Edit Grantee</h1>
    <form action="{{ route('grantees.update', $grantee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="grantee_name">Name:</label><br>
        <input type="text" id="grantee_name" name="grantee_name" value="{{ $grantee->grantee_name }}"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="{{ $grantee->address }}"><br>
        <label for="contact">Contact:</label><br>
        <input type="text" id="contact" name="contact" value="{{ $grantee->contact }}"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
