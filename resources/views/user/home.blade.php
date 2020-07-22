<!DOCTYPE html>
<html>

<head>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
  <style>
    .show {

      display: inline-block;
      border: 2px solid black;
      height: 500px;
      width: 400px;
      margin: 30px;
    }


    #display{
        display: grid;
        grid-template-columns: 300px 300px 300px 300px;
        grid-gap: 20px;
        }
  </style>
</head>

<body>


  @include('partials\header')


  <div class="container">
    <form></form>

    <center>
      <h1 style="color: black;">Chào {{ Auth::user()->name }} đến với Vịt guitar shop</h1>
    </center>


    <form action="/add" method="get">
      <center><button type="submit" class="btn btn-warning" > Thêm sản phẩm </button></center>
    </form>
    <br>

    <h2 style="color: #CD5C5C;">Ukulele Vit Guitar Shop</h2>
    <br>
    <!-- <form action="" method="post"> -->
    <div id="display">
        @foreach ($db as $sanpham)
        <div class="container">
            <div id="sanpham" class="row list-group">
                <div class="item  col-xs-3 col-lg-3">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{'/storage/'.$sanpham->Image}}" title="Vit Guitar shop" alt="Card image cap">
                        <div class="caption">
                            <center><h5 class="card-title"> {{ $sanpham->ten}} </h5></center>
                            <center><h5 class="card-title"> {{ $sanpham->gia}} $ </h5> </center>
                            <center><p class="card-text"> <span>{{ $sanpham->thuong_hieu }} </span> </p> </center>

                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                  
                                <form action = '{{"/user/home/".$sanpham->id}} ' method = "POST">
                                    @csrf
                                    @method("DELETE")
                                    <center><button class="btn btn-danger type = submit"><span class="glyphicon glyphicon-trash"></span>Delete </button></center>
                                </form>

                                </div>
                                <div class="col-xs-12 col-md-6"> 
                                <form action = '{{"/user/home/edit2/".$sanpham->id}}/edit2'  method = "get">
                                @csrf
                                    <center><button class="btn btn-dark" type = "submit"><span class="glyphicon glyphicon-pencil"></span>Edit </button></center>
                                </form>

                                &emsp;&emsp;&emsp;
                            </div>

                                </div>
                               
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  <!-- </form> -->

  <table class="table">
    <thead>
      <tr>
      <th>Sản phẩm</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Chi tiết</th>
                <th>Thương hiệu</th>
                <th>Số lượng</th>
                <th>DELETE</th>
                <th>EDIT</th>
                
      </tr>
      @foreach($db as $sanpham)
    </thead>
    <tbody>
      <tr>
                <td>{{$sanpham -> ten}}</td>
                <td>{{$sanpham -> gia}}</td>
                <td>{{$sanpham -> chi_tiet}}</td>
                <td>{{$sanpham -> thuong_hieu}}</td>
                <td>{{$sanpham -> so_luong}}</td>
                <td>{{$sanpham -> trang_thai}}</td>
                <td>
                <form action = '{{"/user/home/".$sanpham->id}} ' method = "POST">
                    @csrf
                    @method("DELETE")
                    <center><button class="btn btn-danger type = submit"><span class="glyphicon glyphicon-trash"></span>Delete </button></center>
                  </form>
                </td>
                <td>
                <form action = '{{"/user/home/".$sanpham->id}} ' method = "POST">
                    @csrf
                    @method("DELETE")
                    <center><button class="btn btn-warning type = submit"><span class="glyphicon glyphicon-trash"></span>Details </button></center>
                  </form>
                </td>
                
      </tr>
      
    </tbody>
    @endforeach
  </table>
</div>


  @include('partials\footer')

</body>

</html>