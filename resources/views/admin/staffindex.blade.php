<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff List</title>
    <link rel="stylesheet" href="/css/users.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
</head>
<body>
    <h1>Staff Members</h1>
    <a href="/admin" class = "backbtn"><i class="fa-regular fa-arrow-left"></i></a>

    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level of Admin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->user->id }}</td>
                <td>{{ $admin->user->name }}</td> <!-- Assuming the 'name' field exists in your users table -->
                <td>{{ $admin->user->email }}</td>
                <td>{{ $admin->adminLevel }}</td> <!-- Assuming 'levelOfAdmin' is the correct field name -->
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
