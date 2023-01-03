<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="my-5 mx-5">
        <h1 class="my-4">Quản lí chuyến đi
            <a href="{{ route('create') }}">
                <button class="btn btn-dark">Create</button>
            </a>
        </h1>

        @if (Session::has('success'))
            <h3 class="alert alert-info">{{ Session::get('success') }}</h3>
        @endif


        <table class="table table-success">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên chuyến đi</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Điểm đến</th>
                    <th scope="col">Ngày đi</th>
                    <th scope="col">Rủi ro</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Chi phí</th>
                    <th scope="col">Tổng số</th>
                    <th scope="col">Hạn nộp tiền</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Ngày khởi tạo</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->destination }}</td>
                        <td>{{ $item->date_trip }}</td>
                        <td>{{ $item->risk }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->expense }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->deadline }}</td>
                        <td>{{ $item->comment }}</td>
                        
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="{{ route('edit', ['id' => $item->id]) }}">
                                <button class="btn btn-warning" type="button">Edit</button>
                            </a>

                            <a href="{{ route('delete', ['id' => $item->id]) }}">
                                <button class="btn btn-danger" type="button">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
