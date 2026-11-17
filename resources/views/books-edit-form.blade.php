<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('update-book', $book->id) }}">
        @csrf
        <h1>Book Edit Form</h1>
        <div>Nama Buku</div>
        <input type="text" name="title" value="{{ $book->title }}">
        <div>Penulis Buku</div>
        <input type="text" name="writer" value="{{ $book->writer }}">
        <div>Tahun Terbit</div>
        <input type="number" name="published_year" value="{{ $book->published_year }}">
        <div>Cover Buku</div>
        <input type="file" name="cover_path" value="{{ $book->cover_path }}">
        <div>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>