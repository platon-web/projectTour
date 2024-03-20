<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Tour</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }
        a {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px;
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            border-radius: 5px;
           
        }
    </style>
</head>

<body>
    <a class="left" href="{{ route('tour.show') }}">Back</a>
    <h1>Show Tour</h1>
    <table>
        <thead>
            <tr>
                <th colspan="2">Header for the Whole Table</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <p>Name: {{ $tour->name }}</p></td>
                <td> <p>Description: {{ $tour->description }}</p></td>
            </tr>
            <tr>
                <td> <p>Price: ${{ $tour->price }}</p></td>
                <td> <p>Days: {{ $tour->days }} days</p></td>
            </tr>
        </tbody>
    </table>
    <p><img src="{{ $tour->image }}" alt="{{ $tour->name }}"></p>
</body>

</html>
