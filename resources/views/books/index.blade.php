<!DOCTYPE html>
<html>
<head>
    <title>Bookstore - List of Books</title>
</head>
<body>
<h1>Bookstore - List of Books</h1>
<ul>
    @foreach ($books as $book)
        <li>
            <a href="/books/{{ $book->id }}">{{ $book->title }}</a> by {{ $book->author }} - Price: {{ $book->price }}$
            <a href="/books/edit/{{ $book->id }}">edit</a>
        </li>
    @endforeach
</ul>

<a href="/books/create">insert</a>  <a href="/books/search">search</a>
</body>
</html>
