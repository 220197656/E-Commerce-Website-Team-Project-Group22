{{-- resources/views/admin/staffindex.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff List</title>
</head>
<body>
    <h1>Staff Members</h1>
    <table border= '1' >
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Level of Admin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $admin)
                <tr>
                    <td>{{ $admin->adminID }}</td>
                    <td>{{ $admin->username }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->phoneNumber }}</td>
                    <td>{{ $admin->levelOfAdmin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
