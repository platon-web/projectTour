<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.user-info {
    background-color: #fff;
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1{
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

p{
    font-size: 16px;
    color: #666;
    margin-bottom: 5px;
}
a {
          justify-content:space-between;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 10px;
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            border-radius: 50px;
        }
    </style>
</head>
<body>

			<div class="user-info">		
                <a class="left" href="{{ route('order.index') }}">Back</a>
    <h1>Order</h1>
    <p>Order telephone:{{$order->telephone}}</p>
    <p>Order pip: {{$order->pip}}</p>
    <p>Order email: {{$order->email}}</p>
    <p>Order tour_id: {{$order->tour_id}}</p>
    <p>Order count_day: {{$order->count_day}}</p>
    <p>Order price: {{$order->price}}</p>
</div>	
</body>
</html>