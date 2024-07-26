

<!DOCTYPE html>
<html>
<head>
    <title>chi tiết phim</title>
</head>
<body>
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->intro }}</p>
    <p>Genre: {{ $movie->genre->name }}</p>
    <p>Release Date: {{ $movie->release_date }}</p>
    @if($movie->poster)
        <img src="{{ $movie->poster }}" alt="{{ $movie->title }} poster">
    @endif
</body>
</html>
