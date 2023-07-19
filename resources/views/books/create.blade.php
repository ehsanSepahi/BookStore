<!DOCTYPE html>
<html>
<head>
    <title>Bookstore - Add New Book</title>
</head>
<body>
<h1>Bookstore - Add New Book</h1>
<form action="/books" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required>
    <br>
    <label for="year">Publication Year:</label>
    <input type="number" id="year" name="year" required>
    <br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>
    <br>
    <button type="submit">Add Book</button>
</form>
<a href="/books">Back to List</a>
</body>
</html>
