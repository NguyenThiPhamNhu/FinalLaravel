<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Insert Product</title>
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
              <input type="text" class="form-control" name="name" placeholder="Entry ur name" value="{{old ('name')}}">
          </div>

          <div class="form-group">
               <label for="inputAddress">Image</label>
               <input type="file" class="form-control"
                  id="myAddress" name="image">
            </div>
    

          <div class="form-group">
              <label  >Type</label>
              <input type="text" class="form-control" name="typer" placeholder="Entry product type">
          </div>

          <div class="form-group">
              <label  >Quantity</label>
              <input type="text" class="form-control" name="quantity" placeholder="Entry quantity">
          </div>

          <div class="form-group">
            <label  >Specifications:</label>
            <input type="text" class="form-control" name="specifications" placeholder="Entry Specifications ">
        </div>

        <div class="form-group">
            <label >Old Price:</label>
            <input type="number" class="form-control" name="old_price" placeholder="Entry old price">
        </div>

        <div class="form-group">
            <label >New Price:</label>
            <input type="text" class="form-control" name="new_price" placeholder="Entry new price">
        </div>

        <div class="form-group">
            <label >Made in:</label>
            <input type="text" class="form-control" name="made_in" placeholder="Entry made in">
        </div>
        
      
    
          <button type="submit" class="btn btn-danger">Add</button>
      </form>
      
   
  </div>

</div>
    </div>
    </div>
    
</body>
</html>