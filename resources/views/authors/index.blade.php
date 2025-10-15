<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penulis</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>📚 Daftar Penulis</h1>
    <ul>
        @foreach($authors as $author)
            <li>
                {{ $author->name }} - {{ $author->email }}
                (Jumlah buku: {{ $author->books_count }})
            </li>
        @endforeach
    </ul>
</body>
</html>