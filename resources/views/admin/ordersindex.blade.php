<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <link rel="stylesheet" href="/css/ordersadmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

</head>
<body>
    <h1>All Orders</h1>
    <a href="/admin" class = "backbtn"><i class="fa-regular fa-arrow-left"></i></a>
    <table  cellspacing="0">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>users ID</th>
                <th>Users Name</th>
                <th>Total Amount</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td class= "first-el"><a href="/admin">{{ $order->orderID }}</a></td>
                    <td><a href="/admin">{{ $order->user->id }} </a></td>
                    <td><a href="/admin">{{ $order->user->name ?? 'N/A' }}</a></td> 
                    <td> <a href="/admin">${{ number_format($order->totalAmount, 2) }}</a></td>
                    <td><a href="/admin">{{ $order->orderDate ? $order->orderDate->format('Y-m-d') : 'Date not set' }}</a></td>
                    <td><a href="/admin">{{ $order->status ?? 'Pending' }}</a></td> <!-- Placeholder for status -->
                    <td class = "last-el">
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
