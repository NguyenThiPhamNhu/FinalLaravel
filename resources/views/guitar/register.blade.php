<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body{
      
      background-color: chocolate;
    }
  </style>
</head>
<body>


<div class="container">
  <h2>Register</h2>
  &emsp;&emsp; <img weight="100px" height="100px" src="https://cdn.clipart.email/b3b0e870d68d6dd7a9c7b1b443c9fdc4_register-icon-png-at-getdrawings-free-download_512-512.png">
  
  <form action="/guitar/register" method="POST">
  @csrf
    <div class="form-group">
      <label for="email">User name:</label>
      <input style="width:300px"  class="form-control"  placeholder="username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input style="width:300px" class="form-control"  placeholder="Enter password" name="password">
    </div>

    

    <div class="form-group">
      <label for="pwd">Phone:</label>
      <input style="width:300px" class="form-control"  placeholder="Enter phone" name="phone">
    </div>

    <div class="form-group">
      <label for="pwd">Role:</label>
      <input style="width:300px" class="form-control"  placeholder="Enter role" name="role">
    </div>
 
    <div class="form-group">
      <label for="pwd">Type:</label>
      <input style="width:300px" class="form-control"  placeholder="Enter type" name="type">
    </div>

   

    <div class="form-group form-check">
      
    </div>
    <button type="submit" class="btn btn-danger">Register</button>
  </form>
</div>


</body>
</html>