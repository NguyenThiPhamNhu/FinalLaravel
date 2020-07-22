<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Login</title>
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

    <form action="/admin/store" method="POST"  enctype="multipart/form-data">
      @csrf
     
          <div class="form-group">
              <label  >Name</label>
              <input type="text" class="form-control" name="typer" placeholder="Entry product type">
          </div>
          <div class="form-group">
              <label  >Password</label>
              <input type="text" class="form-control" name="typer" placeholder="Entry product type">
          </div>

          
          <button type="submit" class="btn btn-danger">Add</button>
      </form>
      
   
  </div>

</div>
    </div>
    </div>
    
</body>
</html>