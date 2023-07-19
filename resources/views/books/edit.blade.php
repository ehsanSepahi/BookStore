<!DOCTYPE html>
<html>
<head>
    <title>Bookstore - Update Book</title>
</head>
<body>
<h1>Bookstore - Update Book</h1>
<form action="/books/{{ $book->id }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $book->title }}" required>
    <br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value="{{ $book->author }}" required>
    <br>
    <label for="year">Publication Year:</label>
    <input type="number" id="year" name="year" value="{{ $book->year }}" required>
    <br>
    <label for="price">Price:</label>
    <input type="number" step="0.01" id="price" name="price" value="{{ $book->price }}" required>
    <br>
    <button type="submit">Update Book</button>
</form>
<a href="/books">Back to List</a>
</body>
</html>
