<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  body {
    background-color: #ffcccc;
  }
</style>

<body>

  <div class="container">
    <h2>Add Photo with me</h2>
    <form action="/insert">
      <div class="form-group">
        <label>Photo name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter photo name" name="name">
      </div>

      <div class="form-group">
        <form action="{{'/admin/insert/manager'}}">
          <label>Choose a category:</label>
          <select name="categories" id="categories">
            @foreach($categories as $category)

            <option value="{{$category ->category_id}}">{{$category ->name}}</option>

            @endforeach
          </select>
          <br><br>

        </form>
      </div>
      <div class="form-group">
        <form action="/tags">
          <label>Choose a tag:</label>
          <select name="tags" id="tags" multiple>
            @foreach($tags as $tag)

            <option value="{{$tag ->name}}">{{$tag ->name}}</option>

            @endforeach
          </select>
          <br><br>

        </form>
      </div>



      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>

</body>

</html>