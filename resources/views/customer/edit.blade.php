<form action="{{'/books/'.$book->id}}" method="POST">
@csrf
@method('PATCH')
<input type="text" name="title" value="{{$book->title}}"><br>
<input type="text" name="author" value="{{$book->author}}"><br>
<input type="text" name="price" value="{{$book->price}}"><br>
<button type="submit" class="btn btn-info">Submit</button>
</form>