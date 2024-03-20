<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: linear-gradient(to right, #3498db, #2c3e50);
    }

    form {
        background-color: #fff;
        padding: 50px;
        display: flex;
        justify-content: space-between;
    }

    input {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 5px;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: linear-gradient(to right, #3498db, #2c3e50);
    }

    form {
        background-color: #fff;
        padding: 50px;
        display: flex;
        justify-content: space-between;
    }

    input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 5px;
    }

    .button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .button:hover {
        background-color: #2980b9;
    }
</style>

</head>

<body>

    <form action="{{route('order.store')}}" method="post">
        @csrf
        <input type="text" name="telephone">
        @error('telephone')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="text" name="pip">
        @error('pip')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="text" name="email">
        @error('email')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="integer" name="tour_id">
        @error('tour_id')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="text" name="count_day">
        @error('count_day')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="text" name="price">
        @error('price')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="submit" name="createbtn" value="Create">
    </form>

</body>
</html>