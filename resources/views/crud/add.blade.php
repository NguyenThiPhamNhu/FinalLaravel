<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Insert Student</title>
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
  <h1>Add</h1>

<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    -->
    <form action="/crud/admin" method="GET"  enctype="multipart/form-data">
      @csrf
     
          
          <div class="form-group">
              <label  >Name</label>
              <input type="text" class="form-control" name="name" placeholder="Nhập tên mài" value="{{old ('name')}}">
          </div>
    

          <div class="form-group">
              <label  >Class:</label>
              <input type="text" class="form-control" name="class" placeholder="Nhập Lớp mài">
          </div>

          <div class="form-group">
            <label  >Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Mi chỗ mô">
        </div>

        <div class="form-group">
            <label >Dob:</label>
            <input type="text" class="form-control" name="dob" placeholder="MÁ Mi đẻ mi khi mô">
        </div>

    
          <button type="submit" class="btn btn-danger">Add</button>
      </form>
      
   
  </div>

</div>
    </div>
    </div>
    
</body>
</html>