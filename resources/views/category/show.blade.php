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
    margin: 0;
    padding: 0;
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
   		<a class="left" href="{{ route('category.index') }}">Back</a>
<h1> Category</h1>
<p>Category id: {{$category->id}}</p>
<p>	Category name: {{$category->name}}</p>
<p>Category create: {{$category->created_at}}</p>
<p>Category update: {{$category->updated_at}}</p>
</div>

</body>
</html>