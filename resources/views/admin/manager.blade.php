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
</head>

<title>Admin</title>
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
</style>
</head>

<body>

    <center>
        <h3>Categories</h3>


        <table border="1px;">
            <tr>
                <th>Category ID</th>
                <th>Name</th>

                <th>Created At</th>
                <th>Update At</th>
                <th>Add</th>
                <th>Delete </th>
                <th>Edit </th>


            </tr>

            <tr>
                @foreach($categories as $category)

                <td>{{$category ->category_id}}</td>
                <td>{{$category -> name}}</td>
                <td>{{$category -> created_at}}</td>
                <td>{{$category -> updated_at}}</td>


                <td>
                    <form action="/admin/insert" method="get">

                        <button type="button" class="btn btn-danger">Add</button>

                    </form>
                </td>

                <td><button type="button" class="btn btn-danger">Delete</button></td>
                <td><button type="button" class="btn btn-danger">Edit</button></td>


            </tr>
            @endforeach


        </table>
    </center>

    <center>
        <h3>Tags</h3>


        <table border="1px;">
            <tr>
                <th>Tag ID</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Add</th>
                <th>Delete </th>
                <th>Edit </th>

            </tr>

            <tr>
                @foreach($tags as $tag)

                <td>{{$tag ->tag_id}}</td>
                <td>{{$tag -> name}}</td>
                <td>{{$tag -> created_at}}</td>
                <td>{{$tag -> updated_at}}</td>
                <td><button type="button" class="btn btn-warning">Add</button></td>
                <td>
                    <form action="{{'/insert/'.$category->category_id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </td>
                <form action="{{'/admin/insert/'.$category->category_id.'/edit'}}">
               
                    <td><button type="button" class="btn btn-warning">Edit</button></td>
                </form>
            </tr>
            @endforeach


        </table>
    </center>

    <center>
        <h3>Photos</h3>


        <table border="1px;">
            <tr>
                <th>Photo ID</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Add</th>
                <th>Delete </th>
                <th>Edit </th>


            </tr>

           

            


        </table>
    </center>
</body>

</html>