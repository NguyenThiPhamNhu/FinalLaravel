<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chi tiet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Vit Guitar Shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Guitar <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Aucostic</a></li>
                        <li><a href="#">Classic</a></li>
                        <li><a href="#">Electric</a></li>
                    </ul>
                </li>
                <li><a href="#">Ukulele</a></li>
                <li><a href="#">Kalimba</a></li>
            </ul>
        </div>
    </nav>

    <div id="display">
        @foreach ($db as $sanpham)
        <div class="container">
            <div id="sanpham" class="row list-group">
                <div class="item  col-xs-3 col-lg-3">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{'/storage/'.$sanpham->Image}}" title="Vit Guitar shop" alt="Card image cap">
                        <div class="caption">
                            <center>
                                <h5 class="card-title"> {{ $sanpham->ten}} </h5>
                            </center>
                            <center>
                                <h5 class="card-title"> {{ $sanpham->chi_tiet}} </h5>
                            </center>
                            <center>
                                <p class="card-text"> <span>{{ $sanpham->thuong_hieu }} </span> </p>
                            </center>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- </form> -->

   




</body>

</html>