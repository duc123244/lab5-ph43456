<!DOCTYPE html>
<html>
<head>
    <title>Danh sách phim</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Danh sách phim</h1>

    <a href="{{ route('movies.create') }}">Thêm movie</a>

    <form method="GET" action="{{ route('movies.index') }}">
        <input type="text" name="title" placeholder="Tìm kiếm theo tiêu đề" value="{{ request('title') }}">
        <button type="submit">Tìm kiếm</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Giới thiệu</th>
                <th>Thể loại</th>
                <th>Ngày phát hành</th>
                <th>Ảnh bìa</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @if($movies->isEmpty())
                <tr>
                    <td colspan="6">404</td>
                </tr>
            @else
                @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->intro }}</td>
                        <td>{{ $movie->genre->name }}</td>
                        <td>{{ $movie->release_date }}</td>
                        <td>
                            @if($movie->poster)
                                <img src="{{ $movie->poster }}" alt="{{ $movie->title }} poster" width="50">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('movies.show', $movie->id) }}">Xem chi tiết</a>
                            <a href="{{ route('movies.edit', $movie->id) }}">Chỉnh sửa</a>
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Bạn chắc chưa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
{{-- 
    {{ $movies->links() }}  --}}

</body>
</html>
