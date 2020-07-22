<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid mt-3">
         <h4 class="mb-2">EDIT </h4>


        
         <form action="/crud/edit/{{$dbedit->id}}" method="post" enctype="multipart/form-data">
         @method("PATCH")
         @csrf
           
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Name </label>
                  <input type="text" class="form-control"
                     name="newname" value="{{$dbedit->name}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >CLass</label>
                  <input type="text" class="form-control"
                      name="newclass" value="{{$dbedit->class}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >Address</label>
                  <input type="text" class="form-control"
                      name="newaddress" value="{{$dbedit->address}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >DoB</label>
                  <input type="text" class="form-control"
                      name="newdob" value="{{$dbedit->dob}}">
               </div>
               
            
              <center><button class="btn btn-dark" type = "submit"><span class="glyphicon glyphicon-pencil"></span>Update </button></center>
                                    
          
         </form>
        
        
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
    
</body>
</html>