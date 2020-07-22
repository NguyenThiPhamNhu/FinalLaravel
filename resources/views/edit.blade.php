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


        
         <form action="/user/home/{{$dbedit->id}}" method="post" enctype="multipart/form-data">
         @method("PATCH")
         @csrf
           
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Tên </label>
                  <input type="text" class="form-control"
                     name="tenmoi" value="{{$dbedit->ten}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >Giá</label>
                  <input type="text" class="form-control"
                      name="giamoi" value="{{$dbedit->gia}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >Số lượng</label>
                  <input type="text" class="form-control"
                      name="soluongmoi" value="{{$dbedit->so_luong}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >Chi tiết</label>
                  <input type="text" class="form-control"
                      name="chitietmoi" value="{{$dbedit->chi_tiet}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >Thương hiệu</label>
                  <input type="text" class="form-control"
                      name="thuonghieumoi" value="{{$dbedit->thuong_hieu}}">
               </div>
               <div class="form-group col-sm-6">
                  <label >Trạng thái</label>
                  <input type="text" class="form-control"
                      name="trangthaimoi" value="{{$dbedit->trang_thai}}">
               </div>
            </div>
            <div class="form-group">
               <label >Image</label>
           
               <input type="file" class="form-control" id="file" name="photoNew" value="{{$dbedit->Image}}"> 
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