<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Thêm sản phẩm</title>
    <style>
    body{
      
      background-color: lightblue;
      
    }
  </style>
</head>
<body>
<div class="container-fluid mt-3">
         <h4 class="mb-2">Add </h4>
         <form action="/add/avatar" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="title">Tên sản phẩm </label>
                  <input type="text" class="form-control"
                     id="ten" name="ten" placeholder="Tên san phẩm ">
               </div>
               <div class="form-group col-sm-6">
                  <label for="gia">Giá</label>
                  <input type="text" class="form-control"
                     id="gia" name="gia" placeholder="Giá">
               </div>

               <div class="form-group col-sm-6">
                  <label for="soluong">Số lượng </label>
                  <input type="text" class="form-control"
                     id="so_luong" name="so_luong" placeholder="Số lượng">
               </div>

               <div class="form-group col-sm-6">
                  <label for="chitiet">Chi tiết </label>
                  <input type="text" class="form-control"
                     id="chi_tiet" name="chi_tiet" placeholder="Chi tiết">
               </div>

               <div class="form-group col-sm-6">
                  <label for="thuonghieu">Thương hiệu </label>
                  <input type="text" class="form-control"
                     id="thuong_hieu" name="thuong_hieu" placeholder="Thương hiệu">
               </div>
               

               <div class="form-group col-sm-6">
                  <label for="trangthai">Trạng thái </label>
                  <input type="text" class="form-control"
                     id="trang_thai" name="trang_thai" placeholder="Trạng thái">
               </div>

               

               <!-- <div class="form-group col-sm-6">
                  <label for="comment">Comment</label>
                  <input type="text" class="form-control"
                     id="comment" name="comment" placeholder="comment">
               </div> -->
            </div>

            <div class="form-group">
               <label for="inputAddress">Image</label>
               <input type="file" class="form-control"
                  id="myAddress" name="Image">
            </div>

           
            <form>  <button type="submit" class="btn btn-primary">Add avatar</button> </form>
            
         </form>
         
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>