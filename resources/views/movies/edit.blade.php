

<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
</head>
<body>
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $movie->title }}" required>
        <label>Poster:</label>
        <input type="text" name="poster" value="{{ $movie->poster }}">
        <label>Intro:</label>
        <input type="text" name="intro" value="{{ $movie->intro }}" required>
        <label>Release Date:</label>
        <input type="date" name="release_date" value="{{ $movie->release_date }}" required>
        <label>Genre:</label>
        <select name="genre_id" required>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>{{ $genre->name }}</option>
            @endforeach
        </select>
        <button type="submit">up dữ liệu</button>
    </form>
</body>
</html>
