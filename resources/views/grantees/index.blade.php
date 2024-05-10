<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grantees List</title>
</head>
<body>
    <h1>Grantees List</h1>
    <a href="{{ route('grantees.create') }}">Create New Grantee</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grantees as $grantee)
            <tr>
                <td>{{ $grantee->grantee_name }}</td>
                <td>{{ $grantee->address }}</td>
                <td>{{ $grantee->contact }}</td>
                <td>
                    <a href="{{ route('grantees.show', $grantee->id) }}">View</a>
                    <a href="{{ route('grantees.edit', $grantee->id) }}">Edit</a>
                    <form action="{{ route('grantees.destroy', $grantee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
