<!-- resources/views/movies/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add Movie</title>
</head>
<body>
    <h1>Add Movie</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <label>Poster:</label>
        <input type="text" name="poster">
        <label>Intro:</label>
        <input type="text" name="intro" required>
        <label>Release Date:</label>
        <input type="date" name="release_date" required>
        <label>Genre:</label>
        <select name="genre_id" required>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        <button type="submit">Add Movie</button>
    </form>
</body>
</html>
