<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Insert product</title>
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
  <h1>Thêm sản phẩm</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
    <form action="/hotels" method="POST"  enctype="multipart/form-data">
      @csrf
          
          <div class="form-group">
              <label  >Name</label>
              <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{old ('name')}}">
          </div>
      
          <div class="form-group">
               <label for="inputAddress">Image</label>
               <input type="file" class="form-control"
                  id="image" name="image">
            </div>

          <div class="form-group">
              <label  >Typeroom:</label>
              <input type="text" class="form-control" name="typeroom" placeholder="Nhập Loại phòng">
          </div>

          <div class="form-group">
            <label  >Number:</label>
            <input type="number" class="form-control" name="number" placeholder="Nhập Số lượng">
        </div>

        <div class="form-group">
            <label >Area:</label>
            <input type="text" class="form-control" name="area" placeholder="Nhập vùng">
        </div>

        <div class="form-group">
            <label >Price:</label>
            <input type="number" class="form-control" name="price" placeholder="Nhập giá">
        </div>
        
      
          <button type="submit" class="btn btn-danger">Thêm</button>
      </form>
      
   
  </div>

</div>
    </div>
    </div>
    
</body>
</html>