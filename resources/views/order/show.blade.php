<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            color: #e1e1e3;
            background-color: #1a202c;
        }
    </style>
</head>
<body>
    
    <h1>{{$order->telephone}}</h1>
    <p>{{$order->pip}}</p>
    <p>{{$order->email}}</p>
    <p>{{$order->tour_id}}</p>
    <p>{{$order->count_day}}</p>
    <p>{{$order->price}}</p>
</body>
</html>