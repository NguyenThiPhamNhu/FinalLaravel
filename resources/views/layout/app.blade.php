<!DOCTYPE html>
<html>

<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="/css/app.css">
   <style>
      body {
         background-image: url("https://api.wecode.vn/Uploads/origin/goi-y-5-cach-the-hien-trang-404-error-hieu-qua-nhat-20180820202302323.jpg");
         background-size: 1210px;

      }
   </style>
</head>

<body>
   <header>
      <center style="color: #931e2e;"><h1><b>VIT GUITAR SHOP</b></h1></center>
      <center><h2>You Must Log in</h2></center>
   </header>
   <!-- @yield('content') -->

   <center><form action="/guitar/login" method="GET">
      <button type="submit" class="btn btn-danger">Log in</button>
   </form></center>

   <!-- <footer>
<p style="background-color: yellow;">Copyright by VIT</p>
</footer> -->
   <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>