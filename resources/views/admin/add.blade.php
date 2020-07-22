
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Insert Photo</title>
    <style>
        body{
            background-color: #ffcccc;
        }
    </style>
</head>
<body>
  <div class="container-fluid"  style=" position: relative">
    
    <div class="container">
    <div id="viewport" >
  <!-- Content -->
  <div id="content" >
  <h1>Thêm Photo</h1>

   
    <form action="/admin/add" method="POST"  enctype="multipart/form-data">
      @csrf
          
          <div class="form-group">
              <label  >Photo Description</label>
              <input type="text" class="form-control" name="name" placeholder="Entry photo description" value="{{old ('photo_desription')}}">
          </div>
      
          <div class="form-group">
          <form action="/categories">
                <label >Choose a category:</label>
                <select name="categories" id="categories">
                   
                @foreach($categories as $category)
           
                <option value="{{$category ->name}}">{{$category ->name}}</option>
                </select>
                @endforeach
                <br><br>

                </form>
            </div>

          <button type="submit" class="btn btn-danger">Insert</button>
      </form>
      
   
  </div>

</div>
    </div>
    </div>
    
</body>
</html>