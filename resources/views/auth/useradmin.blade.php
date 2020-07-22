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


    #display{
        display: grid;
        grid-template-columns: 300px 300px 300px 300px;
        grid-gap: 20px;
        }
  </style>
</head>

<body>


  </form>


  @include('partials\header')


  <div class="container">
    <form></form>

    <center>
      <h1 style="color: black;">Chào {{ Auth::user()->username }} đến với Vịt guitar shop</h1>
    </center>


    <form action="/auth/register" method="get">
      <center><button type="submit" class="btn btn-warning" > Thêm người dùng </button></center>
    </form>
    <br>

    <center><h2 style="color: black;">Danh sách người dùng</h2></center>
    <br>
    <!-- <form action="" method="post"> -->

    <div class="container">
  <h2>Danh sach nguoi dung</h2>
            
  <table class="table">
    <thead>
      <tr>
      <th>User</th>
                <th>Password</th>
                <th>Name</th>
                <th>Class</th>
                <th>Role</th>
                <th>DELETE</th>
                <th>EDIT</th>
      </tr>
      @foreach($db as $users)
    </thead>
    <tbody>
      <tr>
                <td>{{$users -> username}}</td>
                <td>{{$users -> password}}</td>
                <td>{{$users -> name}}</td>
                <td>{{$users -> class}}</td>
                <td>{{$users -> role}}</td>
                <td>
                <form action = '{{"/auth/useradmin/".$users->id}} ' method = "POST">
                    @csrf
                    @method("DELETE")
                    <center><button class="btn btn-danger type = submit"><span class="glyphicon glyphicon-trash"></span>Delete </button></center>
                  </form>

                </td>
                <td>
                    <form action='{{"/edit/".$users->id}} ' method="GET">
                    <center><button class="btn btn-warning type = submit"><span class="glyphicon glyphicon-pencil"></span>Edit </button></center>
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