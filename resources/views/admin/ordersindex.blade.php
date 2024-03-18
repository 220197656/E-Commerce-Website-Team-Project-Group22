<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
</head>
<body>
    <h1>All Orders</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Client ID</th>
                <th>Client Name</th>
                <th>Total Amount</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->orderID }}</td>
                    <td>{{ $order->client->clientID }} </td>
                    <td>{{ $order->client->username ?? 'N/A' }}</td> 
                    <td>${{ number_format($order->totalAmount, 2) }}</td>
                    <td>{{ $order->orderDate ? $order->orderDate->format('Y-m-d') : 'Date not set' }}</td>
                    <td>{{ $order->status ?? 'Pending' }}</td> <!-- Placeholder for status -->
                    <td>
                        <!-- Example action: View details -->
                        <!-- <a href="{{ route('admin.orders.show', $order->orderID) }}">View Details</a> -->
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
