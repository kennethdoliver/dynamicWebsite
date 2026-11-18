<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Title</td>
            <td>Writer</td>
            <td>Published Year</td>
            <td>Cover</td>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->writer}}</td>
                <td>{{$book->published_year}}</td>
                <td><img src="{{$book->cover_path}}" alt="Book Cover"></td>
                <td>
                    <form method="POST" action="{{ route('destroy-book', $book->id) }}">
                        @csrf
                        <input value="{{ $book->id }}" type="hidden" name="id">
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td>
                    <form method="POST" action="{{ route('edit-book', $book->id) }}">
                        @csrf
                        <input value="{{ $book->id }}" type="hidden" name="id">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>