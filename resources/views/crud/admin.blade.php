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
    
    <title>Guitar</title>
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

<center> <h1>WELCOME TO VIT PAGE</h1>
        <table border="1px;">
            <tr>
               <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Type</th>
                <th>Quantity</th>
                <th>Specifications</th>
                <th>Old Price</th>
                <th>New Price</th>
                <th>Made in</th>
                <th>Delete</th>
                <th>Add</th>
                <th>Edit</th>

               
            </tr>
            @foreach($students as $std)
            <tr>
                <td>{{$std -> id}}</td>
                <td>{{$std -> name}}</td>
               
                <td>{{$std -> class}}</td>
                <td>{{$std -> address}}</td>
                <td>{{$std -> dob}}</td>

                <td><form action="{{'/crud/admin/'.$std->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form></td>
                <td>
                    <form action="/crud/add" method="GET">
                    <button type="submit" class="btn btn-danger">Add</button>
                    </form>
                </td>
                <td>
                <a href="{{'/crud/admin/'.$std->id.'/edit'}}">Edit</a>
                </td>
                
                
                
            </tr>
            @endforeach
        </table>
    </center>




</body>
</html>