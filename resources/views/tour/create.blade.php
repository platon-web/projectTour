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

    input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 5px;
    }

    input[type="file"] {
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
    

<form action="{{route('tour.store')}}" method="POST" enctype="multipart/form-data">
 
    @csrf

    <input type="text" name="name" placeholder="Введіть назву туру">
    <input type="text" name="price" placeholder="Введіть ціну">
    <input type="text" name="count_day" placeholder="Введіть кількість днів">
    <input type="text" name="short_description" placeholder="Введіть короткий опис">
    <input type="text" name="description" placeholder="Введіть опис">
    <input type="file" name="image"  accept=".jpg, .jpeg, .png">
    @error('name')
    <p style="color:red">{{$message}}</p>
    @enderror

    <input class="button" type="submit" name="creatbtn" value="Create" >  
    
</form>

</body>
</html>