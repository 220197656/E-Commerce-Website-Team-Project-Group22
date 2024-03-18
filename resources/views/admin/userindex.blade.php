<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Optional: Include your CSS file here -->
</head>
<body>
    <h1>User List</h1>
    <table border="1">
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>phoneNumber</th>
                <th>Last Name</th>
                <!-- Add columns here-->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->clientID }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phoneNumber }}</td>
                    <td>{{ $user->lastName }}</td>

                    <!-- Add attributes here -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
