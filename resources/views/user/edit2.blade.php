<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<div>
        <center>
            <center>
                <h3>Sửa thông tin sản phẩm</h3>
            </center>
            <form action="{{'/user/home/edit2'.$edit->id}}" method="post" enctype="multipart/form-data">

                @csrf
                @method("PATCH")
                <label ><b>Name</b></label>
                <input type="text" placeholder="Enter name" name="ten" id="ten" value="{{$edit->ten}}" required>

                <label ><b>Old Price</b></label>
                <input type="text" placeholder="Enter oldPrice" name="gia" id="gia"
                    value="{{$edit->gia}}" required>

                <label for="newPrice"><b>So luong</b></label>
                <input type="text" placeholder="Enter newPrice" name="so_luong" id="so_luong"
                    value="{{$edit->so_luong}}" required>

                <label for="description"><b>Chi tiet</b></label>
                <input type="text" placeholder="Enter description" name="chi_tiet" id="chi_tiet"
                    value="{{$edit->chi_tiet}}" required>

                <label for="image">Photo</label>
                <input type="file" id="Image" name="Image">
                <input type="submit" value="Cập nhật">
            </form>
        </center>
    </div>