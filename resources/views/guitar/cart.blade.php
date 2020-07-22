<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" type="text/css" href="/css/home.css">
  <script src="js/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

</head>
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
            {{ Auth::user()->name }} <span class="caret"></span>
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
<div>
  @include('partials\header')
</div>

<body>
  <marquee>
    <h2 style="color: red;">Welcome To your Cart</h2>
  </marquee>
  <br>
  <table class="table">
    <tr style="background-color: #fff3f5;">
      <td>Picture</td>
      <td>Name</td>
      <td>Price</td>
      <td>Quantity</td>
      <td>Do you want </td>
      <td>Total</td>
      <td></td>

    </tr>
    @foreach($cartdata as $cart)
    <tr>
      <th>
        <img style="width: 150px;height: 150px;" src="{{'/storage/'.$cart->image}}">
      </th>
      <?php
      $total = 0;
      ?>
      <th>{{$cart->name}}</th>
      <th>{{$cart->new_price}}000</th>

      <th><input type="number" name="" value="{{$cart->quantity}}"></th>
      <!-- <th><form action="/guitar/cart">
        <button type="submit"></button>
      </form></th> -->
      <!--  -->
      <th>
        <form method="POST" action="/guitar/cart/{{$cart->id}}">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </th>
      <th>{{number_format($cart->new_price * $cart->quantity) }}.000.000 VND</th>
    </tr>
    @endforeach
  </table>
  <hr>

  <div style="display: flex;">

    <div style="margin-right: -50px;">
      
        <!-- 
      <button class="btn btn-danger" onclick="myFunction()">Pay</button>

      <script>
        function myFunction() {
          alert("Congratulation {{ Auth::user()->name }}! You have order product successfuly ");
        }
      </script> -->

        <form action="/guitar/index/order" method="GET">
          <button type="submit" class="btn btn-danger">Pay</button>
        </form>
      
    </div>
  </div>

  <center><a href="/guitar/home"> home </a></center>

</body>

</html>