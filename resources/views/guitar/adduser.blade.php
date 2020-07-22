<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Insert User</title>
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

    <form action="/admin/storeuser" method="POST"  enctype="multipart/form-data">
      @csrf
     
          
          <div class="form-group">
              <label  >User Name</label>
              <input type="text" class="form-control" name="name" placeholder="Entry user name" value="{{old ('name')}}">
          </div>

          <div class="form-group">
               <label for="inputAddress">Avatar</label>
               <input type="file" class="form-control"
                  id="myAddress" name="avatar">
            </div>
    

          <div class="form-group">
              <label  >Type</label>
              <input type="text" class="form-control" name="type" placeholder="Entry product type">
          </div>

          <div class="form-group">
              <label  >Password</label>
              <input type="text" class="form-control" name="password" placeholder="Entry password">
          </div>

          <div class="form-group">
            <label  >Phone:</label>
            <input type="text" class="form-control" name="phone" placeholder="Entry phone ">
        </div>

        <div class="form-group">
            <label >Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Entry old address">
        </div>

    
    
          <button type="submit" class="btn btn-danger">Add</button>
      </form>
      
   
  </div>

</div>
    </div>
    </div>
    
</body>
</html>