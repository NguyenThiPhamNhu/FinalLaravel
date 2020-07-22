<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
    
    <title>books</title>
    <style>
     table{
       width: 900px;
       height: 100px;
     }
     th{
       background-color: yellow;
     }
     td{
       background-color: #e1f0f5;
     }
     body{
       background-color: #fff5eb;
     }
    
    </style>
</head>
<body>

<center> <h1>WELCOME TO VIT GUITAR HOTEL</h1>
        <table border="1px;">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Typeroom</th>
                <th>Number</th>
                <th>Area</th>
                <th>Price</th>
               
            </tr>
            @foreach($hotels as $hotel)
            <tr>
                <td>{{$hotel -> id}}</td>
                <td>{{$hotel -> name}}</td>
                <td><img width="100px" height="100px" class="group list-group-image" src="{{'/storage/'.$hotel->image}}" alt="Card image cap"></td>
                <td>{{$hotel -> typeroom}}</td>
                <td>{{$hotel -> number}}</td>
                <td>{{$hotel -> area}}</td>
                <td>{{$hotel -> price}}</td>
                
                
            </tr>
            @endforeach
        </table>
    </center>




</body>
</html>