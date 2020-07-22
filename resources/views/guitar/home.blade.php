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
      height: 400px;
      width: 400px;
      margin: 20px;
    }


    #display {
      display: grid;
      grid-template-columns: 300px 300px 300px 300px;
      grid-gap: 20px;
    }

    footer {
      background: #222;
      color: #aaa;
      padding-top: 10px;
    }

    footer a {
      color: #aaa;
    }

    footer a:hover {
      color: #fff;
    }

    footer h3 {
      color: #0894d1;
      letter-spacing: 1px;
      margin: 30px 0 20px;
    }

    footer .three-column {
      overflow: hidden;
    }

    footer .three-column li {
      width: 33.3333%;
      float: left;
      padding: 5px 0;
    }

    footer .socila-list {
      overflow: hidden;
      margin: 20px 0 10px;
    }

    footer .socila-list li {
      float: left;
      margin-right: 3px;
      opacity: 0.7;
      overflow: hidden;
      border-radius: 50%;
      transition: all 0.3s ease-in-out;
    }

    footer .socila-list li:hover {
      opacity: 1;
    }

    footer .img-thumbnail {
      background: rgba(0, 0, 0, 0.2);
      border: 1px solid #444;
      margin-bottom: 5px;
    }

    footer .copyright {
      padding: 15px 0;
      background: #333;
      margin-top: 20px;
      font-size: 15px;
    }

    footer .copyright span {
      color: #0894d1;
    }

    .vertical-menu {
      width: 400px;
      height: 450px;
      overflow-y: auto;
    }

    .vertical-menu a {
      background-color: #eee;
      color: black;
      display: block;
      padding: 12px;
      text-decoration: none;
    }

    .vertical-menu a:hover {
      background-color: #ccc;
    }

    .vertical-menu a.active {
      background-color: black;
      color: white;
    }

    .paralell {
      display: flex;
    }

    div.container2 {
      border: 3px solid black;
      cursor: pointer;
      width: 500px;
      display: flex;
      flex-wrap: wrap;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    /* img {
    width: 100%;
    height: auto;
    transition: all ease-in-out ;
} */

    .img {
      width: 300px;
      height: 225px;
      position: relative;

      overflow: hidden;
    }

    .txt {
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.52);
      position: absolute;
      bottom: 50px;
      text-align: center;
      color: white;
      padding: 10px;
      box-sizing: border-box;
      opacity: 0;
    }

    .img:hover div.txt {
      opacity: 1;
      transform: translateY(50px);
      transition: ease-in-out 0.5s;
    }

    .img:hover img {
      transform: scale(1.5);
      transition: all ease-in-out 0.5s;


    }

    .but {
      width: 10px;
      height: 10px;
    }

    /* .username{
  width:100px;
  height: 100px;
} */
  </style>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- welcome -->
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'VIT GUITAR SHOP') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="username" class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Welcome {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="but" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
  </div>
  </nav>


  <!--  -->
</head>


<body>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <h1 style="color: yellow;">Vitguitar</h1>

    &emsp;&emsp;&emsp;&emsp;

    <form class="form-inline" action="/guitar/search">
      <input name="txtSearch" class="form-control mr-sm-2" type="text" placeholder="Nhập tên sản phẩm">
      <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span>Tìm</button>
    </form>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <!-- 
    <form action="/guitar/login" method="GET">
      <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-log-in"></span>Login</button>
    </form>
    &emsp;
    <form action="/auth/register" method="GET">
      <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span>Register</button>
    </form>
    &emsp;
    <form action="/auth/logout" method="GET">
      <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span>Logout</button>
    </form>
    &emsp; -->




  </nav>

  <h5>
    <a href="https://www.mayguitar.com/"><b>VITGUITAR</b></a>

    <img weight="80px" height="80px" src="https://cdn.shopify.com/s/files/1/1434/2352/products/Freshman-Ukulele-Soprano-Solid-Top-Mahogany-FU1S-with-gig-bag_2048x@2x.jpg?v=1477738660">
    &emsp;&emsp;&emsp;&emsp;
    <img weight="40px" height="40px" src="https://png.pngitem.com/pimgs/s/170-1702493_delivery-car-logo-png-download-delivery-car-png.png">
    <b>Giao hàng toàn quốc</b>


    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://img.pngio.com/telephone-phone-icon-telephone-icon-yellow-png-png-phone-icons-phone-icon-png-920_959.png">
    <b>Hotline: 0962973782</b>

    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://pluspng.com/img-png/best-seller-transparent-png-image-300.png">
    <b>Best seller</b>

    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://image3.tienphong.vn/w665/Uploaded/2020/rrd_uswkxr/2020_05_02/thuong_kayh.jpg">
    <b>Friendly staff</b>

    &emsp;&emsp;&emsp;&emsp;

    <img weight="40px" height="40px" src="https://phuot247.vn/wp-content/uploads/2018/07/icon-uu-dai.png">

    <b>Huge Gift</b>

  </h5>
  <center>


    <header style="background-color: yellow;">

      <link href="css/home.css">
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


      <div class="na2">
        <ul class="nav nav-tabs">

          <li class="nav-item">
            <form action="/guitar/home" method="GET">
              <h3><b><a class="nav-link" href="/guitar/home" class="btn viewBtn">Home</a></b></h3>
            </form>
          </li>

          <li class="nav-item">
            <form action="/guitar/guitarpro" method="GET">
              <h3><b><a class="nav-link" href="/guitar/guitarpro" class="btn viewBtn">Guitar</a></b></h3>
            </form>
          </li>

          <li class="nav-item">
            <h3><b><a class="nav-link" href="/guitar/kalimba">Kalimba</a></b></h3>
          </li>
          <li class="nav-item">
            <h3><b><a class="nav-link" href="/guitar/ukulele">Ukulele</a></b></h3>
          </li>
          <li class="nav-item">
            <h3><b><a class="nav-link" href="#">About Us</a></b></h3>
          </li>
          <li class="nav-item">
            <h3><b><a class="nav-link" href="https://www.youtube.com/channel/UCWvwjfgeuf-BVpCkS-v80aw">Video</a></b></h3>
          </li>
          <li class="nav-item">
            <h3><b><a class="nav-link disabled" href="https://www.youtube.com/channel/UCWvwjfgeuf-BVpCkS-v80aw">Nhu Nhu Official</a></b></h3>
          </li>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <li>
            <form action="/guitar/cart" method="GET">
              <button type="submit" class="btn btn-warning"><img weight="40px" height="40px" src="https://dijf55il5e0d1.cloudfront.net/images/rr/4/6/0/46051_1000.jpg"></span>Gio hang</button>
            </form>

          </li>
          &emsp;&emsp;


      </div>

      </ul>
      </div>

    </header>

    <div class="paralell">

      <div class="item active">
      <a href="https://www.youtube.com/channel/UCWvwjfgeuf-BVpCkS-v80aw">
        <img weight="300" height="200" src="https://i.imgur.com/pTjrhWS.jpg" alt="Vit guitar shop">
        <img weight="300" height="200" src="https://cdn.shopify.com/s/files/1/1434/2352/products/Freshman-Ukulele-Soprano-Solid-Top-Mahogany-FU1S-with-gig-bag_2048x@2x.jpg?v=1477738660" alt="Vit guitar shop">
      </a>
      </div>
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img style="width:1000px height=300px" src="https://www.sciencenewsforstudents.org/wp-content/uploads/2019/11/860_AT_guitar_acoustics.png" alt="Los Angeles">
          </div>

          <div class="item">
            <img style="width:1000px height=300px" src="https://ak.picdn.net/shutterstock/videos/21647260/thumb/1.jpg" alt="Chicago">
          </div>

          <div class="item">
            <img style="width:1000px height=300px" src="https://liveukulele.com/wp-content/uploads/easy-ukulele-songs.jpg" alt="New york">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>


      <div class="item active">
      <a href="https://www.youtube.com/channel/UCWvwjfgeuf-BVpCkS-v80aw">
       <img weight="300" height="200" src="https://i.imgur.com/yY1GitW.png" alt="Vit guitar shop">
       <img weight="200" height="200" src="https://www.livelouder.co.uk/wp-content/uploads/2019/09/Faith-Neptune-Blue-Moon-Main-1.jpg" alt="Vit guitar shop">
      </a>
    </div>



      <div class="vertical-menu">
        <a href="#" class="active">Category</a>
        <a href="/guitar/guitarpro"><img weight="50px" height="50px" src="https://www.melbournemusiccentre.com.au/pub/media/catalog/product/cache/3b000f45776ea2396d229b308c7a15d3/7/5/75995.jpg" alt="Vit guitar shop">Guitar</a>
        <a href="/guitar/ukulele"> <img weight="50px" height="50px" src="https://cdn.shopify.com/s/files/1/1434/2352/products/Freshman-Ukulele-Soprano-Solid-Top-Mahogany-FU1S-with-gig-bag_2048x@2x.jpg?v=1477738660" alt="Vit guitar shop">Ukulele</a>
        <a href="/guitar/kalimba"> <img weight="50px" height="50px" src="https://cdn.shopify.com/s/files/1/0272/6497/4901/products/kalimba-17-keys-mahogany-body-thumb-piano-308403_1024x1024.jpg?v=1584805489" alt="Vit guitar shop">Kalimba</a>
        <a href="#"><img weight="50px" height="50px" src="https://piannotrans.com/img/3347/997.jpg" alt="Vit guitar shop">Piano</a>
        <a href="#"><img weight="50px" height="50px" src="https://pianominhthanh.com/wp-content/uploads/2019/06/dan-organ-danh-dam-cuoi-chuyen-nghiep.jpg" alt="Vit guitar shop">Organ</a>
        <a href="#"><img weight="50px" height="50px" src="https://cf.shopee.vn/file/436eceab0eea238c1d6f4e81afb81dfa" alt="Vit guitar shop">Harmonica</a>
        <a href="#"><img weight="50px" height="50px" src="https://bothners.co.za/wp-content/uploads/2019/12/Grassi-GRTR150-MKII-Trombone.jpg" alt="Vit guitar shop">Trombone</a>
        <a href="#"><img weight="50px" height="50px" src="https://imgaz.staticbg.com/thumb/large/oaupload/banggood/images/72/1C/a207ec06-d2b5-4d17-a7a3-5c7ddefc1c8e.jpg" alt="Vit guitar shop">Saxophone</a>
        <a href="#"><img weight="50px" height="50px" src="https://www.rimmersmusic.co.uk/images/roland-vad306-v-drums-acoustic-design-drum-kit-p46415-107319_image.jpg" alt="Vit guitar shop">Drums</a>
        <a href="#"><img weight="50px" height="50px" src="https://sc01.alicdn.com/kf/UTB8a0R0w8ahduJk43Jaq6zM8FXa7.jpg" alt="Vit guitar shop">Harp</a>
      </div>

    </div>


  </center>
</body>
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix">

  <div class="container">


    <div class="page-header">

      <h2 style="color: red;">Featured Collection</h2>

    </div>
    <div class="row featuredCollection margin-bottom">
      <div class="col-md-3 col-12">
        <div class="thumbnail">
          <div class="img">
            <center><img weight="500px" height="190px" src="https://vn-test-11.slatic.net/p/1/dan-guitar-acoustic-khuyet-yamaha-fs100c-vang-nhat-9817-9328454-9ae04e729570cfedcbbb949316243f6e-catalog.jpg_720x720q80.jpg_.webp"></center>
            <div class="txt">
              <h3>Guitar Collections</h3>
              <small>Start From $59.00</small>
              <form action="/guitar/guitarpro" method="GET">
                <p><a style="color: yellow;" href="/guitar/guitarpro" class="btn viewBtn">View Products</a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="thumbnail">
          <div class="img">
            <center><img weight="500px" height="190px" src="https://images-na.ssl-images-amazon.com/images/I/81RwNlph1aL._AC_SL1500_.jpg" alt="feature-collection-image"></center>
            <div class="txt">
              <h3>Ukulele Collections </h3>
              <small>Start From $150.00</small>
              <p><a style="color: yellow;" href="/guitar/ukulele" class="btn viewBtn">View Products</a></p>
            </div>

          </div>

        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="thumbnail">
          <div class="img">
            <center><img weight="500px" height="190px" src="https://images-na.ssl-images-amazon.com/images/I/71E1kxXe9WL._AC_SX425_.jpg" alt="feature-collection-image"></center>
            <div class="txt">
              <h3>Kalimba Collections</h3>
              <small>Start From $25.00</small>
              <p><a style="color: yellow;" href="/guitar/kalimba" class="btn viewBtn">View Products</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="thumbnail">
          <div class="img">
            <center><img weight="500px" height="190px" src="https://images.sellbrite.com/production/16112/LPA1331CB/4cb20944-1cbf-549e-83db-22f84fa79aa5.jpg"></center>
            <div class="txt">
              <h3>Cajon Collections </h3>
              <small>Start From $520.00</small>
              <p><a style="color: yellow;" href="/guitar/guitarpro" class="btn viewBtn">View Products</a></p>
            </div>

          </div>

        </div>
      </div>
    </div>


    <div class="container">
      <br>



      <h2 style="color: red;">Products</h2>

      <br>
      <!-- <form action="" method="post"> -->
      <div id="display">
        @foreach ($guitars as $guitar)
        <div class="container">
          <div id="guitars" class="row list-group">
            <div class="item  col-xs-3 col-lg-3">
              <div class="thumbnail">

                <img class="group list-group-image" src="{{'/storage/'.$guitar->image}}" title="Vit Guitar shop" alt="Card image cap">

                <div class="caption">
                  <center>
                    <h5 class="card-title"><b> {{ $guitar->name}}</b> </h5>
                  </center>
                  <center>
                    <h5 class="card-title"> <b>Old Price</b> {{ $guitar->old_price}} $ </h5>
                  </center>
                  <center>
                    <h5 class="card-title"> <b> New Price </b> {{ $guitar->new_price}} $ </h5>
                  </center>
                  <center>
                    <p class="card-text"> <span>{{ $guitar->specification }} </span> </p>
                  </center>

                  <div class="row">



                    <div class="col-xs-12 col-md-6">
                      <form action="/guitar/detail/{{ $guitar->id }}">
                        <button type="submit" class="btn btn-warning">Detail</button>
                      </form>

                    </div>

                    <div class="col-xs-12 col-md-6">

                      <form action="/guitar/cart/{{$guitar->id}}" method="GET">

                        @csrf
                        <center><button class="btn btn-dark type = submit"><span class="fa fa-shopping-basket"></span>Cart </button></center>

                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Vlog part -->

      <div class="page-header">
        <marquee>
          <h2 style="color: red;">About Us</h2>
        </marquee>
        <div class="row featuredCollection margin-bottom">
          <div class="col-md-4 col-12">

            <div class="image">
              <center><img weight="500px" height="190px" src="https://vn-test-11.slatic.net/p/1/dan-guitar-acoustic-khuyet-yamaha-fs100c-vang-nhat-9817-9328454-9ae04e729570cfedcbbb949316243f6e-catalog.jpg_720x720q80.jpg_.webp"></center>

              <h5><a href="blog-single-right-sidebar.html">VIT GUITAR GROUP </a></h5>
              <span class="meta"> By <a class="pr-1" href="#">NHƯ PHẠM</a> / <a class="pl-1" href="blog-single-right-sidebar.html">CEO VIT GUITAR</a></span>
              <div class="caption">
                <p>VIT GUITAR GROUP established in May 2020 by CEO Pham Nhu Nguyen, VGT is a start up company. We always take the interests and customer satisfaction first</p>
              </div>


            </div>
          </div>
          <div class="col-md-4 col-12">

            <div class="image">
              <center><img weight="500px" height="190px" src="https://images-na.ssl-images-amazon.com/images/I/81RwNlph1aL._AC_SL1500_.jpg" alt="feature-collection-image"></center>

              <h5><a href="blog-single-right-sidebar.html">Collection of famous guitar brands
                </a></h5>
              <h5><a href="blog-single-right-sidebar.html"></a></h5>
              <h5>Rose,BWM</h5>
              <div class="caption">
                <p>Owns famous brands in the guitar market, sell the best quality products in sound and specifications.Rated as one of the most prestigious brands selling musical instruments in the world </p>


              </div>

            </div>
          </div>

          <div class="col-md-4 col-12">

            <div class="image">
              <center><img weight="500px" height="190px" src="https://images-na.ssl-images-amazon.com/images/I/71E1kxXe9WL._AC_SX425_.jpg" alt="feature-collection-image"></center>

              <h5><a href="blog-single-right-sidebar.html">Follow in Youtube</a></h5>
              <span class="meta">
                Censorship <a class="pr-1" href="#">Nhu Nhu Official</a> / <a class="pl-1" href="blog-single-right-sidebar.html">A Famous Youtuber</a></span>
              <div class="caption">
                <p>Is the choice of the famous and popular youtuber today,
                  choice for young people who love music, singing and composing without financial means.</p>
              </div>

            </div>
          </div>




          <footer>
            <div class="container">
              <div class="row">

                <div class="col-lg-4 col-md-6">
                  <h3>Site Map</h3>
                  <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.3524292235497!2d108.29869891433468!3d15.890596948422354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420f9c8e1f560f%3A0x5dce8cfc6e3f5fe1!2zQ8O0bmcgVHkgVE5ISCBCQSBMw5lO!5e0!3m2!1svi!2sus!4v1577723513514!5m2!1svi!2sus" width="300" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>

                  <ul class="list-unstyled three-column">
                    <li>Social Media</li>
                    <li>Service</li>
                    <li>Us</li>
                  </ul>
                  <ul class="list-unstyled socila-list">
                    <li><img weight="40px" height="40px" src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/youtube-512.png"></li>
                    <li><img weight="40px" height="40px" src="https://i.pinimg.com/originals/6a/ec/d4/6aecd4d3a513e32a11391a56d260574b.png"></li>
                    <li><img weight="40px" height="40px" src="https://lh3.googleusercontent.com/2sREY-8UpjmaLDCTztldQf6u2RGUtuyf6VT5iyX3z53JS4TdvfQlX-rNChXKgpBYMw"></li>
                    <li><img weight="40px" height="40px" src="https://seeklogo.com/images/F/facebook-new-2019-logo-5A4671100B-seeklogo.com.png"></li>
                    <li><img weight="40px" height="40px" src="https://cdn.techinasia.com/data/images/f3de63e1743ea512ad829e4233d418dd.png" alt="" /></li>
                    <li><img weight="40px" height="40px" src="https://storage.googleapis.com/proudcity/sanrafaelcaemployees/uploads/2019/10/red-email-icon-png-24.jpg.png" alt="" /></li>
                  </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                  <h3>Vịt Guitar Shop</h3>
                  <div class="media">
                    <a href="https://youtu.be/kjGp0exNd10" class="pull-left">
                      <img width="60px" src="https://cdn10.bigcommerce.com/s-ih7nm/products/1454/images/7593/luuketcmah_v3__15088.1525395536.1280.1280.png?c=2" alt="" class="media-object" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Guitar</h4>
                      <p>Vit Guitar Shop chuyên cung cấp các loại đàn guitar chất lượng cho quý khách</p>
                    </div>
                  </div>

                  <div class="media">
                    <a href="https://youtu.be/kjGp0exNd10" class="pull-left">
                      <img width="60px" src="https://cdn10.bigcommerce.com/s-ih7nm/products/1454/images/7593/luuketcmah_v3__15088.1525395536.1280.1280.png?c=2" alt="" class="media-object" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Ukulele</h4>
                      <p>Ukulele là một trong những mặt hàng bán đắt nhất của shop </p>
                    </div>
                  </div>

                  <div class="media">
                    <a href="https://youtu.be/kjGp0exNd10" class="pull-left">
                      <img width="60px" src="https://cdn10.bigcommerce.com/s-ih7nm/products/1454/images/7593/luuketcmah_v3__15088.1525395536.1280.1280.png?c=2" alt="" class="media-object" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Kalimba </h4>
                      <p>Kalimba nhập khẩu từ Hàn Quốc</p>
                    </div>
                  </div>

                </div>

                <div class="col-lg-4">
                  <h3>About Us</h3>
                  <img width="130px" src="https://cdn.shopify.com/s/files/1/1434/2352/products/Freshman-Ukulele-Soprano-Solid-Top-Mahogany-FU1S-with-gig-bag_2048x@2x.jpg?v=1477738660" class="img-fluid" alt="">
                  <a href="https://youtu.be/kjGp0exNd10">
                    <img width="130px" src="https://cf.shopee.com.my/file/37d04dd59f32ed22bbe6fec38de5983b" class="img-fluid" alt="">
                    <a href="https://youtu.be/kjGp0exNd10">
                      <img width="130px" src="https://ae01.alicdn.com/kf/Hfd4874bdd520497293b173052ed49ef1M.jpg" class="img-fluid" alt="">
                      <a href="https://youtu.be/kjGp0exNd10">
                        <img width="130px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRoSKkKW_d8NGIIGoXK4Hb_27NRWbdcVZi8deJLMpaBV39KQ-DO&usqp=CAU" class="img-fluid" alt="">
                        <a href="https://youtu.be/kjGp0exNd10">
                </div>

              </div>
            </div>
            <div class="copyright text-center">
              Copyright &copy; 2020 <span>VitGuitarShop</span>
            </div>
          </footer>



          </body>

</html>