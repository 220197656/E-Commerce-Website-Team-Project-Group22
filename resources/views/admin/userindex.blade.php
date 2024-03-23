<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="/css/users.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

</head>
<body>
    <h1>User List</h1>
    <a href="/admin" class = "backbtn"><i class="fa-regular fa-arrow-left"></i></a>
    <table>
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Phone  Number</th>
                <th>Last Name</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->clientID }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phoneNumber }}</td>
                    <td>{{ $user->lastName }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
