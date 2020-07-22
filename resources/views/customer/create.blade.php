<body>
<form action="/books" method="POST">
@csrf
<input type="text" name="title"><br>
<input type="text" name="author"><br>
<input type="text" name="price"><br>
<button type="submit" class="btn btn-info">Submit</button>
</form>

</body>