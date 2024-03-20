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
      color:white;
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

<a href="{{route('tour.create')}}" class="styled-button">create tour </a>

<table>
    <thead>
        <th>Tour</th>
        <th>Tour img</th>
        <th>Tour Name</th>
        <th>Tour tour_id</th>
        <th>Tour count_day</th>
        <th>Tour Price</th>
    </thead>

    <tbody>
        @foreach ($tours as $tour)
            <tr>
                <td>{{$tour->id}}</td>
                <td>{{$tour->img}}</td>
                <td>{{$tour->name}}</td>
                <td>{{$tour->tour_id}}</td>
                <td>{{$tour->count_day}}</td>
                <td>{{$tour->price}}</td>
                <td><a href="{{route('tour.show', $tour->id)}}" class="styled-button">Show</a></td>
                <td><a href="{{route('tour.edit', $tour->id)}}" class="styled-button">Edit</a></td>
                <td>
                    <form action="{{route('tour.destroy', $tour->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="deletebtn" value="Delete">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    
</body>
</html>