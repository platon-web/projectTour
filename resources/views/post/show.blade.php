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
   justify-content:center;
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
        <a  href="{{ route('post.index') }}">Back</a>
<h1>{{$post->name}}</h1>
			
<p>Post: {{$post->id}}</p>
<p>Post name: {{$post->name}}</p>
<p>Post description: {{$post->description}}</p>
<p>Post create: {{$post->created_at}}</p>
<p>Post update: {{$post->updated_at}}</p>
</div>
</body>
</html>