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
        p {
            color: #1F7872;
        }
        input {
            background-color: #e1e1e3;
        }
        input:last-of-type {
            background-color: #1F7872;
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