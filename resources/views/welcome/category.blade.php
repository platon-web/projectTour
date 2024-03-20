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
        a {
            color: #1F7872;
        }
        input {
            background-color: #D13F31;
        }
        table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      background-color: #969595;
    }

    th, td {
      padding: 15px; 
      text-align: left;
      border-bottom: 1px solid #f3eeee;
    }

    th {
      background-color: #969595;
    }

    tr:hover {
      background-color: #b4eea5;
    }

    .styled-button {
      display: flex;
      justify-content: center;
      padding: 15px 30px;
      font-size: 16px;
      border-radius: 20px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      background-color: #000;
      color: #fff;
      border: none;
      margin:10px;
      overflow: hidden;
      position: relative;
    }

 
 
    .styled-button::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background-color: #fff;
      transition: left 0.3s ease;
    }

    .styled-button:hover::before {
      left: 0;
    }
    
    </style>
</head>
<body>

<a href="{{route('category.create')}}" class="styled-button" >create category </a>

  

<table>
    <thead>
        <th>Category</th>
        <th>Category name</th>
        <th>Category create</th>
        <th>Category update</th>
    </thead>

    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td><a href="{{route('category.show', $category->id)}}" class="styled-button">Show</a></td>
                <td><a href="{{route('category.edit', $category->id)}}" class="styled-button">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
    
</body>
</html>