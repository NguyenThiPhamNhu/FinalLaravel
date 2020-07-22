<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        div{
            display: inline-block;
            border: 2px solid black;
            height: auto;
            width:auto;
            margin: 20px;
}

    </style>
</head>
<body>
    <center><h1>MY INSTAGRAM</h1></center>
<hr>
<form action="/add" method="get">
    <center><button type="submit"> ADD AVATAR </button></center>
</form>
<br>
    <form action="" method="post">
    @foreach ($db as $photos)
   

    
           <div>
            <p><img title="Avatar" src="storage/{{$photos->Image}}" width="304" height="236"></p>
            <center><h1 style="color: red">  {{$photos->Title}} </h1></center>
            <center><h5 style="color: lightblue">{{$photos->Description}}</h5></center>
           
            
           
               <form action = '{{"/delete/".$photos->Id}} ' method = "POST">
                @csrf
                @method("DELETE")
                <center><button class="btn btn-danger type = submit"><span class="glyphicon glyphicon-trash"></span>Delete </button></center>
                
                <center><textarea  type="Text" placeholder="Enter ur comment"></textarea></center>
            </form>

            <!-- ghhh -->
            
               
               <form action = '{{"/edit/".$photos->Id}} ' method = "POST">
                @csrf
                @method("DELETE")
                <center><button class="btn btn-dark type = submit"><span class="glyphicon glyphicon-pencil"></span>edit </button>
                <button class="btn btn-primary" type = "submit"><span class="glyphicon glyphicon-thumbs-up"></span> </button><button class="btn btn-dark type = "submit"><span class="glyphicon glyphicon-share-alt"></span> </button></center>
                </form>

                

                
            </div>
           </div></hr>
        
        @endforeach
    </form>
</body>
</html>