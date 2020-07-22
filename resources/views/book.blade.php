<head>
  <title>Bootstrap Example</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<center>
    <table style="border: 2;" class="table">
    <thead>
      <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>DELETE</th>
                <th>EDIT</th>
                <th>ADD</th>
      </tr>
      @foreach($books as $book)
    </thead>
    <tbody>
        
      <tr class="danger">
               <td>{{$book -> title}}</td>
                <td>{{$book -> author}}</td>
                <td>{{$book -> quantity}}</td>
                <td>{{$book -> price}}</td>
                <td>
                <form action="{{'/books/'.$book->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
                <td>
                <a href="{{'/books/'.$book->id.'/edit'}}">Edit</a>
                </td>
                <td>
                <a href="{{'/books/create/'}}">Add</a>
                </td>
            </tr>
            @endforeach
      </tr>
    </tbody>
  </table>
</center>
</div>
</body>
