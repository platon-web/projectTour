<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="{{route('post.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$post->name}}">
    @error('name')
    <p style="color:red">{{$message}}</p>
    @enderror

    <input type="submit" name="editbtn" value="Create">  
</form>

</body>
</html>