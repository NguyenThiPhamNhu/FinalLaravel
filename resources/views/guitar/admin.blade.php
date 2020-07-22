<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<title>Guitar shop</title>
<style>
  table {
    width: 900px;
    height: 100px;
  }

  th {
    background-color: yellow;
  }

  td {
    background-color: #e1f0f5;
  }

  body {
    background-color: #fff5eb;
  }

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
</style>
</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <h1 style="color: yellow;">Vitguitar</h1>

  &emsp;&emsp;&emsp;&emsp;

  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Nhập tên sản phẩm">
    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span>Tìm</button>
  </form>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

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
          <h3><b><a class="nav-link active" href="/guitar/home">Home</a></b></h3>
        </li>
        <li class="nav-item">
          <h3><b><a class="nav-link" href="#">Product Manage</a></b></h3>
        </li>

        <li class="nav-item">
          <h3><b><a class="nav-link" href="#">User Manage</a></b></h3>
        </li>

        <li class="nav-item">
          <h3><b><a class="nav-link disabled" href="#">Disabled</a></b></h3>
        </li>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <li>
          <form action="/user/home" method="GET">
            <button type="submit" class="btn btn-warning"><img weight="40px" height="40px" src="data:image/png;base64,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"></span>Gio hang</button>
          </form>

        </li>
        &emsp;&emsp;


    </div>

    </ul>
    </div>

  </header>


  <body>



    <center>
      <h1>WELCOME TO VIT GUITAR SHOP</h1>
      <table border="1px;">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Image</th>
          <th>Typer</th>
          <th>Quantity</th>
          <th>Old Price</th>
          <th>New Price</th>
          <th>Specifications</th>
          <th>Made in</th>
          <th>Delete</th>
          <th>Add</th>
          <th>Edit</th>


        </tr>
        @foreach($guitars as $guitar)
        <tr>
          <td>{{$guitar -> id}}</td>
          <td>{{$guitar -> name}}</td>
          <td><img width="100px" height="100px" class="group list-group-image" src="{{'/storage/'.$guitar->image}}" alt="Card image cap"></td>
          <td>{{$guitar -> typer}}</td>
          <td>{{$guitar -> quantity}}</td>
          <td>{{$guitar -> old_price}}</td>
          <td>{{$guitar -> new_price}}</td>
          <td>{{$guitar -> specifications}}</td>
          <td>{{$guitar -> made_in}}</td>


          <td>
            <form action="{{'/guitar/admin/'.$guitar->id}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-warning">Delete</button>
            </form>
          </td>
          <td>
            <form action="/guitar/add" method="GET">
              <button type="submit" class="btn btn-danger">Add</button>
            </form>
          </td>
          <td>
            <a href="{{'/guitar/admin/'.$guitar->id.'/edit'}}">Edit</a>
          </td>



        </tr>
        @endforeach
      </table>
    </center>



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