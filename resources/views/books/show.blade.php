<!DOCTYPE html>
<html>
<head>
    <title>Bookstore - Book Details</title>
</head>
<body>
<h1>Bookstore - Book Details</h1>
<h2>{{ $book->title }}</h2>
<p>Author: {{ $book->author }}</p>
<p>Publication Year: {{ $book->year }}</p>
<p>Price: {{ $book->price }}$</p>
<a href="/books">Back to List</a>
</body>
</html>
