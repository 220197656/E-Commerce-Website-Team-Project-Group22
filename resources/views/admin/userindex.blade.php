<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <table border="1">
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>name</th>
                <!-- Add columns here-->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>

                    <!-- Add attributes here -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
