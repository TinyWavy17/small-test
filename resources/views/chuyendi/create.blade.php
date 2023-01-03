<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="my-5 mx-5">
        <h1 class="my-5">Tạo chuyến đi</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="row container" action="{{ route('store') }}" method="post">
            @csrf
            <div class="col-4 mb-3">
                <label for="name" class="form-label">Chuyến đi </label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name">
            </div>

            <div class="col-4 mb-3">
                {{-- <label for="category" class="form-label">T/label>
                <input type="text" name="category" value="{{ old('category') }}" class="form-control" id="category"> --}}
                <select name="category" class="form-select" aria-label="Default select example">
                    <option> -- Chọn thể loại chi phí --</option>
                    <option value="travel">Du lịch</option>
                    <option value="food">Đồ ăn</option>
                    <option value="shopping">Mua sắm</option>
                    <option value="other">Khác</option>
                </select>
            </div>

            <div class="col-4 mb-3">
                <label for="destination" class="form-label">Điểm đến</label>
                <input type="text" name="destination" value="{{ old('destination') }}" class="form-control"
                    id="destination">
            </div>

            <div class="col-4 mb-3">
                <label for="date_trip" class="form-label"> Ngày đi </label>
                <input type="date" name="date_trip" value="{{ old('date_trip') }}" class="form-control"
                    id="date_trip">
            </div>

            <div class="col-4 ">
                Đánh giá rủi ro
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="risk" value="1" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Có
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="risk" value="0" id="flexRadioDefault2"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Không
                    </label>
                </div>
            </div>

            <div class="col-8 mb-3">
                <label for="description" class="form-label"> Mô tả </label>
                <input type="text" name="description" value="{{ old('description') }}" class="form-control"
                    id="description">
            </div>

            <div class="col-4 mb-3">
                <label for="expense" class="form-label"> Chi phí </label>
                <input type="number" min="100000" max="10000000" step="10000" name="expense"
                    value="{{ old('expense') }}" class="form-control" id="expense">
            </div>


            <div class="col-4 mb-3">
                <label for="total" class="form-label"> Tổng số </label>
                <input type="number" min="100000" max="10000000" step="10000" name="total"
                    value="{{ old('total') }}" class="form-control" id="total">
            </div>


            <div class="col-4 mb-3">
                <label for="deadline" class="form-label"> Hạn nộp tiền </label>
                <input type="date" name="deadline" value="{{ old('deadline') }}" class="form-control"
                    id="deadline">
            </div>

            <div class="col-12 mb-3">
                <label for="comment" class="form-label"> GHi chú </label>
                <input type="text" name="comment" value="{{ old('comment') }}" class="form-control"
                    id="comment">
            </div>

            <button type="submit" class="btn btn-primary">Tạo</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
