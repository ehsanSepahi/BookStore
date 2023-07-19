<!DOCTYPE html>
<html>
<head>
    <title>Bookstore - Search Books</title>
</head>
<body>
<h1>Bookstore - Search Books</h1>
<form action="/books/search" method="get">
    <label for="search_query">Search:</label>
    <input type="text" id="keyword" name="keyword" required>
    <button type="submit">Search</button>
</form>
<h1>Bookstore - List of Books Find</h1>
@if(isset($books))

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="/books/{{ $book->id }}">{{ $book->title }}</a> by {{ $book->author }} - Price: {{ $book->price }}$
                <a href="/books/edit/{{ $book->id }}">edit</a>
            </li>
        @endforeach
    </ul>

@endif
<a href="/books">Back to List</a>
</body>
</html>
