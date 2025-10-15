<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>📖 Daftar Buku</h1>
    <ul>
        @foreach($books as $book)
            <li>
                {{ $book->title }} - {{ $book->author->name }}
                (Harga: Rp {{ number_format($book->price, 0, ',', '.') }})
            </li>
        @endforeach
    </ul>
</body>
</html>